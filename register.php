<?php
include('dbcon.php');
if(isset($_POST['login']))
{
   
$_username =$_POST['uname'];
$_password=$_POST['pass'];
$_password=md5($_password);
$_email_id=$_POST['email'];
$_aname=$_POST['aname'];
$_regno=$_POST['regno'];
$_add=$_POST['address'];
$qry="SELECT * FROM `admin` WHERE username='$_username' AND  password='$_password'";
$run=mysqli_query($con,$qry);
$row = mysqli_num_rows($run);
if($row<1)
{
   
    $stmt = $con->prepare("INSERT INTO admin (username,password,email_id,alumniname,registrationno,address) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $_username,$_password,$_email_id,$_aname,$_regno,$_add);
$stmt->execute();
$stmt->close();
$con->close();
?>
<script>
alert("Registerd")
window.open('login.php','_self');
</script>
<?php
}
else 
{
    ?>
    <script>
    alert('User Already Exists !!');
    window.open('register','_self');
    </script>
    <?php
}
}
?>
<html>
<head>
<title>login and register form</title>
<link rel="stylesheet" href="i2.css">
</head>
<body>
<center><img style="padding-top:45px;" src="unnamed1.jpg">
<p style="font-family:fantasy;font-size:36px;"><font style="color:white">As truth be told,homecoming never gets old</font></p>
<div class="login-page">
<div class="form">
<form class="login-form">
<input type="text" placeholder="Username">
<input type="password" placeholder="password"/>
<button>Login</button>
<p class="message">Not Registered? <a href="#">Register</a></p>
</form>
<form method="post" class="register-form">
<input type="text" name="uname" placeholder="User name" required />
<input type="text" name="aname" placeholder="Alumni Name" required />
<input type="text" name="regno" placeholder="registration no" required />
<input type="password" name="pass" placeholder="password" required />
<input type="text" name="email" placeholder="email id" required />
<input type="text" name="address" placeholder="address" required />
<input type="submit" name="login">
<p class="message">Already Registered? <a href="login.php">Login</a></p>
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
