<?php
ob_start();
$con=mysqli_connect("localhost","root","","shopping");
if(!$con)
	echo "Connection failed";
$email="";
$pswd="";
$name="";
?>

<!DOCTYPE html>
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
<a href="index.php"><img id="logo" src="cart2.png" style=""></a>
<div class="fix">
	<a href="index.php" style="text-decoration:none;"><span style="font-family:Arial;font-weight:bold;color:white;font-size:25px;margin-left:160px;">e-Shopper</span></a>
	<span style="font-family:arial;margin-left:800px;font-size:13px;"></span>
	<div class="dropdown">
	<span onclick="document.getElementById('id01').style.display='block'">
	<img src="cart5.png" style="height:30px;width:30px;"></span>&nbsp;&nbsp;&nbsp;|&nbsp;
	
		<div class="dropdown-content">
			<p class="dd-content" style="border-bottom:1px solid #e9e9e9;"><a href='login.php'>Login</a></p>
			<p class='dd-content'><a href='signup.php'>SignUp</a></p>
		</div>
	</div>
	<a href='checker.php'><img src="cart6.png" style="height:30px;width:35px;"></span></a>
</div>
<div style="background-color:white;position:fixed;width:100%;height:70px;right:0px;top:49px;z-index:0;">
<ul id="navbar">
<div style="margin-left:25%;padding-bottom:15px;border-bottom:solid;border-width:0.6px;border-color:#ebebe0;width:39%;float:left;">
<li style="">
		<div class="dropdown-2">
		<span style="float:left;">Men</span>
		<div class="dropdown-content-2">
			<p class="dd-content-2"><a href="items.php?brand='bag'&type=2" style="text-decoration:none;">Bag</a></p>
			<p class="dd-content-2"><a href="items.php?brand='watch'&type=2" style="text-decoration:none;">Watch</a></p>
			<p class="dd-content-2"><a href="items.php?brand='shoes'&type=2" style="text-decoration:none;">Shoes</a></p>
			<p class="dd-content-2"><a href="items.php?brand='flip-flop'&type=2" style="text-decoration:none;">Flip-Flop</a></p>
			<p class="dd-content-2"><a href="items.php?brand='jeans'&type=2" style="text-decoration:none;">Jeans</a></p>
			<p class="dd-content-2"><a href="items.php?brand='shirt'&type=2" style="text-decoration:none;">Shirt</a></p>
			<p class="dd-content-2"><a href="items.php?brand='tshirt'&type=2" style="text-decoration:none;">T-Shirt</a></p>
			<p class="dd-content-2"><a href="items.php?brand='coat'&type=2" style="text-decoration:none;">Coat</a></p>
			<p class="dd-content-2"><a href="items.php?brand='winterwear'&type=2" style="text-decoration:none;">Winterwear</a></p>
			<p class="dd-content-2"><a href="items.php?brand='sunglasses'&type=2" style="text-decoration:none;">Sunglasses</a></p>
		</div>
		</div>
	</li>
<li style="">
		<div class="dropdown-3">
		<span style="float:left;margin-left:55px;">Women</span>
		<div class="dropdown-content-3">
			<p class="dd-content-2"><a href="items.php?brand='skirt'&type=5" style="text-decoration:none;">Skirt</a></p>
			<p class="dd-content-2"><a href="items.php?brand='dress'&type=5" style="text-decoration:none;">Dress</a></p>
			<p class="dd-content-2"><a href="items.php?brand='jeggings'&type=5" style="text-decoration:none;">Jeggings</a></p>
			<p class="dd-content-2"><a href="items.php?brand='jumpsuit'&type=5" style="text-decoration:none;">Jumpsuit</a></p>
			<p class="dd-content-2"><a href="items.php?brand='kurta'&type=5" style="text-decoration:none;">Kurta</a></p>
			<p class="dd-content-2"><a href="items.php?brand='kurti'&type=5" style="text-decoration:none;">Kurti</a></p>
			<p class="dd-content-2"><a href="items.php?brand='bag'&type=5" style="text-decoration:none;">Bag</a></p>
			<p class="dd-content-2"><a href="items.php?brand='watch'&type=5" style="text-decoration:none;">Watch</a></p>
			<p class="dd-content-2"><a href="items.php?brand='shoes'&type=5" style="text-decoration:none;">Shoes</a></p>
			<p class="dd-content-2"><a href="items.php?brand='jeans'&type=5" style="text-decoration:none;">Jeans</a></p>
			<p class="dd-content-2"><a href="items.php?brand='shirt'&type=5" style="text-decoration:none;">Shirt</a></p>
			<p class="dd-content-2"><a href="items.php?brand='tshirt'&type=5" style="text-decoration:none;"></p>
			<p class="dd-content-2"><a href="items.php?brand='coat'&type=5" style="text-decoration:none;">Coat</a></p>
			<p class="dd-content-2"><a href="items.php?brand='winterwear'&type=5" style="text-decoration:none;">Winterwear</a></p>
			<p class="dd-content-2"><a href="items.php?brand='sunglasses'&type=5" style="text-decoration:none;">Sunglasses</a></p>
		</div>
		</div>
	</li>
<li style="margin-left:50px;">Kids</li>
<li style="margin-left:50px;">Electronics</li>
<li style="margin-left:50px;">Home & Living</li>
</div>
</ul>
<span style="float:right;">
	<form action="">
      <input type="text" id="txt1" placeholder=" Search" onkeyup="showHint(this.value)" name="search" style="border-radius:10px;height:25px;width:250px;margin-right:100px;">
	  <br><span id="txtHint"></span>
    </form>
</span>
</div>
<br><br><br><br><br><br><br><br>
<!--header close-->

<!--main body start-->
<form method="POST">
<table align="center" style="font-family:arial;font-size:13px;">
	<tr>
		<td colspan=2 align="center" style="font-weight:bold;font-size:20px;">SignUp with e-Shopper<br><br></td>
	</tr>
	<tr>
		<td colspan=2 align="center">
			<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$pswd=$_POST['pswd'];
		$email=$_POST['email'];
		$sql="select * from register where email='".$_POST['email']."'";
		$result=mysqli_query($con,$sql);
		if(!$result)
			echo "failed to execute query!!";
			else
		if(mysqli_num_rows($result)<1)
		{
			$sql="insert into register values('".ucwords($_POST['name'])."','".$_POST['email']."','".$_POST['pswd']."','".$_POST['gen']."','')";
			if(mysqli_query($con,$sql)==true)
				header("Location:login.php?pagename=");			
		}else
			echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Already Registered Email</span><br><br>";		
	}
	mysqli_close($con);
?>
		</td>
	</tr>
	<tr>
		<td>Your Name </td>
		<td><input type="text" name="name" placeholder="Your Name" value ="<?php echo $name; ?>"required></td>
	</tr>	
	<tr>
		<td>Your Email Address </td>
		<td><input type="email" name="email" placeholder="Email" value ="<?php echo $email; ?>" required></td>
	</tr>
	<tr>
		<td>Choose Password </td>
		<td><input type="text" name="pswd" placeholder="Min 6-Character " value ="<?php echo $pswd; ?>" minlength="6"required></td>
	</tr>
	<tr>
		<td>I'm a </td>
		<td><input type="radio" name="gen" value="Male" required>Male</input> <input type="radio" name="gen" value="Female">Female</input></td>
	</tr>
	<tr>	
		<td></td>
		<td><br><input type="submit" name="submit" value="Register"></td>
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
	Copyright � 2020 eShopper. All rights reserved.
	</div>
</div>
</body>
</html>
<?php ob_end_flush();?>