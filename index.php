
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
    <body>
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
                        <a href="#"> <i class="fa fa-tachometer"></i> Dashboard</a>
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
                        <a href="#"> <i class="fa fa-road"></i> Roads</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-road"></i> Roads</a>
                    </li>
                     <li>
                        <a href="#"> <i class="fa fa-cogs"></i> Maintains</a>
                    </li>
                    <li>
                        <a href="#"> <i class="fa fa-legal"></i> Development Works</a>
                    </li>
                    <li>
                        <a href="#">  <i class="fa fa-desktop"></i> Advertisement Boards</a>
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
            </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <div class="container">
                    <div class="row">
                   
                        <div class="col-lg-12">
                            <h1>Content</h1>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
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

    </body>
</html>
