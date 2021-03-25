<html>
	<head>
	<title>Inserter</title>
	</head>
	<body >
		<center><form method="post">
			<table >
				<tr>
					<td>ID</td>
					<td><input type="number" name="id" required/></td>
				</tr>
				<tr>
					<td>Question</td>
					<td><input type="text" name="question" required/></td>
				</tr>
				<tr>
					<td>Answer</td>
					<td><input type="number" name="answer" required/></td>
				</tr>
				
				
			</table>
					<br/>
					<button type="submit" name="submit" value="save">Insert</button>
		</form>

<?php
		if(isset($_POST["submit"]))
		{
		$id=$_POST['id'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"csquiz");
		$sql="INSERT INTO 'graphics'(id,question,ans) VALUES('$id','$question','$answer')";
		$result=mysqli_query($con,$sql);
			if($result)
			{
				echo "Success";
			}
			else{
			echo "Failure";
			echo $id;
			echo $question;
			echo $answer;
			echo $a;
			echo $b;
			echo $c;
			echo $d;
			}
		}
?>
</body>
</html>