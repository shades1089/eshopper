<?php
session_start();
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
.tabcontent {
    display: none;
    padding: 6px 12px;
   opacity: 1;
    position: fixed;
    border-top: none;
    
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
a{
text-decoration:none;
}
</style>
</head>
<body>

<a href="index.php"><img id="logo" src="cart2.png" style=""></a>
<div class="fix">
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
			
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;'><a href='order.php'>Order</a></p>";
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;'><a href='updateprofile.php'>Profile</a></p>";
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;'>Change Password</p>";
			echo "<p class='dd-content'><a href='logout.php?pagename=".basename($_SERVER['PHP_SELF'])."'>Logout</a></p>";
			}else
			{
			echo "<p class='dd-content' style='border-bottom:1px solid #e9e9e9;'><a href='login.php?pagename=".basename($_SERVER['PHP_SELF'])."'>Login</a></p>";
			echo "<p class='dd-content'><a href='signup.php'>SignUp</a></p>";
			}
		?>
		</div>
	</div>
	<a href='checker.php'><img src="cart6.png" style="height:30px;width:35px;"></a>&nbsp;|&nbsp;
    <button onclick="document.getElementById('email').style.display='block'" style=" background:transparent;color: #4d4d4d;border:none;cursor: pointer; font-weight:bold;">Contact Us</button>
    <div id="email" class="tabcontent" style="position:absolute;top:200px;left:360px; background-color:white;display: none;
    padding: 6px 12px;
   opacity: 1;
    border-top: none;">
                <div style="border:1px solid grey;padding:30px;box-shadow:0 0 100px black;height:400px;">
                                    <center>
                    <form id="contract" method="POST" action="mail_test.php">
                        <table cellspacing="10" style="font-size:12px;">
                            <tr>
                                <td style="color:#003152;">Email</td>
                                <td><input type="email" name="email" style="border:1px solid grey;height:35px;border-radius:5px;width:418px;" required placeholder="Enter your Email Id.."></td>
                            </tr>
                            <tr>
                                <td style="color:#003152;">Subject</td>
                                <td><input type="text" name="subject" value="" style="border:1px solid grey;height:35px;border-radius:5px;width:418px" required placeholder="Subject if the message.."></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top;color:#003152;">Message</td>
                                <td><textarea form="contract" name="msg" rows="10" cols="66" style="border:1px solid grey;" required></textarea></td>
                            </tr>
                        </table>
                            <input type="submit" value="Send" style="background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
">
                            <input type="button" onclick="document.getElementById('email').style.display='none'" class="cancelbtn" value="Cancel" style="background-color: #f44336;color: white;padding: 12px 20px;  border: none;  border-radius: 4px;  cursor: pointer;">
                    
                        
                                        </form>
                    </center>
                </div>
            </div>
            
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
			<p class="dd-content-2"><a ahref="items.php?brand='skirt'&type=5" style="text-decoration:none;">Skirt</a></p>
			<p class="dd-content-2"><a haref="items.php?brand='dress'&type=5" style="text-decoration:none;">Dress</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='jeggings'&type=5" style="text-decoration:none;">Jeggings</a></p>
			<p class="dd-content-2"><a hreaf="items.php?brand='jumpsuit'&type=5" style="text-decoration:none;">Jumpsuit</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='kurta'&type=5" style="text-decoration:none;">Kurta</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='kurti'&type=5" style="text-decoration:none;">Kurti</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='bag'&type=5" style="text-decoration:none;">Bag</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='watch'&type=5" style="text-decoration:none;">Watch</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='shoes'&type=5" style="text-decoration:none;">Shoes</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='jeans'&type=5" style="text-decoration:none;">Jeans</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='shirt'&type=5" style="text-decoration:none;">Shirt</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='tshirt'&type=5" style="text-decoration:none;"></p>
			<p class="dd-content-2"><a hraef="items.php?brand='coat'&type=5" style="text-decoration:none;">Coat</a></p>
			<p class="dd-content-2"><a hraef="items.php?brand='winterwear'&type=5" style="text-decoration:none;">Winterwear</a></p>
			<p class="dd-content-2"><a hreaf="items.php?brand='sunglasses'&type=5" style="text-decoration:none;">Sunglasses</a></p>
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
<br>
<span style="color:grey;font-family:arial;font-size:10px;letter-spacing:14px;margin-left:94px;">TOP BRANDS</span>
<br>
<br>
<div style="float:left;margin-left:80px;">
<a href="items.php?brand='Only'&type=1"><img class="brnd" src="images/home/only.jpg"></a>
<a href="items.php?brand='Vero Moda'&type=1"><img class="brnd"  src="images/home/veromoda.jpg"></a>
<a href="items.php?brand='Jack and Jones'&type=1"><img class="brnd"  src="images/home/jackjones.jpg"></a>
<br>
<a href="items.php?brand='John Players'&type=1"><img  class="brnd" src="images/home/johnplayer.jpg"></a>
<a href="items.php?brand='Biba'&type=1"><img class="brnd"  src="images/home/biba.jpg"></a>
<a href="items.php?brand='Mango'&type=1"><img class="brnd"  src="images/home/mango.jpg"></a>
<br>


</div>
<br>
<div style="float:right;">
<img class="mySlides" src="images\home\girl1.jpg">
<img class="mySlides" src="images\home\girl2.jpg">
<img class="mySlides" src="images\home\girl3.jpg">
</div>

<div style="clear:left;padding:20px 50px 50px 60px;border-top:solid;border-color:#e0e0d1;border-width:0.5px;">
<br><br>
<span style="color:#1f1f14;font-family:arial;font-weight:;font-size:30px;margin-left:20px;">TOP CATEGORIES</span>
<br><br><br>
<table>
<tr>
<td><a href="items.php?brand='tshirt'&type=2"><img  class="cat" src="images\home\c1.jpg"></a></td>
<td><a href="items.php?brand='shirt'&type=2"><img  class="cat" src="images\home\c2.jpg"></a></td>
<td><a href="items.php?brand='Casual Wears'&type=3"><img  class="cat" src="images\home\c3.jpg"></a></td>
<td><a href="items.php?brand='WESTERN WEAR'&type=4"><img  class="cat" src="images\home\c4.jpg"></a></td>
<td rowspan=3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td rowspan=3 style="background-color: #f2f2f2;vertical-align:top;">
<br><br>
<span style="color:grey;margin-left:50px;font-family:arial">Bestselling bedsheets</span><br><br><br><a href="items.php?brand='bedsheet'&type=8"><img src="images\home\bedsheet.jpg" style="margin:0 80px 0 100px;"></a></td>
</tr>
<tr>
<td><a href="items.php?brand='winterwear'&type=2"><img  class="cat" src="images\home\c5.jpg"></a></td>
<td><a href="items.php?brand='winterwear'&type=5"><img  class="cat" src="images\home\c6.jpg"></a></td>
<td><a href="items.php?brand='FOOT WEAR'&type=6"><img  class="cat" src="images\home\c7.jpg"></a></td>
<td><a href="items.php?brand='FOOT WEAR'&type=7"><img  class="cat" src="images\home\c8.jpg"></a></td>
</tr>
<tr>
<td><a href="items.php?brand='sunglasses'&type=8"><img  class="cat" src="images\home\c9.jpg"></a></td>
<td><a href="items.php?brand='watch'&type=8"><img  class="cat" src="images\home\c10.jpg"></a></td>
<td><a href="items.php?brand='bag'&type=8"><img  class="cat" src="images\home\c11.jpg"></a></td>
<td><a href="items.php?brand='bag'&type=9"><img  class="cat" src="images\home\c12.jpg"></a></td>
</tr>
</table>
</div>


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
	Copyright © 2020 eShopper. All rights reserved.
	</div>
</div>
<script>	
var slideIndex = 0;
carousel();

    var modal = document.getElementById('email');

// When the user clicks anywhere outside of the modal, close it

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); 
}
</script>
<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>
</body>
</html>