<?php
session_start();
include("connect.php");
	$tname=htmlentities($conn->real_escape_string(trim($_GET["tname"])));
	$pass=htmlentities($conn->real_escape_string(trim($_GET["pass"])));
	

	$salt='@.!%&#<(@#';
	$password = htmlentities($conn->real_escape_string(trim(md5($salt.$pass))));
$qry="select * from user where teamname='$tname' and password='$password'";
$result = $conn->query($qry);
if ($result->num_rows == 1) {
	$_SESSION["u1"]=$tname;
	$_SESSION["p1"]=$pass;
	
	
	$_SESSION["admin"]=false;


	if($tname=='admin' || $tname=='ADMIN')
		{
			$e=2;
			$_SESSION["admin"]=true;
		}	
	else
		{$e=1;
		$_SESSION['time']=time(); 
		while($row = $result->fetch_assoc()) {
		$_SESSION['timeleft']=$row['time'];
        
    			}
		}
	echo $e;
}
else
{
	echo "User Doesn't Exist.";
} 

?>