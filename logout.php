<?php
session_start();

if(!isset($_SESSION)){
    header("Location:index.php");
}
// remove all session variables
session_unset(); 

$brand=$_GET['brand'];
$type=$_GET['type'];
$pagename=$_GET['pagename'];
$id=$_GET['id'];
// destroy the session 
session_destroy();
 
switch($id)
	{
	case '': header("Location:".$pagename."?brand=".$brand."&type=".$type);break;
	case 0 : header("Location:index.php?");break;
	default: header("Location:".$pagename."?brand=".$brand."&type=".$type);break;
	}

  
?>