<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../DB/connection.php";

global $connection;

session_start();

$userName = $_POST['uname'];
$userPw = $_POST['pw'];



$sqlForLogin = "SELECT * FROM user WHERE user_name='" . $userName . "' AND user_password='" . $userPw . "' AND user_status='Active'";


$result = mysqli_query($connection, $sqlForLogin);


if (mysqli_num_rows($result) > 0) {

    if ($row = mysqli_fetch_assoc($result)) {

        $_SESSION["u_id"] = $row["idtb_user_account"];
        $_SESSION["u_fname"] = $row["idtb_user_account"];
        $_SESSION["u_lname"] = $row["idtb_user_account"];
        $_SESSION["u_uname"] = $row["idtb_user_account"];
        $_SESSION["u_img"] = $row["idtb_user_account"];
        $_SESSION["u_pno"] = $row["idtb_user_account"];
        $_SESSION["u_email"] = $row["idtb_user_account"];
        $_SESSION["u_state"] = $row["idtb_user_account"];

        header('Location: ../index.php');
    } else {
        
    }
} else {

    echo 'alert("Invalide Username Or Password")';
    header('Location: ../login.html');
    
}


mysqli_close($con);
