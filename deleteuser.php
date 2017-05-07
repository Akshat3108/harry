<?php
include 'connect.php';
$teamname=$_GET['teamname'];

if($teamname!='admin')
{

				$qry="DELETE FROM user WHERE teamname='$teamname' ";
				$result = $conn->query($qry);
}

?>