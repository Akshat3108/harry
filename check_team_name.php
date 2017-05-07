<?php
 // $dbhost = 'localhost';
 //    $dbuser = 'root';
 //    $dbpass = '';
 //    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
 //    if(! $conn )
 //    {
 //      die('Could not connect: ' . mysql_error());
 //    }
include "connect.php";
   
$teamname=$conn->real_escape_string(trim($_POST['teaminput']));

$query="SELECT * FROM user WHERE teamname='$teamname'";
$results=$conn->query($query);
//echo mysqli_error();
$numrows=mysqli_num_rows($results);
if(strlen($teamname)>3);
{
	if($numrows!=0)
	echo "<div style='color:red;'>Team Name already exists</div>";
}
?>