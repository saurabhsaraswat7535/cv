<?php
	session_start();
	if(isset($_SESSION['name']))
	header('location:home.php');
?>
<html>
	<head>
	<title>CS Quiz - Log In</title>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	</head>
	<body >
		<ul id="navigationbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="signup.php">Sign Up</a></li>
			<li><a class="active" href="login.php">Login</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
		<div id="box">
			<br/><br/>
			<center><h2>CS Quiz - Log In</h2></center>
			<hr width="500px"/><br/><br/><br/><br/>
			<center><form method="post">
			<table >
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" required/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" required/></td>
					</tr></table>
					<br/>
					<center><div style="height:70px;"><button type="submit" name="submit" value="save">Login</button>
		</form><br/>
		<center><p style="color:red; font-weight:bold;"><?php
		if(isset($_POST["submit"]))
		{
		$username=$_POST['username'];
		$pass=$_POST['password'];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"csquiz");
		$result=mysqli_query($con,"SELECT * FROM newuser WHERE username='$username' && password='$pass'");
		$numrows=mysqli_num_rows($result);
			if($numrows==1)
			{	
				$row=mysqli_fetch_array($result);
				$_SESSION['name']=$row['name'];
				$_SESSION['username']=$row['username'];
				$_SESSION['subject']=$row['subject'];
				$_SESSION['score']=$row['score'];
				$_SESSION['counter']='1';
				mysqli_query($con,"DELETE FROM `round`");
				header('location:home.php');
			}
			else
			{
				echo "Wrong Email/Password";
			}
		}
		?><p></div></center>
		<br/><hr width="500px"/><br/>
			<center><p>Not Registered Yet?</p>
			<p><a href="signup.php">Create a new Account</a></p></center>
		</div>
		<center><p style="margin-top:3px;">© Saurabh saraswat - CS QUIZ</p></center>
		</body>
</html>
