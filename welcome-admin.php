<?php
if(!(isset($_SESSION))) session_start();
if((isset($_SESSION["u1"])) && (isset($_SESSION["p1"])) && (isset($_SESSION["admin"])) && $_SESSION["admin"] == true)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
<style>
td, tr{
	border-bottom: solid 1px black;
}

</style>
</head>
<body style="background: none; font-family: 'Times New Roman' !important;">
<?php include('header.php') ?>
<?php include('connect.php') ?>
<div class="nav-content">

</div>
  
</nav></div>


<div class="row">
<br><br><br><br><br>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Add Question</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Remove People</a></li>
        <li class="tab col s3"><a href="#test3">Remove Question</a></li>
      </ul>
    </div>
    <div class='container'>
    	<form action='addquestion.php' name='adminform'>
	    <div id="test1" class="col s12 white">
	    	<input type='text' name='question' class='col s12' placeholder='Question'>
	    	<input type='text' name='a' class='col s12' placeholder='Option A'>
	    	<input type='text' name='b' class='col s12' placeholder='Option B'>
	    	<input type='text' name='c' class='col s12' placeholder='Option C'>
	    	<input type='text' name='d' class='col s12' placeholder='Option D'>
	    	<select class='browser-default' name='type' onchange='picvid()'>
	    		<option value='t' id='x'>Tagline</option>
	    		<option value='s' id='x'>Spells</option>
	    		<option value='p' id='pic'>pictures</option>
	    		<option value='v' id='vid'>videos</option>
	    		<option value='b' id='x'>bonus</option>
	    	</select>
	    	<input type='text' name='source-img' class='col s12' id='pic-text' placeholder='Type source of the image'>
	    	<input type='text' name='source-vid' class='col s12' id='vid-text' placeholder='Type source of the video'>
	    	<input type='text' name='source-vid' class='col s12' id='bon-text' placeholder='Type source of the bonus'>
	    	<label><br><br>Correct Answer</label>
	    	<select class='browser-default' name='correct'>
	    		<option value='a'>a</option>
	    		<option value='b'>b</option>
	    		<option value='c'>c</option>
	    		<option value='d'>d</option>
	    	</select>
	    	

	    	<br><br><input type='submit' value='Add' class='btn center col s12 blue'><br><br>
	    </div>
	    </form>
	    <div id="test2" class="col s12 white">
	    	<table>
	    	<tr>
	    		<td> S.No.	</td>
	    		<td> Team Name	</td>
	    		<td> Team Leader	</td>
	    		
	    		<td> Remaining Time	</td>
	    		<td> Groupname	</td>
	    		<td> emails	</td>
	    		<td> Contacts</td>
	    		<td></td>
	    		<td> Score</td>
	    		<td> Update Groupname</td>
	    		<td> Update Password</td>
	    		<td> Delete/ Edit	</td>
	    	</tr>

	    	<?php
	    		$qry="select * from user";
				$result = $conn->query($qry);
				$i=1;

				 while($row = $result->fetch_assoc()) {
				 	$teamname=$row['teamname'];
				 	
				 	
				 	$total= $row['tagline']+$row['videos']+$row['spells']+$row['pictures']+$row['bonus'];
				 	echo "<tr>";
				 		echo "<td>".$i  ."</td>";
				 		echo "<td>".$row['teamname']  ."</td>";
				 		echo "<td>".$row['leader']. " <br>".$row['member1'] ." <br>". $row['member2'] ."</td>";
				 		
				 		echo "<td>".$row['time']  ."</td>";
				 		echo "<td>".$row['groupname']  ."</td>";
				 		echo "<td>".$row['mailid3']. " <br>".$row['mailid1'] ." <br>". $row['mailid2'] ."</td>";
				 		echo "<td>".$row['contact3']. " <br>".$row['contact1'] ." <br>". $row['contact2'] ."</td>";
				 		echo "<td></td>";
				 		echo "<td>".$total  ."</td>";
				 		echo "<td><input type='text'  id='".$teamname."'></td>";
				 	 	if($teamname!='admin'){
				 	 	echo "<td>"; ?>
				 		<a target="_blank" href="encryptme.php?team=<?php echo $teamname ?> ">
				 		<button>Update Pass</button>
				 	 	</a>
				 	 	<?php echo "</td>";
				 	}
				 	 else
				 	 	echo "<td> </td>";
				 	 	echo "<td>";
				  	?>
				 	 	 <input type='button' value='delete' onclick="deleteuser('<?php echo $teamname ?>')">
				 	 	 <input  type='button' value='edit' onclick="edituser('<?php echo $teamname ?>')">
				 	 	 <?php
				 	 	 echo" </td>";

				 	echo "</tr>";
				 	$i++;
				 }
	    	?>
	    		

	    	</tr>
	    	</table>
	    	
	    </div>
	    <div id="test3" class="col s12 white">
	    	<table>
	    	<tr>
	    		<td> S.No.	</td>
	    		<td> Question id	</td>
	    		<td> Question	</td>
	    		
	    		<td> Delete	</td>
	    	</tr>
	    	<?php
	    		$qry="select * from questions";
				$result = $conn->query($qry);
				$i=1;
				 while($row = $result->fetch_assoc()) {
				 	$qid=$row['qid'];
				 	echo "<tr>";
				 		echo "<td>".$i  ."</td>";
				 		echo "<td>".$qid  ."</td>";
				 		echo "<td>".$row['question']  ."</td>";
				 		// echo "<td>".$row['leader']. " <br>".$row['member1'] ." <br>". $row['member2'] ."</td>";
				 		// echo "<td>".$row['time']  ."</td>";
				 		// echo "<td>".$row['groupname']  ."</td>";
				 		// echo "<td>".$row['mailid3']. " <br>".$row['mailid1'] ." <br>". $row['mailid2'] ."</td>";
				 		// echo "<td><input type='text'  id='".$teamname."'></td>";
				 		echo "<td>";
				 		?>
				 		 <input type='button' value='delete' onclick="deletequestion('<?php echo $qid ?>')">
				 		
				 		 <?php
				 		 echo" </td>";

				 	echo "</tr>";
				 	$i++;
				 }
	    	?>
	    	</table>
	    </div>
  	</div>
  </div>
 

</div>

</body>
<?php include('scripts.php'); ?>
<script>
	$(document).ready(function(){
		$('#pic-text').hide();
		$('#vid-text').hide();
	});

	function picvid(){
		var type= document.adminform.type.value;
		if(type=='v'){
			document.getElementById('pic-text').style.display="none";
			document.getElementById('vid-text').style.display="block";
		}
		else if(type=='p'){
			document.getElementById('vid-text').style.display="none";
			document.getElementById('pic-text').style.display="block";
		}
		else{
			document.getElementById('vid-text').style.display="none";
			document.getElementById('pic-text').style.display="none";
		}
	}

	function deleteuser(teamname) {
		
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	if(teamname != 'admin')
            		alert("Successfullly Deleted");
            	else
            		alert("Cannot Delete Admin");
                location.reload();
            }
        };
        xmlhttp.open("GET", "deleteuser.php?teamname="+teamname , true);
        xmlhttp.send();



	}

	function edituser(teamname) {
		
		var xmlhttp = new XMLHttpRequest();
		var group= document.getElementById(teamname).value;
		//alert(group);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

            	//document.getElementById("demoo").innerHTML = this.responseText;
            	if(teamname != 'admin')
            		alert("Successfullly edit");
            	else
            		alert("Cannot edit Admin");
            	
                location.reload();
            }
        };
        
        xmlhttp.open("GET", "edituser.php?teamname="+teamname+"&group="+group , true);
        xmlhttp.send();

        

	}

	function deletequestion(qid) {
		
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	alert("Successfullly Deleted"+qid);
                //window.location.href='welcome-admin.php#test3'
                location.reload();
            }
        };
        xmlhttp.open("GET", "deletequestion.php?qid="+qid , true);
        xmlhttp.send();



	}
</script>
</html>

<?php
}
else if((isset($_SESSION["u1"])) && (isset($_SESSION["p1"])) && (isset($_SESSION["admin"])) && $_SESSION["admin"] == false)
{  
	header("location:welcome.php"); 
}
else
{  
	header("location:login.php"); 
}
?>