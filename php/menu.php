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
    $user_position = $_SESSION["u_roll"] . " - " . $_SESSION["u_state"];
}
?>

<html>

    <head>


    </head>
    <body>
        <header>
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
                <a href="#" onclick="loadPro()"><span class="glyphicon glyphicon-cog"></span> Edit Account </a>
                <a href="#" onclick="logout()"><span class="glyphicon glyphicon-lock"></span> Logout</a>
            </div>

            <div id="sub_properties" class="sidenav_sub"> 
                <a href="#" onclick="regpro()"> <span class="glyphicon glyphicon-stop"> Registered Propertiesties </span></a>
                <a href="#"> <span class="glyphicon glyphicon-stop"> LA Owned Propertiesties </span></a>
                <a href="#"> <span class="glyphicon glyphicon-stop"> Unregitered Propertiesties </span></a>
            </div> 

        </header>

        <div id="content" class="main"></div>

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

            function loadPro() {

                $('#content').load('php/profile.php');

            }
            
            function regpro(){
                $('#content').load('html/test2.html');
            }

        </script>

    </body>
</html> 

<!--a href="javascript:void(0)" class="button" onclick="closeNav()">&times;</a--> 

