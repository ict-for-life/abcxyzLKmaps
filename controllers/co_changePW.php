<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../DB/connection.php";

global $connection;

session_start();

$oldPw=$_GET['oldPw'];
$newPw=$_GET['newPw'];

$sqlForChangePw = "SELECT * FROM user WHERE user_uname='" . $_SESSION["u_uname"] ."' AND user_password='" . $oldPw . "' AND iduser = '" . $_SESSION["u_id"] ."' AND user_status='Active'";


$result = mysqli_query($connection, $sqlForChangePw);



if (mysqli_num_rows($result) > 0) {
    
    $sqlForUpdatePw = "UPDATE user SET user_password = '".$newPw."' WHERE iduser = '".$_SESSION["u_id"]."'";
    
     if (mysqli_query($connection, $sqlForUpdatePw)) {
         
         echo 'Successfully Updated';
         
     }else{
         
         echo 'Error '.$newPw." ";
         
     }
    
}else{
    
    echo 'Old Password Is Invalide';
    
}