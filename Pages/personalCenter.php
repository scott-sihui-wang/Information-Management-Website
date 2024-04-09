<html>
<head>
<?php
	header("Content-type:text/html;charset=utf-8");
	error_reporting(1);
?>
</head>
<body>
<?php
	$usr=$_GET['username'];
	$db=mysql_connect("localhost","root");
	mysql_select_db("userDB",$db);
	$result=mysql_query("SELECT * FROM login WHERE username = '$usr'",$db);
	$name=mysql_result($result,0,"name");
	echo "<h1 align='center'>Welcome，$name</h1>";
	echo "<p align='center'><a href='updateInfo.php?username=$usr'>Update Account Information</a></p>";
	if(mysql_result($result,0,"isAdmin")==1){
		echo "<p align='center'><a href='admin.php?admin=$usr'>User Management</a></p>";
	}
	echo "<p align='right'><a href='index.htm'>Sign Out</a></p>";
	mysql_close($db);
?>
</body>
</html>