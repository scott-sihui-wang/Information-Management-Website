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
	$usr=0;
	$self=$_GET['admin'];
	if(isset($_GET['username'])) $usr=$_GET['username'];
	$page=$_SERVER['SCRIPT_NAME'];
	if($usr){
		if($_GET[delete]){
			$sql="DELETE FROM login WHERE username='$usr'";
			$result=mysql_query($sql,$db);
			echo "<p>The user is deleted.</p>";
			echo "<p align='right'><a href=$page?admin=$self>Return</a></p>";
		}
		else{
			$sql="SELECT * FROM login WHERE username='$usr'";
			$result=mysql_query($sql,$db);
			$right=mysql_result($result,0,"isAdmin");
			if($right==1){
				$sql2="UPDATE login SET isAdmin=0 WHERE username='$usr'";
			}
			else if(right==0){
				$sql2="UPDATE login SET isAdmin=1 WHERE username='$usr'";
			}
			$result2=mysql_query($sql2);
			echo "<p>User permission is updated.</p>";
			echo "<p align='right'><a href=$page?admin=$self>Return</a></p>";
		}
	}
	else{
		$result=mysql_query("SELECT * FROM login",$db);
		if($myrow=mysql_fetch_array($result)){
			echo "<table>";			
			echo "<tr>";
			echo "<th>Name</th><th>Gender</th><th>Age</th><th>ID</th><th>Birthplace</th><th>E-mail</th><th>Phone</th><th>Permission</th><th>Operation</th>";
			echo "</tr>";
			do{	
				$usr=$myrow["username"];
				$tabname=$myrow["name"];
				$tabgender=$myrow["gender"];
				$tabage=$myrow["age"];
				$tabid=$myrow["id"];
				$tablocation=$myrow["location"];
				$tabemail=$myrow["email"];
				$tabmobile=$myrow["mobile"];
				echo "<tr>";
				echo "<th>$tabname</th>";
				if($tabgender==1){
					echo "<th>Male</th>";
				}
				else{
					echo "<th>Female</th>";	
				}
				echo "<th>$tabage</th>";
				echo "<th>$tabid</th>";
				echo "<th>$tablocation</th>";
				echo "<th>$tabemail</th>";
				echo "<th>$tabmobile</th>";
				if($myrow["username"]!==$self){
					if($myrow["isAdmin"]==1){
						echo "<th><a href=$page?admin=$self&username=$usr>Revoke Administrator Permission</a></th>";
					}
					else{
						echo "<th><a href=$page?admin=$self&username=$usr>Grant Administrator Permission</a></th>";
					}
				}
				else{
					echo "<th></th>";
				}
				if($myrow["username"]!==$self){
					echo "<th><a href=$page?admin=$self&username=$usr&delete=yes>Delete Account</a></th>";
				}
				else{
					echo "<th></th>";
				}
				echo "</tr>";
			}
			while($myrow=mysql_fetch_array($result));
			echo "</table>";
			echo "<p align='right'><a href='personalCenter.php?username=$self'>Return to My Account</a></p>";
		}
	}
	echo "<p align='right'><a href='index.htm'>Sign Out</a></p>";
	mysql_close($db);
?>
</body>
</html>