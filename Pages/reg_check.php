<html>
<head>
<?php
	header("Content-type:text/html;charset=utf-8");
	error_reporting(1);
?>
</head>
<body>
<?php
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$location=$_POST['location'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$agree=$_POST['agree'];
	if(isset($_POST['submit'])){
		if($agree==""){
			echo "<p align='center'>Please comply with regulations!</p>";
			echo "<p align='right'><a href='reg.htm'>Sign Up</a></p>";
		}
		else if($name=="" || $gender=="" || $age=="" || $location=="" || $id=="" || $email=="" || $mobile=="" ){
			echo "<p align='center'>Required fields cannot be left blank!</p>";
			echo "<p align='right'><a href='reg.htm'>Sign Up</a></p>";			
		}
		else{
			echo "<form method=post action='reg_check2.php'>";
			echo "<table align='center'>";
			echo "<p align='center'>Please set your username and password</p>";
			echo "<tr><th align='left'>Username<input type=text name='username' size='30'></th></tr>";
			echo "<tr><th align='left'>Password&nbsp&nbsp&nbsp&nbsp<input type=password name='password' size='30'></th></tr>";
			echo "<tr><th align='center'><input type=submit name='submit' value='Submit'><input type=reset name='reset' value='Reset'></th></tr>";
			echo "<input type=hidden name='name' value=$name>";
			echo "<input type=hidden name='gender' value=$gender>";
			echo "<input type=hidden name='age' value=$age>";
			echo "<input type=hidden name='location' value=$location>";
			echo "<input type=hidden name='id' value=$id>";
			echo "<input type=hidden name='email' value=$email>";
			echo "<input type=hidden name='mobile' value=$mobile>";
			echo "</table>";
			echo "</form>";
		}
	}
	echo "<p align='right'><a href='index.htm'>Sign In</a></p>";
?>
</body>
</html>