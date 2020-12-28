<html>
<head>
<title>login and register form</title>
<link rel="stylesheet" href="i1.css">
</head>
<center><img style="padding-top:80px;" src="unnamed1.jpg" height="75" width="75">
<p style="font-family:fantasy;font-size:36px;"><font style="color:white">As truth be told,homecoming never gets old</font></p>
</center>
<body>
<div class="login-page">
<div class="form">
<form class="register-form">
<input type="text" placeholder="User name" required />
<input type="password" placeholder="password" required />
<input type="text" name="email"  placeholder="email id" required />
<button>Create</button>
<p class="message">Already Registered? <a href="login.php">Login</a></p>
</form>
<form method="post" action="/main/login.php" class="login-form">
<input type="text" name="uname" placeholder="Username" />
<input type="password" name="pass" placeholder="password" />
<button type="submit" name="login" value="login">Login</button>
<p class="message">Not Registered? <a href="register.php">Register</a></p>
</div>
</div>
<script src='https://code.jquery.com/jquery-3.3.1.min.js'>
</script>
<script>
$('.message a').click(function(){
$('form').animate({height:"toggle",opacity:"toggle"},"slow");
});
</script>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
$_username =$_POST['uname'];
$_password=$_POST['pass'];
$_password=md5($_password);
$qry="SELECT * FROM `admin` WHERE username='$_username' AND  password='$_password'";
$run=mysqli_query($con,$qry);
$row = mysqli_num_rows($run);
if($row<1)
{?>
    <script>
    alert('username or password did not match !!');
    window.open('login.php','_self');
    </script>
    <?php
}
else 
{
$data = mysqli_fetch_assoc($run);
$id=$data['id'];
$email=$data['email_id'];
$name=$data['alumniname'];
$regno=$data['registrationno'];
$add=$data['address'];
session_start();
$_SESSION['uid']=$id;
$_SESSION['username']=$_username;
$_SESSION['email']=$email;
$_SESSION['aname']=$name;
$_SESSION['address']=$add;
$_SESSION['regno']=$regno;

header('location:admindash.php');
}
}
?>