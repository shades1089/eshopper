<?php
session_start();
$con=mysqli_connect("localhost","root","","shopping");

if(!isset($_SESSION['admin']))
    header("Location:adminlogin.php");	

	if(!$con)
	echo "connection failed!!";
$ap=$_GET['addProduct'];
$sql1="select type,count(type) as item_male from collection where gender='boy' group by type";	
$result1=mysqli_query($con,$sql1);

if(isset($_GET['iid']))
{
	$sql2="update cart set deliver= 'd' where iid=".$_GET['iid'];
	mysqli_query($con,$sql2);
	$ap=2;
}	


?>


<!DOCTYPE html>
<html>
<head>
<title>E-Shopper</title>
<script>
function getc(str,br,ty) {

  var xhttp;
  if (str.length == 0) {

    document.getElementById("place-item").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  
    if (this.readyState == 4 && this.status == 200) {
	 
      document.getElementById("place-item").innerHTML = this.responseText;
    }
  };
  
	xhttp.open("GET", "getcollection.php?type="+str, true);
	xhttp.send();
     
}
</script>
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
<!--grid design start-->
.tb1

a:link, a:visited, a:hover,  a:active{ text-decoration:none; } 

</style>
</head>
<body>
<a href="admin.php?addProduct=0"><img id="logo" src="cart2.png" style=""></a>
<div class="fix">
	<a href="admin.php?addProduct=0" style="text-decoration:none;"><span style="font-family:Arial;font-weight:bold;color:white;font-size:25px;margin-left:160px;">e-Shopper</span></a>
	<span style="font-family:arial;margin-left:850px;font-size:13px;"></span>
	<div class="dropdown">
	
	<img src="cart5.png" style="height:30px;width:30px;">
	
		<div class="dropdown-content">
		<p>
		<table>
		<tr>
		<td><img src="cart5.png" style="padding-left:10px;height:30px;width:30px;"></td>
		<td style="font-family:arial;"><b><i>Admin</i></b></td>
		</tr>
		</table>
		</p>
		<p style="padding-left:20px;font-family:arial;"><a href="adminlogin.php?id=0">Logout</a></p>
		</div>
	</div>
</div>
<div style="background-color:white;position:fixed;width:100%;height:70px;right:0px;top:49px;z-index:0;">
<ul id="navbar">
<div style="margin-left:25%;padding-bottom:15px;border-bottom:solid;border-width:0.6px;border-color:#ebebe0;width:39%;float:left;">
<li style=""><span style="background-color:white;border:1px solid white;"><a href="admin.php?addProduct=1">Add New Product</a></span></li>
<li style="margin-left:50px;"><span style="background-color:white;border:1px solid white;"><a href="admin.php?addProduct=2">Order Status</a></li>
<li style="margin-left:50px;"><span style="background-color:white;border:1px solid white;"><a href="admin.php?addProduct=3">Set Discount</a></li>
</div>
</ul>
<span style="float:right;">
	<form action="">
      <input type="text" id="txt1" placeholder=" Search" onkeyup="showHint(this.value)" name="search" style="border-radius:10px;height:25px;width:250px;margin-right:100px;">
	  <br><span id="txtHint"></span>
    </form>
</span>
</div>
<br><br><br><br>
<br><!--header-close-->


<br><br><br>
<!--mainBody-->
<div style="width:25%;float:left">
<span style="font-family:arial; margin-left:10px;font-size:px;"><b>A</b>dmin <b>P</b>anel</span><br><br>
<table style="padding:0 0 150px 0; font-family:arial;font-size:14px;" class="tb1">

<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('bag')" value ="Bag"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('watch')" value ="Watch"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('shoes')" value ="Shoes"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('flip-flop')" value ="Flip-Flop"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('jeans')" value ="Jeans"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('shirt')" value ="Shirt"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('tshirt')" value ="T-Shirt"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('coat')" value ="Coat"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('skirt')" value ="Skirt"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('culottes')" value ="Culottes"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('dress')" value ="Dress"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('jeggings')" value ="Jeggings"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('jumpsuit')" value ="Jumpsuit"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('kurta')" value ="Kurta"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('kurti')" value ="Kurti"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('winterwear')" value ="Winterwear"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('bedsheet')" value ="Bedsheet"></td></tr>
<tr><td style="padding:10px 50px 10px 150px;background-color:#ffd27f;"><input type="button" style="background-color:#ffd27f; border:1px solid #ffd27f;" onclick="getc('sunglasses')" value ="Sunglasses"></td></tr>

</table>
</div>
<br>
<div id="place-item" style="float:right;margin-right:100px">
	<div style="margin-right:150px">
	
	<?php 
		
		if($ap==0)
		{?>
	<span style="font-family:arial;"><b>Items Collections</b></span><br><br><br>
		<table style="font-family:arial;box-shadow:20px 20px 50px 10px #f1f1f1;">
			<tr>
				<td valign="bottom"></td>
				<td valign="bottom"><span style="background-color:#ededed;padding:30px 60px 30px 60px;">MEN</span><br><br><br></td>
				<td valign="bottom"><span style="background-color:#ededed;padding:30px 50px 30px 50px;">WOMEN</span><br><br><br></td>
			</tr>
			<?php
				while($row1=mysqli_fetch_array($result1))
				{
						$sql2="select count(type) as item_female from collection where type ='".$row1['type']."' and gender='girl'";	
						$result2=mysqli_query($con,$sql2);
						$r=mysqli_fetch_array($result2);
					echo "<tr>
						<td style='background-color:#f1f1f1;padding:10px 50px 10px 50px;border-radius:10px;'><b>".ucwords($row1['type'])."</b></td>
						<td align='center' style='background-color:#ffedcc'>".$row1['item_male']."</td>
						<td align='center' style='background-color:#ffedcc'>".$r['item_female']."</td>
					</tr>";	
				}
			?>
		</table>
		<!--enter data start--->
		<?php
		}else
		
		if($ap==1)
		{?>
		<br>
		<form method="POST">
<span style="font-weight:bold;font-size:20px;font-family:arial;">Add New Product</span><br><br>
		<table style="height:50%;margin-right:100px;">
<tr>
<td>Brand Name</td>
<td><input type="text" name="bname" required></td>
</tr>
<tr>
<td>Choose Type</td>
<td><select name="type" required>
		<option>-select-</option>
		<option >bedsheet</option>
		<option>dress</option>
		<option >kurta</option>
		<option>kurti</option>
		<option>jumpsuit</option>
		<option>jeggings</option>
		<option>skirt</option>
		<option>culottes</option>
		<option value="jeans">jeans</option>
		<option value="shirt" >shirt</option>
		<option value="tshirt" >tshirt</option>
		<option value="coat">coat</option>
		<option >winterwear</option>
		<option value="shoes" >shoes</option>
		<option value="shoes">flip-flop</option>
		<option value="shoes">sandal</option>
		<option value="bag">bag</option>
		<option value="bag" >handbag</option>
		<option value="watch">watch</option>
		<option value="trackpant">trackpant</option>
		<option value="sunglasses" >sunglasses</option>
		</select>
</td>
</tr>
<tr>		
<td>Gender</td>
<td><input type="radio" name="gen" value="boy" checked="checked">BOY</input>
		<input type="radio" name="gen" value="girl" 	 >GIRL</input>
</td>		
</tr>
<tr>
<td>Main Price</td>
<td><input type="text" name="mprice" required></td>
</tr>
<tr>
<td>Discount</td>
<td><input type="text" name="discount" required></td>
</tr>
<tr>
<td>Img Name</td>
<td><input type="file" name="imgfile" required></td>
</tr>
<tr>
<td>Discription</td>
<td><input type="text" name="disc" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value=ADD style="background-color:#ffc04c;padding:5px 20px 5px 20px;border:1px solid #ffc04c;"></td>
</tr>
</table>
</form>

<?php
	
	if(isset($_POST['submit']))	
	{
	$fprice=intval($_POST['mprice']-($_POST['mprice']*$_POST['discount']/100));
	$disc=ucwords($_POST['disc']);
	$bname=ucwords($_POST['bname']);
		$sql= "insert into collection values('NULL','$bname','".$_POST['type']."','".$_POST['gen']."','".$_POST['mprice']."','".$_POST['discount']."','$fprice','".$_POST['imgfile']."','$disc')";
		if(mysqli_query($con,$sql)==true)
			echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Producted Successfully Added</span>";
		else
			echo "<br><span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Have some Problem</span>";
		
	}
}else
	if($ap==2)
	{
	
	echo "<br><span style='font-family:arial;margin-right:600px;'>Order Status</span>";
//inside cart
$sql1="select * from cart where status='o' ORDER BY iid DESC";
$result1=mysqli_query($con,$sql1);

if(mysqli_num_rows($result1)>0)
{

while($row1=mysqli_fetch_array($result1))
{
echo "<div style='box-shadow:20px 20px 50px 10px #f1f1f1;border-radius:1px;padding:6px;margin-left:100px'>
		<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>User Email ID : ".$row1['email']."</span>	
		</div><br>";
$query="select * from collection where id=".$row1['id'];
$result2=mysqli_query($con,$query);
$row2=mysqli_fetch_array($result2);
	echo "<div style='box-shadow:20px 20px 50px 5px #f1f1f1;border-radius:1px;width:84%;margin-left:15%;border-left:5px solid #ffd27f;'>";
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
	echo "<td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			if($row1['deliver']=='nd')
				echo "<span style='border-radius:5px;border:1px solid #ffa500;padding:2px 37px 2px 37px;background-color:red;color:white;font-family:arial;font-size:14px;'><a href='admin.php?iid=".$row1['iid']."' style='color:white;'>Deliver</a></span>";
			else	
				echo "<span style='border-radius:5px;border:1px solid #ffa500;padding:2px 37px 2px 37px;background-color:green;color:white;font-family:arial;font-size:14px;'>Delivered</span>";
	echo "</td>
		</tr>";
	echo "</table>";	
	echo "</div><br><br>";
}
}else
echo "<div style='box-shadow:20px 20px 50px 10px #f1f1f1;border-radius:1px;padding:6px;margin-left:100px'>
		<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>No New Order</span>	
		</div><br><br>";
}
else
	if($ap==3)
		{
		?>
				<br>
		<form method="POST">
<span style="font-weight:bold;font-size:20px;font-family:arial;">Update Discount</span><br><br>
		<table style="height:50%;margin-right:100px;">
<tr>
<td>Brand Name</td>
<td><input type="text" name="bname" required></td>
</tr>
<tr>
<td>Choose Type</td>
<td><select name="type" required>
		<option>-select-</option>
		<option >bedsheet</option>
		<option>dress</option>
		<option >kurta</option>
		<option>kurti</option>
		<option>jumpsuit</option>
		<option>jeggings</option>
		<option>skirt</option>
		<option>culottes</option>
		<option value="jeans">jeans</option>
		<option value="shirt" >shirt</option>
		<option value="tshirt" >tshirt</option>
		<option value="coat">coat</option>
		<option >winterwear</option>
		<option value="shoes" >shoes</option>
		<option value="shoes">flip-flop</option>
		<option value="shoes">sandal</option>
		<option value="bag">bag</option>
		<option value="bag" >handbag</option>
		<option value="watch">watch</option>
		<option value="trackpant">trackpant</option>
		<option value="sunglasses" >sunglasses</option>
		</select>
</td>
</tr>
<tr>
<td>Price</td>
<td><input type="radio" name="discountrdb" value="equal" required><input type="number" min="0" name="txt1"></td>
</tr>
<tr>
<td>Price below</td>
<td><input type="radio" name="discountrdb" value="below"><input type="number" min="0" name="txt2"></td>
</tr>
<tr>
<td>Price above</td>
<td><input type="radio" name="discountrdb" value="above"><input type="number" min="0" name="txt3"></td>
</tr>
<tr>
<td>Price between</td>
<td><input type="radio" name="discountrdb" value="between"><input type="number" min="0" name="txt41"> to <input type="number" min="0" name="txt42"></td>
</tr>
<tr>
<td>Discount</td>
<td><input type="text" name="discount" required>(in %)</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="setdiscount" value="SET" style="background-color:#ffc04c;padding:5px 20px 5px 20px;border:1px solid #ffc04c;"></td>
</tr>
</table>
</form>
<br><br>
<?php
	
	if(isset($_POST['setdiscount']))	
	{
	$brand=ucwords($_POST['bname']);
	switch($_POST['discountrdb'])
		{
		case 'equal' : 
						$sql="update collection set discount=".$_POST['discount']." where bname='$brand' and type='".$_POST['type']."' and mainprice = ".$_POST['txt1'];
						$result=mysqli_query($con,$sql);
						if(!$result)
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Have some Problem</span>";
						else
						{
							$brand=ucwords($_POST['bname']);
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Discount Updated</span><br>";
						}
						break;
		case 'below' : $sql="update collection set discount=".$_POST['discount']." where bname='".$_POST['bname']."' and type='".$_POST['type']."' and mainprice < ".$_POST['txt2'];
						$result=mysqli_query($con,$sql);
						if(!$result)
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Have some Problem</span>";
						else
						{
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Discount Updated</span><br>";
						}
						break;
		case 'above' : $sql="update collection set discount=".$_POST['discount']." where bname='".$_POST['bname']."' and type='".$_POST['type']."' and mainprice > ".$_POST['txt3'];
						$result=mysqli_query($con,$sql);
						if(!$result)
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Have some Problem</span>";
						else
						{
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Discount Updated</span><br>";
						}
						break;
		case 'between' : $sql="update collection set discount=".$_POST['discount']." where bname='".$_POST['bname']."' and type='".$_POST['type']."' and (mainprice > ".$_POST['txt41']." and mainprice < ".$_POST['txt42'].")";
						$result=mysqli_query($con,$sql);
						if(!$result)
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Have some Problem</span>";
						else
						{
							echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Discount Updated</span><br>";
						}
						break;						
	}
	
	
	}
}	
?>	

		<!--enter data end--->
		
	</div>

</div>
<!--mainbody close-->

</body>
</html>