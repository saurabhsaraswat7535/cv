<?php
	session_start();
	if(isset($_SESSION['name']))
	header('location:home.php');
?>
<html>
	<head>
	<title>CS Quiz - Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	 <script type="text/javascript">
         <!--
            function Success() {
               window.alert("Account Created Successfully"); 
            }
         //-->
      </script>
	</head>
	<body >
		<ul id="navigationbar">
			<li><a href="index.php">Home</a></li>
			<li><a class="active" href="signup.php">Sign Up</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
		<div id="box">
			<br/><br/>
			<center><h2>CS Quiz - Register</h2></center>
			<hr width="500px"/><br/><br/>
			<center><form method="post">
			<table >
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" required/></td>
				</tr>
				<tr>
					<td>Subject/Topic</td>
					<td>
						<select name="subject">
							<option>Select</option>
							<option name="computer basics">Computer Basics</option>
							<option name="micro">Micro Processor</option>
							<option name="data structure">Data Structure</option>
							<option name="networking">Networking</option>
							<option name="networking">Digital Electronics</option>
							<option name="networking">Computer Graphics</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" required/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" required/></td>
					</tr></table>
					<br/>
					<center><div style="height:70px;"><button type="submit" name="submit" value="save" >Submit</button>
		</form>
		
		<p style="color:red; font-weight:bold;"><?php
		if(isset($_POST["submit"]))
		{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$pass=$_POST['password'];
		$sub=$_POST['subject'];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"csquiz");
		$query=mysqli_query($con,"SELECT * FROM newuser WHERE username='".$username."'");
		$numrows=mysqli_num_rows($query);
		if($numrows==0)
		{
			$sql="INSERT INTO newuser(name,subject,username,password) VALUES('$name','$sub','$username','$pass')";
			$result=mysqli_query($con,$sql);
			if($result)
			{
				
				header('location:login.php');
			}
			else{
			echo "Failure";
			}
		}
			else{
				echo "Username Already Exist";
		}
		}
		?><p></center>
		<hr width="500px"/>
			<p id="instruction">Instructions:</p>
					<center><div id="instruction"><ul>
						<li>Name can contain text only.</li>
						<li>Subject indicates which type of Questions will appear.</li>
						<li>Username & Password are used in login.</li>
					</ul></div></div></center>
		</div>
		<center><p style="margin-top:3px;">© Saurabh Saraswat - CS QUIZ</p></center>
	</body>
</html>
