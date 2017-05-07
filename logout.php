<?php
session_start();
include("connect.php");
if(isset($_SESSION['time'])){
	$timeused=time()-$_SESSION['time'];
	$remaining=$_SESSION['timeleft']-$timeused;


$query="UPDATE user SET time='$remaining' where teamname='".$_SESSION['u1']."'";
 $result = $conn->query($query);
echo mysqli_error($conn);


 }

session_destroy();
header("location:index.php");


?>