<?php
	session_start();
	$_SESSION['counter']=$_SESSION['counter']+'1';
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'csquiz');
	$username=$_SESSION['username'];
	switch($_SESSION['subject'])
				{
					case 'Computer Basics':
						mysqli_query($con,"UPDATE newuser SET subject='Micro Processor' WHERE username='$username'");
						break;
					case 'Micro Processor':
						mysqli_query($con,"UPDATE newuser SET subject='Data Structure' WHERE username='$username'");
						break;
					case 'Data Structure':
						mysqli_query($con,"UPDATE newuser SET subject='Networking' WHERE username='$username'");
						break;
					case 'Networking':
						mysqli_query($con,"UPDATE newuser SET subject='Digital Electronics' WHERE username='$username'");
						break;
					case 'Digital Electronics':
						mysqli_query($con,"UPDATE newuser SET subject='Computer Graphics' WHERE username='$username'");
						break;
					case 'Computer Graphics':
						mysqli_query($con,"UPDATE newuser SET subject='Computer Basics' WHERE username='$username'");
						break;
				}
	header('location:home.php');
?>