<?php
include 'connect.php';
$qid=$_GET['qid'];

if($teamname!='admin')
{

				$qry="DELETE FROM questions WHERE qid='$qid' ";
				$result = $conn->query($qry);
}

?>