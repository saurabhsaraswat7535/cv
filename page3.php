<?php 
	session_start();
	if(!isset($_SESSION['name']))
	header('location:login.php');
	function score(){
		$_SESSION['score']=$_SESSION['score']+'1';
	}
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'csquiz');
	$username=$_SESSION['username'];
	$result=mysqli_query($con,"SELECT * FROM newuser WHERE username='$username'");
	$row=mysqli_fetch_array($result);
	$_SESSION['subject']=$row['subject'];
		for($i=6;$i<=10;$i++)
		{
			switch($_SESSION['subject'])
				{
					case 'Computer Basics':
						$result=mysqli_query($con,"SELECT * from computer where id='$i'");
						break;
					case 'Micro Processor':
						$result=mysqli_query($con,"SELECT * from micro where id='$i'");
						break;
					case 'Data Structure':
						$result=mysqli_query($con,"SELECT * from data where id='$i'");
						break;
					case 'Networking':
						$result=mysqli_query($con,"SELECT * from network where id='$i'");
						break;
					case 'Digital Electronics':
						$result=mysqli_query($con,"SELECT * from digital where id='$i'");
						break;
					case 'Computer Graphics':
						$result=mysqli_query($con,"SELECT * from graphics where id='$i'");
						break;
				}
		$row=mysqli_fetch_array($result);
		if($_POST['ans'."$i"]==$row['ans'])
		{
			score();
		}
		}
		$score=$_SESSION['score'];
		$name=$_SESSION['name'];
		$result=mysqli_query($con,"SELECT * FROM newuser WHERE name='$name' limit 1");
		$row=mysqli_fetch_array($result);
		mysqli_query($con,"UPDATE newuser SET score='$score' WHERE name='$name'");
		?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/home.css"/>
		<title>CS Quiz</title>
	</head>
	<body>
		<ul id="navigationbar">
			<li style="float:left;"><a style="background-color:red;" href="index.php">Home</a></li>
			<li ><p style="color:white; display:inline; float:left; padding:0px 30px; font-size:25; margin-bottom:0px;font-weight:bold;">Welcome, <?php echo $_SESSION['name']?></p></li>
			<li style="float:right;"><a style="background-color:red;" href="logout.php">Logout</a></li>
			<p style="position:fixed; left:1098px; top:25px; display:inline;">
			<select style="background-color:blue; color:white; border:none;" onChange="window.location.href=this.value">
			<option><a>Change</a></option>
			<option value="computer.php"><a>Computer Basics</a></option>
			<option value="micro.php"><a>Micro Processor</a></option>
			<option value="data.php"><a>Data Structure</a></option>
			<option value="network.php"><a>Networking</a></option>
			<option value="digital.php">Digital Electronics</option>
			<option value="graphics.php">Computer Graphics</option>
			</select></p></li>
			<li ><p style="color:white; position:fixed; left:1040px; top:5px; display:inline;font-weight:bold;">Subject: <?php echo $_SESSION['subject']?></p></li>
			<li ><p style="color:yellow; position:fixed; left:640px; display:inline; align:center;font-size:20px;font-weight:bold;">Score: <?php echo $_SESSION['score']?></p></li>
		</ul>
		<div style="border:1px solid black;height:1150px;width:1200px;margin:0 auto;margin-top:0px;box-shadow:0 10px 10px grey;">
			<br/><br/><br/>
			<center><h1>CS Quiz</h1></center>
			<hr width="1100px"/>
			<center><h2 style="color:green" >Round: 3</h2></center>
				<form method="post" action="result.php">
				<div style="margin-left:200px;margin-right:200px;">
				<?php
				switch($_SESSION['subject'])
				{
					case 'Computer Basics':
						$result=mysqli_query($con,"SELECT * from computer where id='11'");
						break;
					case 'Micro Processor':
						$result=mysqli_query($con,"SELECT * from micro where id='11'");
						break;
					case 'Data Structure':
						$result=mysqli_query($con,"SELECT * from data where id='11'");
						break;
					case 'Networking':
						$result=mysqli_query($con,"SELECT * from network where id='11'");
						break;
					case 'Digital Electronics':
						$result=mysqli_query($con,"SELECT * from digital where id='11'");
						break;
					case 'Computer Graphics':
						$result=mysqli_query($con,"SELECT * from graphics where id='11'");
						break;
				}
				$row=mysqli_fetch_array($result); ?>
				<h3>Q<?php echo $row['id'].": "; echo $row['question']; ?></h3>
					<input type="radio" name="ans11" value="1" required/><?php echo $row['1']; ?><br/>
					<input type="radio" name="ans11" value="2" required/><?php echo $row['2']; ?><br/>
					<input type="radio" name="ans11" value="3" required/><?php echo $row['3']; ?><br/>
					<input type="radio" name="ans11" value="4" required/><?php echo $row['4']; ?><br/>
					</div>
					<br/>
					<hr width="800px"/>
					
				<div style="margin-left:200px;margin-right:200px; ">
				<?php switch($_SESSION['subject'])
				{
					case 'Computer Basics':
						$result=mysqli_query($con,"SELECT * from computer where id='12'");
						break;
					case 'Micro Processor':
						$result=mysqli_query($con,"SELECT * from micro where id='12'");
						break;
					case 'Data Structure':
						$result=mysqli_query($con,"SELECT * from data where id='12'");
						break;
					case 'Networking':
						$result=mysqli_query($con,"SELECT * from network where id='12'");
						break;
					case 'Digital Electronics':
						$result=mysqli_query($con,"SELECT * from digital where id='12'");
						break;
					case 'Computer Graphics':
						$result=mysqli_query($con,"SELECT * from graphics where id='12'");
						break;
				}
				$row=mysqli_fetch_array($result); ?>
				<h3>Q<?php echo $row['id'].": ";echo $row['question']; ?></h3>
					<input type="radio" name="ans12" value="1" required/><?php echo $row['1']; ?><br/>
					<input type="radio" name="ans12" value="2" required/><?php echo $row['2']; ?><br/>
					<input type="radio" name="ans12" value="3" required/><?php echo $row['3']; ?><br/>
					<input type="radio" name="ans12" value="4" required/><?php echo $row['4']; ?><br/>
					</div>
					<br/>
					<hr width="800px"/>
					
				<div style="margin-left:200px;margin-right:200px;">
				<?php switch($_SESSION['subject'])
				{
					case 'Computer Basics':
						$result=mysqli_query($con,"SELECT * from computer where id='13'");
						break;
					case 'Micro Processor':
						$result=mysqli_query($con,"SELECT * from micro where id='13'");
						break;
					case 'Data Structure':
						$result=mysqli_query($con,"SELECT * from data where id='13'");
						break;
					case 'Networking':
						$result=mysqli_query($con,"SELECT * from network where id='13'");
						break;
					case 'Digital Electronics':
						$result=mysqli_query($con,"SELECT * from digital where id='13'");
						break;
					case 'Computer Graphics':
						$result=mysqli_query($con,"SELECT * from graphics where id='13'");
						break;
				}
				$row=mysqli_fetch_array($result); ?>
				<h3>Q<?php echo $row['id'].": ";echo $row['question']; ?></h3>
					<input type="radio" name="ans13" value="1" required/><?php echo $row['1']; ?><br/>
					<input type="radio" name="ans13" value="2" required/><?php echo $row['2']; ?><br/>
					<input type="radio" name="ans13" value="3" required/><?php echo $row['3']; ?><br/>
					<input type="radio" name="ans13" value="4" required/><?php echo $row['4']; ?><br/>
					</div>
					<br/>
					<hr width="800px"/>
					
				<div style="margin-left:200px; margin-right:200px;">
				<?php switch($_SESSION['subject'])
				{
					case 'Computer Basics':
						$result=mysqli_query($con,"SELECT * from computer where id='14'");
						break;
					case 'Micro Processor':
						$result=mysqli_query($con,"SELECT * from micro where id='14'");
						break;
					case 'Data Structure':
						$result=mysqli_query($con,"SELECT * from data where id='14'");
						break;
					case 'Networking':
						$result=mysqli_query($con,"SELECT * from network where id='14'");
						break;
					case 'Digital Electronics':
						$result=mysqli_query($con,"SELECT * from digital where id='14'");
						break;
					case 'Computer Graphics':
						$result=mysqli_query($con,"SELECT * from graphics where id='14'");
						break;
				}
				$row=mysqli_fetch_array($result); ?>
				<h3>Q<?php echo $row['id'].": ";echo $row['question']; ?></h3>
					<input type="radio" name="ans14" value="1" required/><?php echo $row['1']; ?><br/>
					<input type="radio" name="ans14" value="2" required/><?php echo $row['2']; ?><br/>
					<input type="radio" name="ans14" value="3" required/><?php echo $row['3']; ?><br/>
					<input type="radio" name="ans14" value="4" required/><?php echo $row['4']; ?><br/>
					</div>
					<br/>
					<hr width="800px"/>
					
				<div style="margin-left:200px;margin-right:200px;">
				<?php switch($_SESSION['subject'])
				{
					case 'Computer Basics':
						$result=mysqli_query($con,"SELECT * from computer where id='15'");
						break;
					case 'Micro Processor':
						$result=mysqli_query($con,"SELECT * from micro where id='15'");
						break;
					case 'Data Structure':
						$result=mysqli_query($con,"SELECT * from data where id='15'");
						break;
					case 'Networking':
						$result=mysqli_query($con,"SELECT * from network where id='15'");
						break;
					case 'Digital Electronics':
						$result=mysqli_query($con,"SELECT * from digital where id='15'");
						break;
					case 'Computer Graphics':
						$result=mysqli_query($con,"SELECT * from graphics where id='15'");
						break;
				}
				$row=mysqli_fetch_array($result); ?>
				<h3>Q<?php echo $row['id'].": ";echo $row['question']; ?></h3>
					<input type="radio" name="ans15" value="1" required/><?php echo $row['1']; ?><br/>
					<input type="radio" name="ans15" value="2" required/><?php echo $row['2']; ?><br/>
					<input type="radio" name="ans15" value="3" required/><?php echo $row['3']; ?><br/>
					<input type="radio" name="ans15" value="4" required/><?php echo $row['4']; ?><br/>
					</div>
					<br/>
					<hr width="800px"/>
					<br/>
					<div style="margin-left:850px;">
						<button type="submit">Result >></button>
					</div>
				</form>
		</div>
		<center><p style="margin-top:3px;">© Saurabh Saraswat - CS QUIZ</p></center>
	</body>
</html>
