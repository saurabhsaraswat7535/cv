<?php
	session_start();
	$_SESSION['score']='0';
	$username=$_SESSION['username'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'csquiz');
	mysqli_query($con,"UPDATE newuser SET score='0' WHERE name='$username'");
	session_destroy();
	mysqli_close($con);
	header('location:login.php');
?>