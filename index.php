<?php
session_start();
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

if (isset($_SESSION["u_id"]) && $_SESSION["u_id"] != NULL) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="robots" content="noindex, nofollow">

            <title>Fancy Sidebar Navigation - Bootsnipp.com</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <link href="css/main.css" rel="stylesheet">
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">



            <script type="text/javascript">

                window.alert = function () {};
                var defaultCSS = document.getElementById('bootstrap-css');
                function changeCSS(css) {
                    if (css)
                        $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
                    else
                        $('head > link').filter(':first').replaceWith(defaultCSS);
                }
                $(document).ready(function () {
                    var iframe_height = parseInt($('html').height());
                    window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
                });
            </script>
        </head>
        <body onload="mainfunc()">
            <input type="hidden" id="role" value="<?php echo $_SESSION["u_roll"]; ?>">
            <div id="wrapper">
                <div class="overlay"></div>

                <!-- Sidebar -->
                <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                    <ul class="nav sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                                Menu
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="Odash()" <i class="fa fa-tachometer"></i> Dashboard</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-home"></i> Properties <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <!--li class="dropdown-header"></li-->
                                <hr>
                                <li><a href="#">Registered Properties</a></li>
                                <li><a href="#">LA Owned Properties</a></li>
                                <li><a href="#">Unregistered Properties</a></li>
                                <hr>
                            </ul>
                        </li>
                        <li>
                            <a href="#" onclick="Oroads()"> <i class="fa fa-road"></i> Roads</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-cogs"></i> Maintanance <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <!--li class="dropdown-header"></li-->
                                <hr>
                                <li><a href="#">Buildings</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Roads</a></li>
                                <hr>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-legal"></i> Development Works</a>
                        </li>
                        <li>
                            <a href="#" onclick="OAB()">  <i class="fa fa-desktop"></i> Advertisement Boards</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-map-marker"></i> &nbspMap View</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o" onclick="OR()"></i> Reports</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-puzzle-piece"></i> Master Data <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <hr>
                                <li><a href="#">Types</a></li>
                                <li><a href="#">DS Divisions</a></li>
                                <li><a href="#">Local Authorities</a></li>
                                <li><a href="#">Wards</a></li>
                                <li><a href="#">GN Divisions</a></li>
                                <hr>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group"></i> User Management</a>
                        </li>
                    </ul>
                    <script id="menuLoader">
                        function Odash() {
                            $('#loader').load('php/Dashboard.php');
                            //document.getElementById('NameDash').class = 'active';

                        }
                        function ORP() {
                            $('#loader').load('html/Rproperties.html');
                            //document.getElementById("rp").class = "active"

                        }
                        function OLAP() {
                            $('#loader').load('html/LAproperties.html');
                            //document.getElementById("rp").class = "active"

                        }
                        function OUP() {
                            alert("income")
                            $('#loader').load('html/URproperties.html');
                            //document.getElementById("rp").class = "active"

                        }
                        function Oroads() {
                            $('#loader').load('html/Roads.html');
                            //document.getElementById("rp").class = "active"

                        }
                        function OM() {
                            $('#loader').load('html/Maintenance.html');
                            //document.getElementById("rp").class = "active"

                        }
                        function ODW() {
                            $('#loader').load('html/Dwork.html');
                            //document.getElementById("rp").class = "active"

                        }
                        function OAB() {
                            $('#loader').load('html/Aboard.html');
                            
                            //document.getElementById("rp").class = "active"

                        }
                        function Omap() {
                            $('#loader').load('php/Map.php');
                            //document.getElementById("rp").class = "active"

                        }
                        function OR() {
                            $('#loader').load('php/Reports.php');
                            //document.getElementById("rp").class = "active"

                        }
                        function Eprof() {
                            $('#loader').load('php/profile.php');
                        }
                        
                    </script>
                </nav>
                <!-- /#sidebar-wrapper -->
                <div class="top-navi">
                    <ul class="nav navbar-nav ">
                        <li><a href="#"></a></li>
                        <li class="dropdown">

                            <a href="#" class="dropbtn" data-toggle="dropdown">
                                <img alt="" class="img-circle" src="<?php echo $user_img; ?>" width="50" height="50"> 

                                <?php echo $user_name; ?><span class="caret"></span></font></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" id="editprofile" onclick="Eprof()"><i class="fa fa-gear icon"></i> Edit Account</a></li><br>
                                <li><a href="#" onclick="logout()"><i class="fa fa-power-off icon"></i> Log out</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="top-pos">
                    <h4><?php echo $user_position; ?></h4>
                </div>


                <!-- Page Content -->
                <div id="page-content-wrapper">

                    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">

                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>

                    </button>


                    <!--button data-toggle="offcanvas">Test</button-->
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12" id="loader">


                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->


                <!-- /#wrapper -->
                <script type="text/javascript">
                    $(document).ready(function () {
                        var trigger = $('.hamburger'),
                                overlay = $('.overlay'),
                                isClosed = false;

                        trigger.click(function () {
                            hamburger_cross();
                        });

                        function hamburger_cross() {

                            if (isClosed == true) {
                                overlay.hide();
                                trigger.removeClass('is-open');
                                trigger.addClass('is-closed');
                                isClosed = false;
                            } else {
                                overlay.show();
                                trigger.removeClass('is-closed');
                                trigger.addClass('is-open');
                                isClosed = true;
                            }
                        }

                        $('[data-toggle="offcanvas"]').click(function () {
                            $('#wrapper').toggleClass('toggled');
                        });
                    });
                </script>

                <script>
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


                    function checkUserType() {


                        var user_role = document.getElementById('role').value;

                        alert("Awaaaa " + user_role);
                        if (user_role == "Country Admin") {
                            document.getElementById('masterData').style.display = "block";
                            document.getElementById('userManagement').style.display = "block";
                            document.getElementById('editprofile').style.display = "block";
                        } else {

                            document.getElementById('masterData').style.display = "none";
                            document.getElementById('userManagement').style.display = "none";
                            document.getElementById('editprofile').style.display = "none";

                        }


                    }
                    function mainfunc() {
                        Odash();
                        checkUserType();
                    }

                </script>
        </body>
    </html>

    <?php
} else {
    echo '<script>alert("Please Login")</script>';
    header('Location: html/login.html');
}
?>