<?php
session_start();
if((isset($_SESSION["u1"])) && (isset($_SESSION["p1"])))
{
	$temp=$_GET["temp"];
	$i=$_GET["i"];
	include("connect.php");
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {   
          $id= $row["qid"];
          $arr[$id]=$row["correct"]	;
	}
}

$position=0;
$total=0;
$teamname=$_SESSION["u1"];
$tickedChoices = explode(",", $temp);

foreach ($tickedChoices as $key) {
	if($key==null)
	{
		$position++;
	}
	else {
		if($arr[$position]==$key)
			$total++;
		$position++;	
	}
}
if($i==1)
	$sql1 = "UPDATE user SET tagline='$total' WHERE teamname='$teamname'";
if($i==2)
	$sql1 = "UPDATE user SET spells='$total' WHERE teamname='$teamname'";
if($i==3)
	$sql1 = "UPDATE user SET pictures='$total' WHERE teamname='$teamname'";
if($i==4)
	$sql1 = "UPDATE user SET videos='$total' WHERE teamname='$teamname'";
if($i==5)
	$sql1 = "UPDATE user SET bonus='$total' WHERE teamname='$teamname'";
$result1=$conn->query($sql1);

echo $total;
//echo $i;
}
?>