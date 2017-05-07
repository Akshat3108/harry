<?php
session_start();	
	call_user_func(function (){
			//$login_session_duration=10000;
			$current_time = time(); 
			include("connect.php");

		
	if(isset($_SESSION['time'])){
		if(((time() - $_SESSION['time']) > $_SESSION['timeleft'])){ 
				echo "1";
		}
		else
		{

			$timeused=time()-$_SESSION['time'];
			$remaining=$_SESSION['timeleft']-$timeused;


				$query="UPDATE user SET time='$remaining' where teamname='".$_SESSION['u1']."'";
				 $result = $conn->query($query);
				echo mysqli_error($conn);



 
		}
		
		
		}
	else 
			echo "0";
	
	});

	
?>