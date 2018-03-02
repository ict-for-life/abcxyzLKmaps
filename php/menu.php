<!DOCTYPE html>

<?php
$user_name = 'User';
$user_img = 'images/user.png';
$user_position = 'Position - Place';

if ($_SESSION["u_fname"] != "") {
    $user_name = $_SESSION["u_fname"];
}
if ($_SESSION["u_img"] != "") {
    $user_img = $_SESSION["u_img"];
}
if ($_SESSION["u_roll"] != "") {
    $user_position = $_SESSION["u_roll"]." - ".$_SESSION["u_state"];
}
?>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


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
            }

            .sidenav a:hover {
                color: #A1A1A1;
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
            }

            .sidenav_sub  a:hover {
                color: #A1A1A1;
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
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: -20px;
                right: -20px;
            }

            .button:hover span {
                padding-right: 15px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
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
            }

            .user_img {
                border: none;
                padding: 5px;
                width: 60px;
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
            }


            .show {display:block;}	


        </style>
    </head>
    <body>

        <div id="menu" class="sidenav">

            <a href="#"><span class="glyphicon glyphicon-th-large"></span> Dashboard</a>
            <a href="#"  onclick="sub_prop()"><span class="glyphicon glyphicon-home"></span> Propertiesties</a>
            <a href="#"><span class="glyphicon glyphicon-road"></span> Roads</a>
            <a href="#"><span class="glyphicon glyphicon-wrench"></span> Maintenance</a>
            <a href="#"><span class="glyphicon glyphicon-blackboard"></span> Development Works</a>
            <a href="#"><span class="glyphicon glyphicon-pushpin"></span> Map view</a>
            <a href="#"><span class="glyphicon glyphicon-stats"></span> Reports</a>

        </div>



        <div id="main" class="menu_btn">
            <!--span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span-->
            <button class="button" onclick="Nav()"><span></span></button>
        </div>



        
        <div class="user">
            <table align="right">
                <tr>
                    <td> <h4 id="menu_uname"><?php echo $user_name; ?></h4> </td>
                    <td>
                        <img id="menu_user_img" src="<?php echo $user_img; ?>"  onclick="drop()" class="user_img"> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><h5 id="menu_position"><?php echo $user_position; ?></h5> </td>
                </tr>
            </table>
        </div>
        <div id="Dpdown" class="dropdown-content">
        <a href="#"><span class="glyphicon glyphicon-cog"></span> Edit Account </a>
         <a href="#" onclick="logout()"><span class="glyphicon glyphicon-lock"></span> Logout</a>
        </div>
        
        <div id="sub_properties" class="sidenav_sub"> 
            <a href="#"> <span class="glyphicon glyphicon-stop"> Registered Propertiesties </span></a>
            <a href="#"> <span class="glyphicon glyphicon-stop"> LA Owned Propertiesties </span></a>
            <a href="#"> <span class="glyphicon glyphicon-stop"> Unregitered Propertiesties </span></a>
        </div> 
        <script>
            function Nav() {
                if (document.getElementById("menu").style.width == "" || document.getElementById("menu").style.width == "0px") {
                    openNav();
                } else {
                    if (document.getElementById("sub_properties").style.width == "230px") {
                        closePro();
                    } else {
                        closeNav();
                    }
                }

            }
            function openNav() {
                //document.getElementById("hid").style.visibility = "visible";
                document.getElementById("menu").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";

            }

            function closeNav() {
                //document.getElementById("hid").style.visibility = "hidden";
                document.getElementById("menu").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }


            function drop() {
                document.getElementById("Dpdown").classList.toggle("show");
            }

        // Close the dropdown if the user clicks outside of it
            window.onclick = function (event) {
                if (!event.target.matches('.user_img')) {

                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }



            function sub_prop() {
                if (document.getElementById("sub_properties").style.width == "" || document.getElementById("sub_properties").style.width == "0px") {
                    openPro();
                } else {
                    closePro();
                }

            }
            function openPro() {
                //document.getElementById("hid").style.visibility = "visible";
                document.getElementById("sub_properties").style.width = "230px";
                document.getElementById("main2").style.marginLeft = "250px";

            }

            function closePro() {
                //document.getElementById("hid").style.visibility = "hidden";
                document.getElementById("sub_properties").style.width = "0";
                document.getElementById("main2").style.marginLeft = "0";
            }


            function logout() {

               

                var xhttp = new XMLHttpRequest();
                  
                xhttp.onreadystatechange = function () {
                   
                    if (this.readyState == 4 && this.status == 200) {
                       
                        if (this.responseText == "ok") {

                            window.location.href = 'html/login.html'

                        } else {

                            alert(this.responseText);

                        }



                    }
                };
                xhttp.open("GET", "controllers/co_logout.php", true);
                xhttp.send();

            }

        </script>

    </body>
</html> 

<!--a href="javascript:void(0)" class="button" onclick="closeNav()">&times;</a--> 

