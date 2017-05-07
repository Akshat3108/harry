	<link rel="shortcut icon" type="text/css" href="img/broom-hp.png">
<?php
if(!(isset($_SESSION))) session_start();
if(!(isset($_SESSION["u1"])) && !(isset($_SESSION["p1"])) && !(isset($_SESSION["admin"])))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</script>
<style type="text/css">
body
    {
	background: url("img/bg_mobile.jpg");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;

}
@media(min-width: 480px) {
    body
    {
	background: url("img/logoh.jpg");
	background-position: fixed;
	background-repeat: no-repeat;
	background-size: cover;

	}
}
.my-input{
	border: solid 1px transparent;
}
.input-f input[type=text].my-input:focus, .input-f input[type=password].my-input:focus {
     border-bottom: none;
     box-shadow: none;

   }
 .my-label{
 	color: black;
 	font-size: 20px;
 	max-width: 30%;
 	/*float: left;*/
 	text-align: left;
 }  
 .margin-left{
 	 margin-left:10%;
 }
.login-button{
	background-color: red;
	margin-left:10%; 
	background-color:transparent;
	border: none;
	width: 80%;
	margin-top: -50px;
	margin-bottom: 30px;
	z-index: -1;
}
.login-button:focus{
	background-color:transparent;
}

.vintage{
  background: url('img/vintage22.png');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

</style>
</head>
<body>
<?php include('header.php'); ?>
</nav></div>
<br>	<a class='white-text btn transparent' href='index.php'>Go Back</a>

<div class="container" style='font-weight:bold;'>
	<div class="" >
	<div class="white-text vintage harrypotter" >	
		<div>
			<br>
			<h4 class="center black-text"><BR><b>Enter The Triwizard <BR>Tournament</b> </h4>
			<br>
			<div class="input-f" style="width:80%; margin-left:10%;">
				<label class="my-label margin-left" style="max-width:30%;">Team Name</label>
				<br>
				<input type="text" id="teamname" class="my-input margin-left" style="border: solid 1px black; width:80%; margin-left:10%; padding-left:12px;">
			</div>
			<div class="input-f" style="width:80%; margin-left:10%;">
				<label class="my-label margin-left" style="max-width:30%;">Password</label>
				<br>
				<input type="password" id="password" class="my-input margin-left" style="border: solid 1px black;z-index:99; width:80%; margin-left:10%; padding-left:12px;">
			</div>
			<div style="width:80%; margin-left:10%;"  id="click-it">
					<div onclick="loginF()" style="width:80%; margin-left:10%; cursor:pointer; z-index:0;" class='hide-on-med-and-down'>
						<span><img src="img/broom-b.png" style=" height:115px; position:relative; transform:rotate(5deg);">
						</span>
						<span style="position:relative; top:-55px; left:-30px;">
						<font class="black-text text-darken-4" size="4">Click here to Begin the fight with &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; The Hungarian Horntail!</font></span>
					</div>
					<div onclick="loginF()" style="width:80%; margin-left:10%; cursor:pointer; z-index:0;" class='hide-on-large-only'>
						<span><img src="img/broom-b.png" style=" height:115px; position:relative; transform:rotate(5deg);">
						</span>
						<span style="position:relative; top:-55px; left:-30px;">
						<font class="black-text text-darken-4" size="4">Click &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;here to&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;Begin the fight with The Hungarian Horntail!</font></span>
					</div>
			</div>

			<br><bR>
		</div>
	</div>
	</div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<?php include('scripts.php'); ?>

<script type="text/javascript">		
function loginF(){
	var teamname=document.getElementById('teamname').value;
	var password=document.getElementById('password').value;
	//alert(teamname+" "+password);
	if(teamname=="" && password==""){
		Materialize.toast("<span class='harrypotter red-text'>Type Something you Moron!</span>", 5000, "yellow");
	}
	else if(teamname==""){
		Materialize.toast("<span class='harrypotter'>How can you forget your own team name??</span>", 5000, "blue");
	}
	else if(password==""){
		Materialize.toast("<span class='harrypotter  grey-text text-lighten-2'>Have you ever forgotten the password to your own dormitory? Type the correct password Moron!</span>", 8000, "green");
	}
	else{
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
			     var $error = this.responseText;
			     if($error=='1')
			     	window.location.replace("welcome.php");
			     else if($error=='2')
			     	window.location.replace("welcome-admin.php");
			     else 
			    	Materialize.toast($error, 8000, "red");
		    }
		  };
		  xhttp.open("GET", "login_process.php?tname="+teamname+"&pass="+password, true);
		  xhttp.send();
	}

}
</script>
</html>
<?php
}
else if($_SESSION["admin"] == false ){
  header("location:welcome.php"); 
}
else if($_SESSION["admin"] == true ){
  header("location:welcome-admin.php"); 
}
?>