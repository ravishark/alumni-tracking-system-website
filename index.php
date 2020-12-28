<html>
<head>
<title>ALUMNI TRACKING SYSTEM</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="i.css">
<style>
p{
font-size:20;
color:white;
}
table{
color:black;
padding:50px;
padding-right:100px;
}

::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background: #000;
}
#leftbox{
//padding-top:20px;
float:left;
width:33%;
}
#middle{
float:left;
width:33%;
}
#last{
float:left;
width:25%;
}
.letse{
color:blue;
 width: 400px;
    height: 200px;
    border: 25px solid #000;
    padding: 20px;
    overflow: auto;
 scrollbar-color: black;
}
.dot{
padding-top:380px;
}
i {
padding:10px;
}
.dropbtn {
color: white;
  padding: 10px;
  font-size: 16px;
	font-color: black;
  border-radius: 5px;
}


a{
color: black;
text-decoration: none;
display: block;
}

.-lobster {
  font-family: "Lobster", serif;
font-size:55;
font-color:white;
}
.slowmo{
	padding-top:5px;
width:100%;
height:380px;
position:absolute;
left:50%;
top:60%;
transform:translate(-50%,-50%);
background-image:url('1.jpg');
background-size:100% 100%;
animation:slider 10s infinite linear;
}
@keyframes slider{
10%{background-image:url('1.jpg');}
20%{background-image:url('4.jpg');}
35%{background-image:url('2.jpg');}
45%{background-image:url('5.jpg');}
65%{background-image:url('3.jpg');}
85%{background-image:url('61.jpeg');}
}
</style>
</head>
<body bgcolor="black">

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<i class="fas fa-user"></i>
	<button class="dropbtn"><font style="color:black"><a href="login.php">LOG IN</a></font></button>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<button class="dropbtn"><font style="color:black"><a href="register.php">REGISTER</a></font></button>
	<div class="search">
  	<input type="text" placeholder="Search here..." name="">
	<i style="padding:18px" class="fas fa-search"></i>
	</div>
<br>
	<hr>
</div>

<center><img style="padding-top:12px; border-radius:30px; border-top-left-radius:10px;" src="unnamed1.jpg" height="60" width="60">&nbsp&nbsp&nbsp<font class="-lobster"><font color="white">Alumni Tracking System</font></font></center>
<div class="slowmo">
</div>
<br>
<div class="dot">
<center>
<span style="width:5px;height:5px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:7.5px;height:7.5px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:10px;height:10px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:12.5px;height:12.5px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:15px;height:15px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:12.5px;height:12.5px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:10px;height:10px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:7.5px;height:7.5px;background-color:white;border-radius:50%;display:inline-block;"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<span style="width:5px;height:5px;background-color:white;border-radius:50%;display:inline-block;"></span>
<center>
</div>
<div id="leftbox">
<div class="letse">
<p style="float:left;"><img style="width:180px;height:150px;border-right: 25px solid black;" src="sp.jfif"></p>
<h1><font color="#ff0066">Sundar pichai</h1>
<p style="line-height:70%;"><font color="white" size="3">You want to aim high enough so you fail a few times,that's a natural part of a process. Even<span id="dots">.....</span><span id="more">
if you fail,you end up doing something great in the process.
Academics is important but not everything take risks, try different things, follow your passion...!!!..What strikes me every 
single time is that the aspirations of indians are unique and unparalleled.They're very demanding regardless of background.</p> 
<button style="padding-left:205px;" type="button" id="read" onclick="read()">Read more</button>
<script type="text/javascript">
var i=0;
function read(){
if(!i){
document.getElementByClass("more").style.display="inline";
document.getElementByClass("dots").style.display="none";
document.getElementByClass("read").innerHTML="Read Less";
i=1;
}
else{
document.getElementById("more").style.display="none";
document.getElementById("dots").style.display="inline";
document.getElementById("read").innerHTML="Read more";
i=0;
}
}
</script>
</div>
</div>
<div id="middle">
<div class="letse">
<p style="float:left;"><img style="width:180px;height:150px;border-right: 25px solid black;" src="sp.jfif"></p>
<h1><font color="#ff0066">Sundar pichai</h1>
<p style="line-height:70%;"><font color="white" size="3">You want to aim high enough so you fail a few times,that's a natural part of a process. Even<span id="dots">.....</span><span id="more">
if you fail,you end up doing something great in the process.
Academics is important but not everything take risks, try different things, follow your passion...!!!..What strikes me every 
single time is that the aspirations of indians are unique and unparalleled.They're very demanding regardless of background.</p> 
<button style="padding-left:205px;" type="button" id="read" onclick="rea()">Read more</button>
<script type="text/javascript">
var i=0;
function rea(){
if(!i){
document.getElementById("more").style.display="inline";
document.getElementById("dots").style.display="none";
document.getElementById("read").innerHTML="Read Less";
i=1;
}
else{
document.getElementById("more").style.display="none";
document.getElementById("dots").style.display="inline";
document.getElementById("read").innerHTML="Read more";
i=0;
}
}
</script>
</div>
</div>
<div id="last">
<div class="letse">
<p style="float:left;"><img style="width:180px;height:150px;border-right: 25px solid black;" src="sp.jfif"></p>
<h1><font color="#ff0066">Sundar pichai</h1>
<p style="line-height:70%;"><font color="white" size="3">You want to aim high enough so you fail a few times,that's a natural part of a process. Even<span id="dots">.....</span><span id="more">
if you fail,you end up doing something great in the process.
Academics is important but not everything take risks, try different things, follow your passion...!!!..What strikes me every 
single time is that the aspirations of indians are unique and unparalleled.They're very demanding regardless of background.</p> 
<button style="padding-left:205px;" type="button" id="read" onclick="re()">Read more</button>
<script type="text/javascript">
var i=0;
function re(){
if(!i){
document.getElementById("more").style.display="inline";
document.getElementById("dots").style.display="none";
document.getElementById("read").innerHTML="Read Less";
i=1;
}
else{
document.getElementById("more").style.display="none";
document.getElementById("dots").style.display="inline";
document.getElementById("read").innerHTML="Read more";
i=0;
}
}
</script>
</div>
</div>
<TABLE style="padding:0px;height:10%"    WIDTH="95%"   CELLPADDING="4" CELLSPACING="3">
   <TR align="center">
      <TD><p><img style="width:100px;height:100px" src="i1.png"></p><p>Build and Manage Alumni Database</p></TD>
      <TD><p><img style="width:100px;height:100px" src="i2.png"></p><p>Send Regular Updates to Alumni</p></TD>
   </TR>
   <TR ALIGN="CENTER">
      <TD><p><img style="width:100px;height:100px" src="i3.png"></p><p>Build and Manage Alumni Database</p></TD>
      <TD><p><img style="width:100px;height:100px" src="i4.png"></p><p>One stop exits HelpDesk</p></TD>
   </TR>
<TR ALIGN="CENTER">
      <TD><p><img style="width:100px;height:100px" src="i5.png"></p><p>Meet Talent Needs - Seek Referrals & Re-hire Alumni</p></TD>
      <TD><p><img style="width:100px;height:100px" src="i6.png"></p><p>Plan & Organize Successful Reunions</p></TD>
   </TR>
<TR ALIGN="CENTER">
      <TD><p><img style="width:100px;height:100px" src="i7.png"></p><p>Involve Alumni in Student Development</p></TD>
      <TD><p><img style="width:100px;height:100px" src="i8.png"></p><p>Enhance your Employer Branding</p></TD>
   </TR>
</TABLE>
</body>
</html>