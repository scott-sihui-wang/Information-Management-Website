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
	$usr=$_POST['username'];
	if(isset($_POST['submit'])){
		if($name=="" || $gender=="" || $age=="" || $location=="" || $id=="" || $email=="" || $mobile=="" ){
			echo "<p align='center'>Required fields cannot be left blank!</p>";
			echo "<p align='right'><a href='updateInfo.php?username=$usr'>Retry</a></p>";			
		}
		else{
			$db=mysql_connect("localhost","root");
			mysql_select_db("userDB",$db);
			$sql="UPDATE login SET name='$name',gender='$gender',age='$age',location='$location',id='$id',email='$email',mobile='$mobile' WHERE username='$usr'";
			$result=mysql_query($sql);
			echo "<p align='center'>Your information is updated.</p>";
			echo "<p align='right'><a href='personalCenter.php?username=$usr'>Return to My Account</a></p>";
			mysql_close($db);
		}
	}
	echo "<p align='right'><a href='index.htm'>Sign In</a></p>";
?>
</body>
</html>