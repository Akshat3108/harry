<?php
include('connect.php');

$q=$_GET["question"];
$a=$_GET["a"];
$b=$_GET["b"];
$c=$_GET["c"];
$d=$_GET["d"];
$type=$_GET["type"];
$correct=$_GET["correct"];
$img=$_GET["source-img"];
$vid=$_GET["source-vid"];
if ($type=='pictures') {
	$sql = "INSERT INTO questions (type, question, a, b, c, d, correct, source) VALUES ('$type', '$q', '$a', '$b', '$c', '$d', '$correct', '$img')";
}
else if ($type=='videos') {
	$sql = "INSERT INTO questions (type, question, a, b, c, d, correct, source) VALUES ('$type', '$q', '$a', '$b', '$c', '$d', '$correct', '$vid')";
}
else{
	$sql = "INSERT INTO questions (type, question, a, b, c, d, correct) VALUES ('$type', '$q', '$a', '$b', '$c', '$d', '$correct')";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>