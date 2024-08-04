<?php
 session_start();
 include("config/connect.php");
 
  
 
 function getAllActive($table){
     global $con;
     $fetch_query ="SELECT * FROM $table WHERE status='0'";
     return  $fetch_query_run = mysqli_query($con, $fetch_query);
 }
 function getIDActive($table,$id){
    global $con;
    $fetch_query ="SELECT * FROM $table WHERE status='0' AND id='$id' ";
    return  $fetch_query_run = mysqli_query($con, $fetch_query);

}
function getSlugActive($table,$slug){
    global $con;
    $fetch_query ="SELECT * FROM $table WHERE status='0' AND slug='$slug' LIMIT 1 ";
    return  $fetch_query_run = mysqli_query($con, $fetch_query);

}
function getProdBycategory($category_id){
    global $con;
    $fetch_query ="SELECT * FROM products WHERE category_id='$category_id' AND status='0'";
    return  $fetch_query_run = mysqli_query($con, $fetch_query);

}
function getAllTrending(){
    global $con;
    $fetch_query ="SELECT * FROM products WHERE trending='1'";
    return  $fetch_query_run = mysqli_query($con, $fetch_query);
}
 

 function redirect($url, $message)
 {
     $_SESSION['message']=  $message;
     header('Location: '.$url);
     exit(0);
 }
 
?>