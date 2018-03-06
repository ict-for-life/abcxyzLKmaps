<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$ab_id = $_POST['adv_board_id'];
$ab_type = $_POST['adv_type_list'];
$ab_noOfSubBords = $_POST['num_sub_boards'];
$ab_existWithProp = $_POST['ad_exist_property'];
$ab_lenght = $_POST['length'];
$ab_width = $_POST['width'];
$ab_laLisionNo = $_POST['license_name'];
$ab_expDate = $_POST['val_date'];
$ab_latitude = $_POST['lat'];
$ab_longitude = $_POST['lng'];
$ab_imgPath = "";
$ab_bordOwnerName = $_POST['board_owner'];
$ab_ownerNo = $_POST['board_owner_phone'];
$ab_bordPropOwnerName = $_POST['prop_owner'];
$ab_ownerPropNo = $_POST['prop_owner_phone'];
$ab_DatePaid = $_POST['date_paid'];
$ab_RespNo = $_POST['receipt_no'];
$ab_amount = $_POST['amt_paid'];
$tb_roads_idtb_roads = $_POST['road_list'];
$tb_ward_idtb_ward = $_POST['ward_list'];
$tb_GNDivision_idtb_GNDivision = $_POST['gn_list'];




if (isset($_FILES["file"]["type"])) {
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);

    $bool = ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
            ) && ($_FILES["file"]["size"] < 100000000)//Approx. 10000kb files can be uploaded.
            && in_array($file_extension, $validextensions));

    if ($bool ? 'true' : 'false') {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } else {

            $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable

            $targetPath = "../images/avbBoard" . $ab_id . ".jpg"; // Target path where file is to be stored
            $ab_imgPath = "images/avbBoard" . $ab_id . ".jpg"; // Target path where file is to be stored

            move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
//Quary Start
            $sqlForAddAvb = "INSERT INTO tb_advertisementBord
            (ab_id,
             ab_type,
             ab_noOfSubBords,
             ab_existWithProp,
             ab_lenght,
             ab_width,
             ab_laLisionNo,
             ab_expDate,
             ab_latitude,
             ab_longitude,
             ab_imgPath,
             ab_bordOwnerName,
             ab_ownerNo,
             ab_bordPropOwnerName,
             ab_ownerPropNo,
             ab_DatePaid,
             ab_RespNo,
             ab_amount,
             tb_roads_idtb_roads,
             tb_ward_idtb_ward,
             tb_GNDivision_idtb_GNDivision)
VALUES ('" . $ab_id . "',
        '" . $ab_type . "',
        '" . $ab_noOfSubBords . "',
        '" . $ab_existWithProp . "',
        '" . $ab_lenght . "',
        '" . $ab_width . "',
        '" . $ab_laLisionNo . "',
        '" . $ab_expDate . "',
        '" . $ab_latitude . "',
        '" . $ab_longitude . "',
        '" . $ab_imgPath . "',
        '" . $ab_bordOwnerName . "',
        '" . $ab_ownerNo . "',
        '" . $ab_bordPropOwnerName . "',
        '" . $ab_ownerPropNo . "',
        '" . $ab_DatePaid . "',
        '" . $ab_RespNo . "',
        '" . $ab_amount . "',
        '" . $tb_roads_idtb_roads . "',
        '" . $tb_ward_idtb_ward . "',
        '" . $tb_GNDivision_idtb_GNDivision . "')";

//Quary End

            if (mysqli_query($connection, $sqlForAddAvb)) {

                echo'Succes';
            } else {

                echo 'Fail';
            }
        }
    } else {
        $bool = ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
                ) && ($_FILES["file"]["size"] < 100000000)//Approx. 10000kb files can be uploaded.
                && in_array($file_extension, $validextensions));
        $bool2 = $_FILES["file"]["size"];
        echo "***Invalid Image Size or Type*** type" . $_FILES["file"]["type"] . " bool " . $bool ? 'true' : 'false';
    }
}