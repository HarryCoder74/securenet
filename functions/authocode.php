<?php

include('myfunctions.php');
include("../config/connect.php");

require '../vendor/autoload.php';

use Sonata\GoogleAuthenticator\GoogleAuthenticator;

if(isset($_POST['register_btn'])){

    $name =   $_POST['name'];
    $phone =   $_POST['phone'];
    $email =   $_POST['email'];
    $password =   $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(empty($name)){
        echo("Name is required");
    }elseif(empty($phone)){
        echo("Phone number is required");
    }elseif(empty($email)){
        echo("Email is required");
    }
    elseif(empty($password)){
        echo("password is required");
    } elseif(empty($cpassword)){
        echo("password is required");
    }
    else{

        if(!preg_match("/[a-z]/i",$password)){
            redirect("../register.php", "password must at least contain at least one charector");
        }
        if(!preg_match("/[0-9]/",$password)){
            redirect("../register.php", "password must at least contain at least one number");
            
        }
        if(!$password>8){
            redirect("../register.php", "password must at least contain at least 8 charectors");
        }
        if(! filter_var($email ,FILTER_VALIDATE_EMAIL)){
            redirect("../register.php", "invalid email");
    }

        
    $g = new GoogleAuthenticator();
    $secret = $g->generateSecret();

    
    
    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);
    if(mysqli_num_rows($check_email_query_run)> 0){
        
        $_SESSION['message'] = "Email already registerd";
        header('Location: ../register.php');

    }else{

    

    if($password == $cpassword){
    

        // insert data
        $insert_query = "INSERT INTO users (name,email,phone,password,secret) VALUES ('$name','$email','$phone','$hash','$secret')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run){
            $qrCodeUrl = $g->getURL($username, 'SecureNet', $secret);
            //echo '<img src="' . $qrCodeUrl . '" />';
            echo '<img src="../admin/assets/img/SecuNet.jpg" />';
            $_SESSION['qrcode'] = $qrCodeUrl;
            header('Location: ../login.php');
            
        }else{
            $_SESSION['message'] = "Something went wrong";
            header('Location: ../register.php');

        }

    
    }
    else
    {
        $_SESSION['message'] = "passwords do not macth";
        header('Location: ../register.php');
    }
    
}
    }
}
elseif(isset($_POST['login_btn'])){
    $email =   $_POST['email'];
    $password =   $_POST['password'];
    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con,$login_query);
    if(mysqli_num_rows($login_query_run)>0){
         
        $_SESSION['auth']= true;
        $userdata = mysqli_fetch_array($login_query_run);
        $user_id = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];
        $_SESSION['auth_user'] = [
            'user_id'=> $user_id,
            'name' => $username,
            'email' => $useremail
        ];
         
        $_SESSION['role_as'] = $role_as;
        if($role_as == 1){
            redirect("../admin/index.php", "Welcome to dashboard");
           

        }else{ 
            redirect("../index.php", "Logged in Successfully");

 
        }
    }
    else
    {
        redirect("../login.php", "Invalid Credentials");
          
    }

}



?>