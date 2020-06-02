<?php
ob_start();
session_start();

$con=mysqli_connect("localhost","root","","shopping");
if(!$con)
	echo "Connection failed";
if(isset($_GET['id']))
{
session_unset();
session_destroy();
}
if(isset($_SESSION['admin']))
    header("Location:admin.php");	
?>
<html>
<head>
<title>E-Shopper</title>

<style>
.dropdown {
	position: relative;
	display: inline-block;
}
.dropdown-content {
	display: none;
	position: absolute;
	left: 2px;
    top: 32px;
	background-color: #f6f6f6;
	min-width: 160px;
	border-radius:0 0px 5px 5px;
	
	z-index:1;
}
.dropdown:hover .dropdown-content{
display :block;
}
.dd-content{
color:black;
padding:10px;
font-size:13px;
font-family:arial;
}
a{
color:black;
}

.dd-content:hover{
background-color:#ededed;
}
<!--droupdown-2-start--->
dropdown-2 {
	position: relative;
	display: inline-block;
}
dropdown-3 {
	position: relative;
	display: inline-block;
}
.dropdown-content-2 {
	display: none;
	position: absolute;
	padding:10px;
	left: 368px;
    top: 15px;
	background-color: #f6f6f6;
	min-width: 160px;
	border-radius:0 0px 5px 5px;
	
	z-index:1;
}
.dropdown-content-3{
	display: none;
	position: absolute;
	padding:10px;
	left: 454px;
    top: 15px;
	background-color: #f6f6f6;
	min-width: 160px;
	border-radius:0 0px 5px 5px;
	
	z-index:1;
}
.dropdown-2:hover .dropdown-content-2{
display :block;
}
.dropdown-3:hover .dropdown-content-3{
display :block;
}
.dd-content-2{
color:black;
font-size:13px;
font-family:arial;
}
a{
color:black;
}

.dd-content-2:hover{
color:orange;
}
<!--droupdown-2-end--->
a{
text-decoration:none;
}
div.fix{
width:100%;
background-color:orange;
position:fixed;
top:0;
left:0;
padding:10px;
z-index:1;
}

img#logo{
z-index:3;
position : fixed;
top:7px;
right:1180px;
width:90px;
heigth:60px;
}

#navbar{
position:relative;
top:20px;
list-style-type:none;
font-family:arial;

}
#navbar li{
display:inline;
font-size:15px;
}
 
 img.cat{
 width:220px;
 height:380px;
 }
 ul{
 font-family:arial;
 }
 .heading{
 font-weight:bold;
 font-size:15px;
 }
 .head-ul{
margin-left:50px;
 }
 .heading-li{
 font-size:14px;
 border-left-style:solid;
 border-color:#995c00;
 padding:0 0 0 10px;
 }
<!--main body prop strt-->
a{
text-decoration:none;
}
<!--main body prop end-->

</style>
</head>
<body >
<!--header start-->
<img id="logo" src="cart2.png" style="">
<div class="fix"">
	<span style="font-family:Arial;font-weight:bold;color:white;font-size:25px;margin-left:160px;">e-Shopper</span>
	<span style="font-family:arial;margin-left:800px;font-size:13px;"></span>
	<div class="dropdown">
	<span onclick="document.getElementById('id01').style.display='block'">
	<img src="cart5.png" style="height:30px;width:30px;"></span>
	
		<div class="dropdown-content">
			
		</div>
	</div>
</div>

<!--main body start-->
<form method="POST">
<br><br><br><br><br><br>
<table align="center" style="font-family:arial;font-size:13px;">
	<tr>
		<td colspan=2 align="center" style="font-weight:bold;font-size:13px;">* Admin Login *<br><br></td>
	</tr>	
	<tr>
		<td colspan=2 align="center">
		<?php

	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$pswd=$_POST['pswd'];
		
		if($email=='admin@gmail.com'&&$pswd=='admin')
			{
			$_SESSION["admin"] = "admin";
			header("Location:admin.php");			
			
		}echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Wrong Email or Password</span><br><br>";
	}
	?>
		</td>
	</tr>	
	<tr>
		<td>Your Email Address </td>
		<td><input type="email" name="email" placeholder="Email Address" required></td>
	</tr>
	<tr>
		<td>Enter Password </td>
		<td><input type="text" name="pswd" placeholder="Password" required></td>
	</tr>
	
	<tr>	
		<td></td>
		<td><br><input type="submit" name="submit" value="Login"></td>
	</tr>	
</table>
</form>

<!--main body end-->

<br><br><br><br><br><br><br><br>
<!--footer start---->
<div style="position:relative;bottom:-8px;left:-8px;width:101%;">
<div style="padding:15px;background-color:#ff9900;"></div>
<div style="background-image:url('bottom_bar.jpg');padding:20px;">
<table style="width:50%;">
<tr>
<td>
	<ul class="head-ul" style="list-style-type:none;"><br>
	<li class="heading">SERVICE</li><br>
	<li class="heading-li">Online Help</li><br>
	<li class="heading-li">Contact Us</li><br>
	<li class="heading-li">Order Status</li><br>
	<li class="heading-li">Change Loction</li><br>
	<li class="heading-li">FAQ's</li><br>
	</ul>
</td>	
<td>
	<ul class="head-ul" style="list-style-type:none;"><br>
	<li class="heading">QUICK SHOP</li><br>
	<li class="heading-li">T-Shirt</li><br>
	<li class="heading-li">Mens</li><br>
	<li class="heading-li">Womens</li><br>
	<li class="heading-li">Shoes</li><br>
	<li class="heading-li">Jeans</li><br>
	</ul>
</td>
<td>
	<ul class="head-ul" style="list-style-type:none;"><br>
	<li class="heading">POLICIES</li><br>
	<li class="heading-li">Terms of Use</li><br>
	<li class="heading-li">Privecy Policy</li><br>
	<li class="heading-li">Refund Policy</li><br>
	<li class="heading-li">Ticket System</li><br>
	<li class="heading-li">Billing System</li><br>
	</ul>
</td>
</table>
</div>
	<div style="background-color:orange;padding:5px;font-family:arial;font-size:12px;text-align:center;">
	Copyright © 2018 Deepesh Gupta. All rights reserved.
	</div>
</div>
</body>
</html>
<?php ob_end_flush();?>