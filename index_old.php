
 <?php 
session_start();
//session_destroy();
 if (isset($_SESSION["u_id"])&&$_SESSION["u_id"]!=NULL) {  include 'php/menu.php';?>
   
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script>
   
document.getElementById("menuCss").href="css/menu.css";
</script>

 <style>
            body {
                font-family: "Lato", sans-serif;
            }

            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #004D40;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 15px;
                color: #F1F1F1;
                display: block;
                transition: 0.3s;
                text-decoration: none;
            }

            .sidenav a:hover,a:active{
                color: #A1A1A1;
                text-decoration: none;

            }

            .sidenav_sub {
                height: 120px;
                width: 0px;
                position: fixed;
                z-index: 1;
                top: 80px;
                left: 255px;
                background-color: #004D40;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 10px;
                border-radius: 10px;
            }

            .sidenav_sub  a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 12px;
                color: #F1F1F1;
                display: block;
                transition: 0.3s;
                text-decoration: none;
            }

            .sidenav_sub  a:hover,a:active {
                color: #A1A1A1;
                text-decoration: none;
            }



            #main {
                transition: margin-left .5s;
                padding: 16px;
            }
            #main2 {
                transition: margin-left .5s;
                padding: 16px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }

            .menu_btn{
                position: absolute;
                top:43%;
                left:-23px;
                z-index: 1;

            }
            .menu_btn_after{
                position: absolute;
                top:43%;
                right:79%;
                visibility:hidden;
                transition:0.5s;
                z-index: 1;
            }


            .button {
                border-radius: 4px;
                background-color: #004D40;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 20px;
                padding: 20px;
                width: 40px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                text-decoration: none;
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                text-decoration: none;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: -20px;
                right: -20px;
                text-decoration: none;
            }

            .button:hover span {
                padding-right: 15px;
                text-decoration: none;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
                text-decoration: none;
            }


            .user {
                position: absolute;
                top:10px;
                right:10px;
                background-color: #ffffff;
                height:100px;
                min-width: 222px;
                paddind:30px;
                overflow: auto;
                z-index: 1;
                filter: alpha(opacity=60);
            }

            .user_img {
                border: none;
                padding: 5px;
                width: 60px;
                height:60px;
                border-radius: 50%;

            }

            .user_img:hover {
                box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
            }

            .user_name{
                position: absolute;
                top:20px;
                left:-80px;

            }
            .dropbtn {
                background-color: #3498DB;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropbtn:hover, .dropbtn:focus {
                background-color: #2980B9;
            }

            .dropdown {
                position: absolute;
                top:8px;
                right:10px;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                top:100px;
                right:10px;
                background-color: #f1f1f1;
                min-width: 160px;
                paddind:30px;
                overflow: auto;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
               
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #E0E0E0;
                text-decoration: none;
            }


            .show {display:block;}	
            
            .main {
                position: absolute;
                top:50%;
                left:50%;
                background-color: #ffffff;
                height:80%;
                width:80%;
                margin-top:-20%; /*set to a negative number 1/2 of your height*/
                margin-left: -40%; 
                min-width: 222px;
                overflow: auto;
                z-index: -1;
            }

        </style>
</head>


<body >

</body>

</html>
<?php
} else {
    echo '<script>alert("Please Login")</script>';
     header('Location: html/login.html'); 
    
}
 
 ?>