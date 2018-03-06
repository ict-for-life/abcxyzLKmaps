
<?php

session_start();

$user_name = $_SESSION["u_uname"];
$user_img = '../images/no.jpg';
$fname = $_SESSION["u_fname"];
$lname = $_SESSION["u_lname"];
$pno = $_SESSION["u_pno"];
$email = $_SESSION["u_email"];


if ($_SESSION["u_img"] != "") {
    $user_img = $_SESSION["u_img"];
}
?>

<html>
    <head>
        <link rel="stylesheet" href="css/vendor.css">

        <link rel="stylesheet" href="css/app-blue.css">
       
        <style>
            .prof_main{
                position:fixed;
                top: 50%;
                left: 50%;
                width:60%;
                height:80%;
                margin: 0 auto;
                background-color: #F5F5F5;
                overflow-x: visible;
                transition: 0.5s;
                padding-top: 20px; 
                
            }

            /*.prof_main table{
                height:100%;
                width:80%;
                
            }*/
            .prof_main td,prof_main tr{
                border:0px solid;
            }
            .prof_main_img{
                height:200px;
                width:200px;

            }
            .prof_main_img:hover{
                background-color: rgba(0,0,0,.5);
                z-index: 10000;
                color: #fff;
                transition: all .3s ease;
                text-decoration: none;
                opacity: #010101;
            }
            .image-upload > input {
                visibility:hidden;
                width:0;
                height:0
            }

            body {font-family: Arial, Helvetica, sans-serif;}

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                height: 40%;
            }

            /* The Close Button */
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            } 

        </style>
        <script>
            function setprof(input) {
//                alert("awa");
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#profile_image')
                                .attr('src', e.target.result)
                                .width(200)
                                .height(200);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            function remove_img() {
                document.getElementById("profile_image").src = "<?php echo $user_img; ?>";

            }
            
           
        </script>
    </head>
    <body>
        <div class="col-md-12" >
            <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                <table align="center" width="80%" height="100%">
                    <tr>
                        <td> 
                    <center><div class="image-upload">
                            <label for="file-input">
                                <img id="profile_image" src="<?php echo $user_img; ?>" class="prof_main_img"/>
                            </label>

                            <input id="file-input" type="file" name="file" id="file" onchange="setprof(this);"/>
                        </div>
                        <h6><font color="#000000">Click On Image to Select Profile Picture</font></h6>
                        <a href="#" class="btn btn-primary" onclick="remove_img()">Remove</a>

                    </center>
                    </td>

                    <td>

                        <div class="col-xs-12"><font color="#000000"> User Name</font> </lable><input type="text" class="form-control" id="userName" value="<?php echo $user_name; ?>" disabled/> <br>
                           <font color="#000000"> First Name </font><input type="text" class="form-control" id="userFname" name="u_fname" value="<?php echo $fname; ?>" /> <br>
                           <font color="#000000">Last Name </font><input type="text" class="form-control" id="userLname" name="u_lname" value="<?php echo $lname; ?>" /> <br></div>

                    </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="col-xs-6"><font color="#000000"> Email </font><input type="email" class="form-control" id="useEmail" name="u_email" value="<?php echo $email; ?>"/> <br>
                                <font color="#000000"> Phone Number </font><input type="text" class="form-control" id="userNumber" name="u_pno" value="<?php echo $pno; ?>" onkeypress="javascript:return isNumber(event)"/> <br></div>




                            <div class="col-xs-12">
                                <div class="col-xs-6"><a href="#" class="btn btn-danger pull-left" id="pass" >Change Password</a></div>
                                <div class="col-xs-6">   <input type="submit" class="btn btn-primary pull-right" value="Update" class="submit" /> </div>


                            </div>
                        </td>

                    </tr>
                </table>
            </form>


        </div>


        <div id="pass_pop" class="modal">

            <!-- Modal content -->
            <div class="modal-content">


                <div class="col-xs-12"><span class="close">&times;</span></div>

                <div class="col-xs-6"><lable for="oldPassword">Enter Old Password</lable><input type="password" class="form-control" id ="oldPassword"/></div>
                <div class="col-xs-6"><lable for="oldPassword">Enter New Password</lable><input type="password" class="form-control" id ="NewPassword"/></div>
                <div class="col-xs-6"><lable for="oldPassword">Confirm Password</lable><input type="password" class="form-control" id ="ConfPassword"/></div>
                <div class="col-xs-6"><br><button class="btn btn-primary" onclick="changePw()">Change Password</button></div>

            </div>

        </div>               

        <script>
// Get the modal
            var modal = document.getElementById('pass_pop');

// Get the button that opens the modal
            var btn = document.getElementById("pass");

// Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
            btn.onclick = function () {
                modal.style.display = "block";
            }

// When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

// When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }


            $(document).ready(function (e) {
                $("#uploadimage").on('submit', (function (e) {
                    e.preventDefault();
                    var fname = document.getElementById('userFname').value;
                    $.ajax({
                        url: "controllers/co_UpdateProfile.php", // Url to which the request is send
                        type: "POST", // Type of request to be send, called as method
                        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                        contentType: false, // The content type used when sending data to the server.
                        cache: false, // To unable request pages to be cached
                        processData: false, // To send DOMDocument or non processed data file it is set to false
                        success: function (data)   // A function to be called if request succeeds
                        {
                            alert("awaaaa " + data);
                            if (data != "Fail") {
                                var dataAll = data.split("#");
                                var fname = dataAll[1];
                                var lname = dataAll[2];
                                var img = dataAll[3];
                                var email = dataAll[4];
                                var pno = dataAll[5];

                                $('#profile_image').attr('src', img);
                                $('#userFname').val(fname)
                                $('#userLname').val(lname)
                                $('#useEmail').val(email)
                                $('#userNumber').val(pno)

                                alert(dataAll[0]);
                            }


                        }
                    });
                }));


            });


            function isNumber(evt) {

                var Textsize = document.getElementById("userNumber").value.length;
                var iKeyCode = (evt.which) ? evt.which : evt.keyCode
                if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)) {
                    return false;
                } else {
                    if (Textsize < 10) {
                        return true;
                    } else {
                        return false;
                    }

                }
            }

            function changePw() {

                var xhttp = new XMLHttpRequest();

var oldpw=document.getElementById('oldPassword').value;
var newpw=document.getElementById('ConfPassword').value;

                xhttp.onreadystatechange = function () {

                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText == "ok") {

                          alert(this.responseText);

                        } else {

                            alert(this.responseText);

                        }



                    }
                };
                xhttp.open("GET", "controllers/co_changePW.php?oldPw="+oldpw+"&newPw="+newpw, true);
                xhttp.send();

            }

        </script>               
    </body>
</html>
