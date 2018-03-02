
 <?php 
session_start();
//session_destroy();
 if (isset($_SESSION["u_id"])&&$_SESSION["u_id"]!=NULL) {  include 'php/menu.php';?>
   
<html>
<head>
<script>
   
document.getElementById("menuCss").href="css/menu.css";
</script>


</head>


<body >
<?php
    include 'php/profile.php';
?>
 
</body>

</html>
<?php
} else {
    echo '<script>alert("Please Login")</script>';
     header('Location: html/login.html'); 
    
}
 
 ?>