<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//static $con;
$db_host = "77.104.128.75";
$db_name = "safenets_lkmaps";
$db_user = "safenets_lkmaps";
$db_password = "WelCome./@1";
$db_port = "3306";


$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name, $db_port);
if ($connection->connect_error) {
    echo 'Failed';
    die();
}
?>