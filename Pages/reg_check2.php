<html>
<head>
<?php
	header("Content-type:text/html;charset=utf-8");
	error_reporting(1);
?>
</head>
<body>
<?php
	$db=mysql_connect("localhost","root");
	mysql_select_db("userDB",$db);
	$username=$_POST['username'];
	$result=mysql_query("SELECT * FROM login WHERE username='$username'");
	if(mysql_result($result,0,"username")!=NULL){
		echo "<p align='center'>Username exists!</p>";
		echo "<p align='right'><a href='reg.htm'>Retry</a></p>";
	}
	else{
		$sql="INSERT INTO login (username,password,isAdmin,name,gender,age,location,id,email,mobile) VALUE('$_POST[username]','$_POST[password]',0,'$_POST[name]','$_POST[gender]','$_POST[age]','$_POST[location]','$_POST[id]','$_POST[email]','$_POST[mobile]')";
		$result=mysql_query($sql);
		echo "<p align='center'>Your account has been created!</p>";
		echo "<p align='right'><a href='index.htm'>Sign In</a></p>";
	}
	mysql_close($db);
?>
</body>
</html>