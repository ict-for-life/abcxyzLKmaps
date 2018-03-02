<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "../DB/connection.php";

global $connection;


$userId = $_POST['u_id'];
$fname = $_POST['u_fname'];
$lname = $_POST['u_lname'];
$pno = $_POST['u_pno'];
$email = $_POST['u_email'];



if (isset($_FILES["file"]["type"])) {
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
            ) && ($_FILES["file"]["size"] < 100000000)//Approx. 10000kb files can be uploaded.
            && in_array($file_extension, $validextensions)) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } else {

            $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable

            $targetPath = "upload/" . $userId . "-" . $fname . ".jpg"; // Target path where file is to be stored

            move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file


            $sqlForUpdateProfile = "UPDATE user SET user_fname = '" . $fname . "',user_lname = '" . $lname . ",user_pno = '" . $pno . "',user_email = '$email',user_img_path = '" . $targetPath . "' WHERE iduser = '" . $userId . "'";

            $result = mysqli_query($connection, $sqlForUpdateProfile);

            $sqlForLoadProData = "SELECT * FROM user WHERE WHERE iduser = '" . $userId . "' AND user_status='Active'";


            $resultForLoad = mysqli_query($connection, $sqlForLoadProData);



            if (mysqli_num_rows($resultForLoad) > 0) {

                while ($row = mysqli_fetch_assoc($resultForLoad)) {

                    session_start();


                    $_SESSION["u_fname"] = $row["user_fname"];
                    $_SESSION["u_lname"] = $row["user_lname"];

                    $_SESSION["u_img"] = $row["user_img_path"];
                    $_SESSION["u_pno"] = $row["user_pno"];
                    $_SESSION["u_email"] = $row["user_email"];

                    echo 'Successfully Updated#' . $row["user_fname"] . "#" . $row["user_lname"] . "#" . $row["user_img_path"] . "#" . $row["user_email"] . "#" . $row["user_pno"];
                }
            } else {

                echo 'Fail';
            }
        }
    } else {
        echo "***Invalid Image Size or Type***";
    }
}

