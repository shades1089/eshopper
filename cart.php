<?php
session_start();
$con=mysqli_connect("localhost","root","","shopping");
if(!$con)
	echo "Connection failed";
$id=$_GET['id'];
$i=1;
if(isset($_POST['addcart']))
{
	$i=2;
	unset($_POST['addcart']);
	$sql2="insert into cart values('NULL','".$_SESSION['email_id']."','$id','".$_POST['size']."','".$_POST['quant']."','c','nd')";
	
	mysqli_query($con,$sql2);
}
if(isset($_POST['buy']))
{
	$i=0;	
	$sql2="insert into cart values('NULL','".$_SESSION['email_id']."','$id','".$_POST['size']."','".$_POST['quant']."','o','nd')";
	mysqli_query($con,$sql2);
	
	
}

if(isset($_GET['iid']))
{
	switch($_GET['do'])
	{
	case 2 :$sql2="delete from cart where iid=".$_GET['iid'];
			mysqli_query($con,$sql2);break;
	case 1 :$sql2="update cart set status= 'o' where iid=".$_GET['iid'];
			mysqli_query($con,$sql2);		
	}		
}
//for setting to add to cart
$sql="select * from collection where id=".$id;
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

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
color:black;
}
<!--main body prop end-->

</style>
</head>
<body>
<a href="index.php"><img id="logo" src="cart2.png" style=""></a>
<div class="fix"">
	<a href="index.php" style="text-decoration:none;"><span style="font-family:Arial;font-weight:bold;color:white;font-size:25px;margin-left:160px;">e-Shopper</span></a>
	<span style="font-family:arial;margin-left:800px;font-size:13px;"></span>
	<div class="dropdown">
	<span onclick="document.getElementById('id01').style.display='block'">
	<img src="cart5.png" style="height:30px;width:30px;"></span>&nbsp;&nbsp;&nbsp;|&nbsp;
	
		<div class="dropdown-content">
		<?php
			if(!empty($_SESSION['email_id']))
			{
			echo "<p>
			<table style='border-bottom:1px solid #e9e9e9;font-family:arial;font-size:13px;padding:0 10px 10px 5px;'><tr>
			<td><img src='cart5.png' style='height:35px;width:35px;'></td>
			<td><i><b>".$_SESSION['user_name']."</i></b>
			<br>".$_SESSION['email_id']."
			</td>
			</tr>
			</table></p>";
			
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;'><a href='order.php' style='text-decoration:none;'>Order</a></p>";
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;'><a href='updateprofile.php' style='text-decoration:none;'>Profile</a></p>";
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;' style='text-decoration:none;' style='text-decoration:none;'>Change Password</p>";
			echo "<p class='dd-content'><a href='logout.php?id=0'>Logout</a></p>";
			}else
			{
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;'><a href='login.php?pagename=".basename($_SERVER['PHP_SELF'])."'>Login</a></p>";
			echo "<p class='dd-content'><a href='signup.php'>SignUp</a></p>";
			}
		?>
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
<br><br><br><br><br><br>
<br>
<!--header close-->

<!--main body start-->
<div style="box-shadow:20px 20px 50px 5px #ffd27f;border-radius:1px;width:65%;margin-left:15%;border-left:5px solid #ffb732;">

<?php
if($i==1&&!empty($id))
{
echo "<form method='POST'>";
echo "<table>";
	echo "<tr>";
	echo "<td><img src='brandcollection/".$row['imgname']."' style='width:120px;height:150px;'></td>";
	echo "<td style='padding-left:20px'>
		 <span style='font-family:arial;font-weight:bold;font-size:16px;color:#3f3f3f;'>".$row['bname']."</span><br>
		 <span style='font-family:arial;font-weight:none;font-size:13px;color:#3f3f3f;'>".$row['disc']."</span><br><br>
		 <span style='font-family:arial;font-weight:bold;font-size:13px;color:#3f3f3f;'>Rs. ".$row['finalprice']."</span><br>
		 <span style='font-family:arial;font-weight:bold;font-size:12px;color:grey;'><del>Rs. ".$row['mainprice']."</del></span>
		 <span style='font-family:arial;font-weight:bold;font-size:11px;color:red'>(%".$row['discount'].")</span><br><br>
		 </td>
		 <td><br><br>
		 <span style='font-family:arial;font-weight:bold;font-size:14px;color:#3f3f3f;'>Size <select name='size' required>
					<option value=''>--</option>
					<option value='S'>S</option>
					<option value='M'>M</option>
					<option value='L'>L</option>
					<option value='XL'>XL</option>
					<option value='XLL'>XLL</option>
					</select>
		 </span>&nbsp;&nbsp;&nbsp;
		 <span style='font-family:arial;font-weight:bold;font-size:14px;color:#3f3f3f;'>Quantity <select name='quant'>
					<option selected>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					</select>
		 </span>
		 </td>";
	echo "<td>
			<span style='margin-left:220px'/><input type='submit' name='addcart' value='ADD TO BAG' style='border-radius:2px;padding:2px 10px 2px 10px;'><br><br>
			<span style='margin-left:220px'/><input type='submit' name='' value='REMOVE' style='border-radius:2px;padding:2px 22px 2px 22px;'><br><br>
			<span style='margin-left:220px'/><input type='submit' name='buy' value='BUY' style='border-radius:2px;padding:2px 37px 2px 37px;'>
			</td>
		</tr>";
echo "</table>";
echo "</form>";
}
?>	
</div><br><br>

<?php
//inside cart
$sql1="select * from cart where email='".$_SESSION['email_id']."' and status='c' ORDER BY iid DESC";
$result1=mysqli_query($con,$sql1);

if(mysqli_num_rows($result1)>0)
{
echo "<div style='box-shadow:20px 20px 50px 10px #f1f1f1;border-radius:1px;padding:6px;margin-left:100px'>
		<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Your Cart</span>	
		</div>";
while($row1=mysqli_fetch_array($result1))
{
$query="select * from collection where id=".$row1['id'];
$result2=mysqli_query($con,$query);
$row2=mysqli_fetch_array($result2);
	echo "<div style='box-shadow:20px 20px 50px 5px #f1f1f1;border-radius:1px;width:65%;margin-left:15%;border-left:5px solid #ffd27f;'>";
	echo "<table>";
	echo "<tr>";
	echo "<td><img src='brandcollection/".$row2['imgname']."' style='width:120px;height:150px;'></td>";
	echo "<td style='padding-left:20px'>
		 <span style='font-family:arial;font-weight:bold;font-size:16px;color:#3f3f3f;'>".$row2['bname']."</span><br>
		 <span style='font-family:arial;font-weight:none;font-size:13px;color:#3f3f3f;'>".$row2['disc']."</span><br><br>
		 <span style='font-family:arial;font-weight:bold;font-size:13px;color:#3f3f3f;'>Rs. ".$row2['finalprice']."</span><br>
		 <span style='font-family:arial;font-weight:bold;font-size:12px;color:grey;'><del>Rs. ".$row2['mainprice']."</del></span>
		 <span style='font-family:arial;font-weight:bold;font-size:11px;color:red'>(%".$row2['discount'].")</span><br><br>
		 </td>
		 <td><br><br>
		 <span style='font-family:arial;font-weight:bold;font-size:14px;color:#3f3f3f;'>Size : ".$row1['size']."</span><br>
		 <span style='font-family:arial;font-weight:bold;font-size:14px;color:#3f3f3f;'>Quantity : ".$row1['quant']."</span>
		 </td>";
	echo "<td><br><br><br><br><span style='margin-left:200px;'>
			
			<span style='border-radius:5px;border:1px solid #ffa500;padding:2px 37px 2px 37px;background-color:#ffb732;font-family:arial;font-size:14px;'><a href='cart.php?iid=".$row1['iid']."&do=1' style='color:black;text-decoration:none;'>BUY</a></span>
			<span style='border-radius:5px;border:1px solid #ffa500;padding:2px 22px 2px 22px;background-color:#ffb732;font-family:arial;font-size:14px;'><a href='cart.php?iid=".$row1['iid']."&do=2' style='color:black;text-decoration:none;'>REMOVE</a></span>
			</td>
		</tr>";
	echo "</table>";	
	echo "</div><br><br>";
}
}else
echo "<div style='box-shadow:20px 20px 50px 10px #f1f1f1;border-radius:1px;padding:6px;margin-left:100px'>
		<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Cart is Empty</span><br><br>
		<img src='images/home/cart.gif' style='margin-left:400px;'><br>
		<span style='padding:10px 20px 10px 20px;border-radius:2px;margin-left:425px;font-family:arial;background-color:#ffae19'><a href='index.php' style='text-decoration:none'>Continue Shopping</a></span>	
		</div><br><br>";
?>	
<!--main body prop end-->

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
