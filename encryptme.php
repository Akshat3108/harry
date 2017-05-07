<?php include("connect.php"); 
$teamname=$_GET['team'];
session_start();

if($_SESSION["u1"]!='admin')
{
	header('Location:home.php');
}
?>

<form action="#" method="POST">
	Teamname: <?php echo $teamname; ?>
	<br>
	New Password:<input type="text" name="pass"><br>
	<input type="submit" name="sub" value='Update Password'>

</form>

<?php
// if($_SESSION['u1']!='admin')
// 	header("Location:home.php");
	if(isset($_POST['sub'])){
		//$teamname=$_POST['teamname'];
		$salt='@.!%&#<(@#';

		$pass=$_POST['pass'];
		$pass2=$salt.$pass;
		$hash=md5($pass2);
		if($teamname!='admin'){
		$qry="UPDATE user SET password='$hash' WHERE teamname='$teamname'";
		$result = $conn->query($qry);
		if($result){
			echo "Password successfully updated <br><br>";
			echo "teamname = ".$teamname;
			echo "<br>password = ".$pass;
		}
	}
		

	}