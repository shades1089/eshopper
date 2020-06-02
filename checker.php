<?php
session_start();
$id=$_GET['id'];

if(!isset($_SESSION['email_id']))
	header("location:login.php?pagename=".basename($_SERVER['PHP_SELF'])."&id=".$id);
else
	header("location:cart.php?id=".$id);	

?>