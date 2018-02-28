<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

$_SESSION["u_id"] = NULL;
$_SESSION["u_fname"] = NULL;
$_SESSION["u_lname"] = NULL;
$_SESSION["u_uname"] = NULL;
$_SESSION["u_img"] = NULL;
$_SESSION["u_pno"] = NULL;
$_SESSION["u_email"] = NULL;
$_SESSION["u_state"] = NULL;

// remove all session variables
session_unset();

// destroy the session 
session_destroy();

echo 'ok';
