<?php
include "connection.php";
$user_id = $_GET['id']; 
$sql =mysqli_query($conn,"DELETE FROM `task` WHERE `id`='$user_id'");  
 if($sql){
    echo "delete data sucesssfully";
    header("location:view.php"); 
 }else{
    echo "delete data not sucessfully";
 }
?>