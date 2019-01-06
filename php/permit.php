<?php

require_once('../db/connect.php');

$uname = "tours";
$pwd = "tours123";

session_start();

if (isset($_SESSION['uname'])){
	
	
	header('Location: ../db/dashboard2.php'); 
	

	//echo "<h1> welcome ".$_SESSION['uname']."</h1>";

	//echo "<a href='addnew.php'>Product</a><br>";
	
	//echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
	
	
	}
	


else{

	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		
	$_SESSION['uname']=$uname;
	
	echo "<script>location.href='../db/dashboard2.php'</script>";
	}
	
	else {
	
		echo "<script>alert('username or password incorrect !')</script>";
		
		echo "<script>location.href='../index.php'</script>";
	
	}
	
}





?>
	
