<?php
	session_start();
	if(isset($_SESSION['name']))
	header('location:home2.html');
?>
<html>
	<head>
	<title>Computer Science Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	</head>
	<body >
		<ul id="navigationbar">
			<li><a class="active" href="index.php">Home</a></li>
			<li><a href="signup.php">Sign Up</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
		<div id="box">
			<br/><br/>
			<h1 align="center">Computer Science Quiz</h1>
			<hr width="800px">
			<center><img id="backgroundimage" width="500px;" src="img/page.jpg" alt="logo"/></center>
			<center><h3>"Wanna Challenge Your Brain? HERE WE ARE"</h3>
			<h4>We provide variety of subjects to choose from many computer science subjects.</h4>
			<hr width="800px"></br>
			<a href="signup.php"><button id="bt2">Get Started >></button></a></center>
		</div>
		<center><p style="margin-top:3px;">© Saurabh Saraswat - CS QUIZ</p></center>
	</body>
</html>