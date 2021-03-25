<?php 
	session_start();
	if(!isset($_SESSION['name']))
	header('location:login.php');
	function score(){
		$_SESSION['score']=$_SESSION['score']+'1';
	}
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'csquiz');
		for($i=11;$i<=15;$i++)
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
		$name=$_SESSION['name'];
		$subject=$_SESSION['subject'];
		$score=$_SESSION['score'];
		$result=mysqli_query($con,"SELECT * FROM newuser WHERE name='$name' limit 1");
		$row=mysqli_fetch_array($result);
		mysqli_query($con,"UPDATE newuser SET score='$score' WHERE name='$name'");
		mysqli_query($con,"INSERT INTO `round`(`subject`, `score`) VALUES ('$subject','$score')");
		$result = mysqli_query($con,"SELECT * FROM round");
		$score= 0;
		while ($num = mysqli_fetch_assoc ($result)) {
		$score += $num['score'];
		}
		?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/home.css"/>
		<title>CS Quiz</title>
	</head>
<body>
	<ul id="navigationbar">
			<li style="float:left;"><a style="background-color:red;"href="index.php">Home</a></li>
			<li ><p style="color:white; display:inline; float:left; padding:0px 30px; font-size:25; margin-bottom:0px;font-weight:bold;">Welcome, <?php echo $_SESSION['name']?></p></li>
			<li style="float:right;"><a style="background-color:red;"href="logout.php">Logout</a></li>
			<li style="float:right;">
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
		<div style="border:1px solid black;height:auto;width:1200px;margin:0 auto;margin-top:0px;box-shadow:0 10px 10px grey;">
			<br/><br/><br/>
			<center><h1>CS Quiz</h1></center>
			<hr width="1100px"/>
			<center><h2 style="color:green" >Result</h2></center>
			<center><?php if($_SESSION['counter']>1){ ?>
				<div id="chart-container">
				<canvas id="mycanvas"></canvas>
			</div>

		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/Chart.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>;
			<?php } ?><center/>
			<br/>
			<div style="background-color:yellow; border-radius:50px; border:1px solid black;height:300px;width:400px;margin:0 auto;margin-top:0px;box-shadow:0 10px 10px grey;">
			<center><h1 style="color:green" >Final Score: <?php echo $score."/".(15*$_SESSION['counter']); ?></h1></center>
			<center><p style="color:blue; font-size:50px;"><?php 
				$per=($score/(15*$_SESSION['counter']))*100;
				echo round($per,2)."%"; 
			?></p></center>
			<center><p style="color:red; font-size:50px;"><?php
				if($per<=30){
					echo "Not Good";
				}?></p>
				<p style="color:green; font-size:50px;"><?php
				if($per<=75 & $per>30){
					echo "Good";
				}
			?></p><p style="color:green; font-size:50px;">
			<?php 
				if($per>75){
					echo "Excellent";
				}?></p>
			</center>
			</div>
				<br/>
				<center><a href="retry.php"><button>Next Subject</button></a></center>
				<br/>
				<br/>
		</div>
		<center><p style="margin-top:3px;">© Saurabh Saraswat - CS QUIZ</p></center>
</body>
</html>