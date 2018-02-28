<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../DB/connection.php";

global $connection;



$userName = $_GET['uname'];
$userPw = $_GET['pw'];



$sqlForLogin = "SELECT * FROM user WHERE user_uname='" . $userName . "' AND user_password='" . $userPw . "' AND user_status='Active'";


$result = mysqli_query($connection, $sqlForLogin);



if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        session_start();

        $_SESSION["u_id"] = $row["iduser"];
        $_SESSION["u_fname"] = $row["user_fname"];
        $_SESSION["u_lname"] = $row["user_lname"];
        $_SESSION["u_uname"] = $row["user_uname"];
        $_SESSION["u_img"] = $row["user_img_path"];
        $_SESSION["u_pno"] = $row["user_pno"];
        $_SESSION["u_email"] = $row["user_email"];
        $_SESSION["u_state"] = $row["user_state"];

        $sqlForGetRoll = "SELECT * FROM role WHERE idrole='" . $row["role_idrole"] . "'";

        $resultForRoll = mysqli_query($connection, $sqlForGetRoll);

        if (mysqli_num_rows($resultForRoll) > 0) {

            while ($row1 = mysqli_fetch_assoc($resultForRoll)) {
                
                $_SESSION["u_roll"] = $row1["role_name"];
                
                
            }
        }

        echo 'ok';
    }
} else {

    echo 'Invalide Username Or Password';
}


mysqli_close($connection);
