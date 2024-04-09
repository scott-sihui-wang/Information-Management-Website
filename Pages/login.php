<html>
<head>
<?php
	header("Content-type:text/html;charset=utf-8");
	error_reporting(1);
?>
</head>
<body>
<?php
	$usr=$_POST['username'];
	$psw=$_POST['password'];
	$db=mysql_connect("localhost","root");
	mysql_select_db("userDB",$db);
	$result=mysql_query("SELECT * FROM login WHERE username = '$usr'",$db);
	if(mysql_result($result,0,"username")==NULL){
		echo "<p>Username not found!</p>";
		echo "<p align='right'><a href='index.htm'>Sign In</a></p>";
	}
	else{
		if(mysql_result($result,0,"password")!==$psw){
			echo "<p>Incorrect password!</p>";
			echo "<p align='right'><a href='index.htm'>Sign In</a></p>";
		}
		else{
			$name=mysql_result($result,0,"name");
			echo "<h1 align='center'>Welcome，$name</h1>";
			echo "<p align='center'><a href='updateInfo.php?username=$usr'>Update Account Information</a></p>";
			if(mysql_result($result,0,"isAdmin")==1){
				echo "<p align='center'><a href='admin.php?admin=$usr'>User Management</a></p>";
			}
			echo "<p align='right'><a href='index.htm'>Quit</a></p>";
		}
	}
	mysql_close($db);
?>
</body>
</html>