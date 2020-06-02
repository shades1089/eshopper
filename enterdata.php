<!DOCTYPE html>
<html>
<head>
<title>E-Shopper</title>
</head>
<body>
<form method="POST">
<span style="font-weight:bold;font-size:20px;font-family:arial;">Add New Product</span><br><br>
<table style="height:50%;margin-left:100px;">
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
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","shopping");
if(!$con)
	echo "Connection failed";
	
	if(isset($_POST['submit']))	
	{
	$fprice=intval($_POST['mprice']-($_POST['mprice']*$_POST['discount']/100));
	$disc=ucwords($_POST['disc']);
	$bname=ucwords($_POST['bname']);
		$sql= "insert into collection values('NULL','$bname','".$_POST['type']."','".$_POST['gen']."','".$_POST['mprice']."','".$_POST['discount']."','$fprice','".$_POST['imgfile']."','$disc')";
		if(mysqli_query($con,$sql)==true)
			echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Producted Successfully Added</span>";
		else
			echo "<span style='font-family:arial;color:red;border:1px solid red;border-radius:2px;padding:5px 10px 5px 10px;'>Have some Problem</span>";
		
	}
mysqli_close($con);	
?>