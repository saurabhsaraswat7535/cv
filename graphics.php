<?php
	session_start();
	if(!isset($_SESSION['name']))
	header('location:login.php');
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'csquiz');
	$name=$_SESSION['name'];
	mysqli_query($con,"UPDATE newuser SET subject='Computer Graphics' WHERE name='$name'");
	$_SESSION['score']='0';
	$_SESSION['subject']='Computer Graphics';
	header('location:home.php');
?>