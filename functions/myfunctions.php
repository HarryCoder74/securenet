<?php
 session_start();
include("../config/connect.php");

 

function getAll($table){
    global $con;
    $fetch_query ="SELECT * FROM $table";
    return  $fetch_query_run = mysqli_query($con, $fetch_query);
}
function getById($table,$id){
    global $con;
    $fetch_query ="SELECT * FROM $table WHERE id='$id'";
    return  $fetch_query_run = mysqli_query($con, $fetch_query);
}


function redirect($url, $message)
{
    $_SESSION['message']=  $message;
    header('Location: '.$url);
    exit(0);
}

