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
	$result=mysql_query("SELECT * FROM login WHERE username='$usr'",$db);
	$name=mysql_result($result,0,"name");
	$gender=mysql_result($result,0,"gender");
	$age=mysql_result($result,0,"age");
	$location=mysql_result($result,0,"location");
	$id=mysql_result($result,0,"id");
	$email=mysql_result($result,0,"email");
	$mobile=mysql_result($result,0,"mobile");
	echo "<h1 align='center'>Update Information</h1>";
	echo "<h6 align='center'>Please enter your personal information</h6>";
	echo "<form method='post' action='updateInfo2.php'>";
	echo "<table border='0' align='center'>";
	echo "<tr>";
	echo "<th align='left'>Name<input type=text name='name' size='20' value=$name></th>";
	echo "<th align='left' rowspan='2'>";
	if($gender==1){
		echo "Gender&nbspMale<input type=radio name='gender' value='1' checked>";
		echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFemale<input type=radio name='gender' value='0'>";
	}
	else{
		echo "Gender&nbspMale<input type=radio name='gender' value='1'>";
		echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFemale<input type=radio name='gender' value='0' checked>";
	}
	echo "</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th align='left'>Age<input type=text name='age' size='20' value=$age></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th align='left'>Birthplace<input type=text name='location' size='20' value=$location></th>";
	echo "<th align='left'>ID<input type=text name='id' size='20' value=$id></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th align='left' colspan='2'>E-mail<input type=text name='email' size='52' value=$email></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th align='left' colspan='2'>Phone<input type=text name='mobile' size='57' value=$mobile><input type=hidden name='username' value=$usr></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th align='center'><input type=submit name='submit' value='Submit'></th>";
	echo "<th align='center'><input type=reset name='reset' value='Reset'></th>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
	echo "<p align='right'><a href='index.htm'>Sign In</a></p>";
	mysql_close($db);
?>
</body>
</html>