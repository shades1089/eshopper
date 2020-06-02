<?php
session_start();
$con=mysqli_connect("localhost","root","","shopping");

if(!$con)
	echo "connection failed!!";


$type=$_GET['type'];

if(empty($_GET['brand']))
$sql="select * from collection where type ='".$type."'"; 
else
$sql="select * from collection where brand = '".$_GET['brand']."' and type ='".$type."'"; 

$result=mysqli_query($con,$sql);
	
mysqli_close($con);

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

.grid-heading{
font-family:arial;
font-size:15px;
}
.grid-sub-heading{
font-family:arial;
font-size:11px;

color:#696969;
border-color:#D3D3D3;
border-width:.6px;
padding:2px 0 5px 0;
}
.grid-rate{
font-weight:bold;
font-family:arial;
font-size:12px;
padding:10px;
}
.grid-addtobag{
color:white;
font-family:arial;
font-size:12px;
font-weight:bold;
background-color:white;
padding:7px;
text-decoration:none;
}
.idAdd {
color:white;
font-family:arial;
font-size:12px;
font-weight:bold;
text-decoration:none;
}

.grid_border:hover .grid-addtobag{
color:#6666ff;
font-family:arial;
font-size:12px;
font-weight:bold;
background-color:#ffd699;
padding:7px;
text-decoration:none;
}
.grid_border:hover .idAdd{
color:#6666ff;
font-family:arial;
font-size:12px;
font-weight:bold;
background-color:#ffd699;
}

#grid-cell .grid_border{
padding:1px;
}
#grid-cell .grid_border:hover{
padding:0.5px;
border:0.5px solid #D3D3D3;
}

<!--grid end---->
table{
border:1px solid black;
}

</style>
</head>
<body>

<!--mainBody-->
<div>

<table id="grid-cell" cellspacing="30" style="padding:0 0 150px 0;">

<?php
$i=0;
while($row=mysqli_fetch_array($result))
{
	$i++;
	$bname=ucwords($row['bname']);
	$fprice=intval($row['mainprice']-($row['mainprice']*$row['discount']/100));
	if($i==1)
	{
		echo "<tr>";
	}
	echo "<td class='grid_border' style='text-align:center;'>";
		echo "<img src='brandcollection/".$row['imgname']."'>";
		echo "<br>";
		echo "<div class='grid-heading' style='margin-top:5px;font-family:arial;font-size:12px;color:#3f3f3f;'>".$bname."</div>";

		echo "<div class='grid-sub-heading' style='font-weight: normal;'>".$row['disc']."</div>";
		
		if($row['discount']!=0)
			echo "<div class='grid-rate'>Rs. ".$fprice." <del style='color:grey;'>Rs. ".$row['mainprice']."</del><span style='color:red;font-size:10px;'> (".$row['discount']."% OFF)</span></div>";
		else
			echo "<div class='grid-rate'>Rs. ".$fprice."</div>";
	echo "</td>";
	
	if($i==4)
	{
		$i=0;
		echo "</tr>";
	}
}
?>
</tr>
</table>

</div>

<!--mainbody close-->

</body>
</html>