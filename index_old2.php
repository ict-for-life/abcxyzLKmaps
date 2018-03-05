
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>  </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" id="theme-style" href="css/app-blue.css">
        <!-- Theme initialization -->


        <style>
            .sidenav {
                height: 100%;
                width:0;
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
            .sidenav .nav {
                font-size: 14px; }
            .sidenav .nav li a:focus,
            .open .sidenav .nav li a:focus {
                }
            .sidenav .nav ul {
                padding: 0;
                height: 0px;
                overflow: hidden; }
            .loaded .sidenav .nav ul {
                height: auto; }
            .sidenav .nav li.active ul {
                height: auto; }
            .sidenav .nav li a {
                color: #F1F1F1;
                text-decoration: none; }
            .sidenav .nav li a:hover,
            .sidenav .nav li.open > a,
            .sidenav .nav li.open a:hover {
                color: #A1A1A1;
               }
            .sidenav .nav > li > a {
                padding-top: 15px;
                padding-bottom: 15px;
                padding-left: 20px;
                padding-right: 10px; }
            .sidenav .nav > li.active > a,
            .sidenav .nav > li.active > a:hover {
                
                color:#A1A1A1; }
            .sidenav .nav > li.open > a {
                 }
            .sidenav .nav > li.open > a i.arrow {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg); }
            .sidenav .nav > li > a i {
                margin-right: 5px;
                font-size: 16px; }
            .sidenav .nav > li > a i.arrow {
                float: right;
                font-size: 20px;
                line-height: initial;
                transition: all 0.3s ease; }
            .sidenav .nav > li > a i.arrow:before {
                content: "\f105" !important; }
            .sidenav .nav > li > ul > li a {
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 50px;
                 }
            .sidenav .nav > li > ul > li.active a {
                color: #A1A1A1; }
            .menu_btn{
                position: absolute;
                width:40px;
                height:60px;
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
                top: -23px;
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
            .user_img {
                border: none;
                padding: 5px;
                width: 60px;
                height:60px;
                border-radius: 50%;

            }
        </style>
        <script>
            $(window).click();
        </script>
    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header" id="top">

                    <div class="header-block header-block-collapse">
                        <span style="font-size:20px;cursor:pointer;color:#000000; hover {color:#014682;}  " onclick="Nav()">&#9776; Menu</span>
                    </div>
                    <div style="position:absolute;left:50%;top:50%;height:50px;width:300px;margin-left:-50px;margin-top: -25px; " >
                        <center>  <span style="font-size:20px;cursor:pointer;color:#000000;"> Position - Place</span> </center>
                    </div>

                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">

                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class=user_img src='images/no.jpg'>
                                   
                                        <span class="name">
                                        <h5>John Doe</h5>
                                </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"> 
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-gear icon"></i>
                                        Edit Profile
                                    </a>
                                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="login.html">
                                        <i class="fa fa-power-off icon"></i>
                                        Logout
                                    </a> </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidenav" id="menu">
                    <div class="sidebar-container">
                        <div class="sidebar-header">

                            <nav class="menu">
                                <ul class="nav metismenu" id="sidebar-menu">
                                    <li class='active'> <a href="#">
                                            <i class="fa fa-tachometer"></i> Dashboard
                                        </a> </li>
                                    <li> <a >
                                            <i class="fa fa-home"></i> Properties
                                            <i class="fa arrow"></i>
                                        </a>
                                        <ul>
                                            <li> <a href="#">
                                                    Registered Properties
                                                </a> </li>
                                            <li> <a href="#">
                                                    LA Owned Properties 
                                                </a> </li>
                                            <li> <a href="#">
                                                    Unregistered Properties 
                                                </a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">
                                            <i class="fa fa-road"></i> Roads

                                        </a>

                                    </li>
                                    <li> <a href="#">
                                            <i class="fa fa-cogs"></i> Maintains

                                        </a>

                                    </li>
                                    <li> <a href="#">
                                            <i class="fa fa-legal"></i> Development Works
                                        </a> </li>
                                    <li> <a href="#">
                                            <i class="fa fa-desktop"></i> Advertisement Board
                                        </a>

                                    </li>
                                    <li> <a href="#">
                                            <i class="fa fa-map-marker"></i> &nbspMap View

                                        </a>

                                    </li>
                                    <li> <a href="#">
                                            <i class="fa fa-bar-chart-o"></i> Reports
                                        </a> </li>
                                    <li> <a href="#">
                                            <i class="fa fa-puzzle-piece"></i> Master Data
                                        </a> </li>
                                    <li> <a href="#">
                                            <i class="fa fa-group"></i> User Management
                                        </a> </li>
                                </ul>
                            </nav>

                        </div>
                        <footer class="sidebar-footer">

                        </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content dashboard-page" id='loader'>


                </article>
                <footer class="footer">

                </footer>

                <!-- /.modal -->

                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->

        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
        <script>
                            function Nav() {
                                if (document.getElementById("menu").style.width == "" || document.getElementById("menu").style.width == "0px") {
                                    openNav();
                                } else {
                                    closeNav();
                                }

                            }
                            function openNav() {
                                //document.getElementById("hid").style.visibility = "visible";
                                document.getElementById("menu").style.width = "250px";
                                document.getElementById("top").style.left = "250px";
                                //document.getElementById("main").style.marginLeft = "250px";

                            }

                            function closeNav() {
                                //document.getElementById("hid").style.visibility = "hidden";
                                document.getElementById("menu").style.width = "0";
                                document.getElementById("top").style.left = "0";
                                //document.getElementById("main").style.marginLeft = "0";
                            }
        </script>
        
        
        <script> 
            
        
        </script>
    </body>

</html>  


