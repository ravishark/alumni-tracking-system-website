<?php
session_start();
if(!isset($_SESSION['username'])||(!isset($_SESSION['username'])))
 header('location:login.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>profile</title>
<style>
        /*body{
                background-image:linear-gradient(rgba(0,0,0,0.6),url('let1.jpg'));
                height:80vh;
                background-size:cover;
                background-position:center;
        }*/
#box{
        color:#e7e7e7;
}
#left{
        border-radius:2px;
//border:1px solid black;
float:left;
width:40%;
}
button{
        padding:6px;
        background-color:#008CBA;
}
#right{
        padding-top:16px;
        float:right;
        width:20%;
}
</style>
</head>
<body style="background-size:cover;" background="let1.jpg">
        <?php include("search.php");?>
        <?php include("menu.html");?>
        <fieldset>
<div id="box">
<div id="left">
<h2>Name of the alumni :  <?php echo $_SESSION['aname'];?></h2>
<h2>Registration No :  <?php echo $_SESSION['regno'];?></h2>
<h2>Address :  <?php echo $_SESSION['address'];?></h2>
<h2>Email of the alumni : <?php echo $_SESSION['email'];?></h2>
</div>
<div id="right">
<button><a style="text-decoration:none;padding:17.5px;" href="logout.php">LOGOUT</a></button><br><br>
<button><a style="text-decoration:none;padding:17px;"href="setting.html">SETTING</a></button><br><br>
<button><a style="text-decoration:none;"href="display.php">View All Alumni</a></button>
</div>
</fieldset>
</body>
</html>