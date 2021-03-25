<?php
	session_start();
	if(isset($_SESSION['name']))
	header('location:about2.html');
?>
<html>
	<head>
	<title>CS Quiz - About</title>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	</head>
	<body>
		<ul id="navigationbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="signup.php">Sign Up</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a class="active" href="about.php">About</a></li>
		</ul>
		<div id="box">
			<br/><br/>
			<center><h2>CS Quiz - About</h2></center>
			<hr width="500px"/>
			<center>
				<h3>Developer:</h3>
				<img style="box-shadow:0 8px 15px black; border:2px solid black"src="img/IMG_2363.jpg" alt="developer" width="200px" />
				<p style="font-weight:bold">Saurabh Saraswat</p></center>
				<hr width="250px"/>
				<center><div style="text-align:left; margin-left:450px;"><ul>
					<li>Btech in Computer Engineering(sharda university)</li>
					<li>Email: saurabhsaraswat74170@gmail.com</li>
					<li>Phone: +917535963292</li>
					<li>Profiles: <a href="">Facebook<a/></li>
					
				</ul></div>
			</center>
			</div>
		<center><p style="margin-top:3px;">© Saurabh Saraswat - CS QUIZ</p></center>
	</body>
</html>