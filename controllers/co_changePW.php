<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

$oldPw=$_GET['oldPw'];
$newPw=$_GET['newPw'];

$sqlForLogin = "SELECT * FROM user WHERE user_uname='" . $_SESSION["u_uname"] . "' AND user_password='" . $oldPw . "' AND iduser = '" . $_SESSION["u_id"] . "' AND user_status='Active'";


$result = mysqli_query($connection, $sqlForLogin);



if (mysqli_num_rows($result) > 0) {}