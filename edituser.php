<?php
include 'connect.php';
echo $teamname=$_GET['teamname'];
echo $group=$_GET['group'];

if($teamname!='admin')
{

				// $sql = "UPDTAE user FROM questions where type='v'";
				// $result = $conn->query($sql);

				$qry="UPDATE user SET groupname='$group' WHERE teamname='$teamname' ";
				$result = $conn->query($qry);
				if($result)
					echo "AS";
				else
					echo mysqli_error($conn);
}

?>