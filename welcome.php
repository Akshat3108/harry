	<link rel="shortcut icon" type="text/css" href="img/broom-hp.png">


<?php

ob_start();
if(!(isset($_SESSION))) session_start();
if((isset($_SESSION["u1"])) && (isset($_SESSION["p1"])) && (isset($_SESSION["admin"])) && $_SESSION["admin"] == false)
{
	include("connect.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
<style>
#toast-container {
  top: auto !important;
  right: auto !important;
  bottom: 10%;
  left:27%;
}
.bg-modal{
	background:url('img/vintage22.png');
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
}

	#body{
		position: fixed;
		z-index: -999;
		height: 100%;
		width: 100%;
	}

	@keyframes opac{
			from{opacity:0;}
			to{opacity: 1;}
	}

.btn{
	border: solid 1px #ddd !important ;
}
body{
	/*background: url("img/greathall3.jpg");
	background-size: cover;
	 background-position: center; 
	background-repeat: no-repeat;*/
	text-shadow: 2px 2px 2px #000,2px -2px 2px #000,-2px 2px 2px #000,-2px -2px 12px #000;
	font-weight: bold;
	color:white;
}
.cursor, a:hover {
	/* cursor: url(http://cur.cursors-4u.net/user/use-1/use160.cur), progress !important; */
	/* cursor:url(http://media.tumblr.com/d966369b267e70194d0a4ac40f6df63b/tumblr_inline_ms5iz0TtmM1r6qyth.png), auto !important; */
}
.active{

	transition: all 1s linear !important;
}
.question{
	padding-top: 10px !important;
	padding-bottom: 10px !important;
	margin-bottom: 10px;
	color: white;
	text-align: center;
	box-shadow: 1px 1px 3px #222,-1px -1px 3px #222,-1px 1px 6px #222,1px -1px 5px #222;
}
div#taglines div{
	/*height:inherit;*/
}
#taglines, #spells, #pictures, #videos, #bonuses{
    background: url("img/greathall.jpg") ;
	background-size: cover;
	/* background-position: center; */
	background-repeat: no-repeat;

}
p label{
	color: white !important;
}
</style>
</head>
<body class="row body">
<img id="body" class="animated fadeIn">

<?php include('header.php') ?>
	<div class="nav-content">
	      <ul id="tabs-swipe-demo" class="tabs black center offset-s1" style='font-size:10px;' >
		    <li id="tagline" class="tab col offset-s1 s2"><a class="white-text active" >Normal Questions</a></li>
		    <li id="spell" class="tab col s2 "><a class="white-text" >Spells & Riddles</a></li>
		    <li id="picture" class="tab col s2 "><a class="white-text" >Picture Related</a></li>
		    <li id="video" class="tab col s2 "><a class="white-text" >Video Related</a></li>
		    <li id="bonus"  class="tab col s2 "><a class="white-text" >Bonus Questions!</a></li>
		  </ul>
		 <!--  		<div class='red' id='demo'>Hello</div> -->

			
	</div>
  
</nav></div>
<!-- END NAV -->





<!-- Taglines -->


<div id='taglines' class="cursor col s10 offset-s1 " >
		<br><br><br><br>
	<div class='col s12'>
		<?php
		$qno=1;
		$sql = "SELECT * FROM questions where type='t'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {    ?>
			    <div class='col s12 l2 container'>
					<a href='<?php echo  "#tagline".$row['qid']; ?>'>
						<div class='question '>
							Question <?php echo $qno;
							$qno++; ?>
						</div>
					</a>
				</div>
		    <?php
			}
		} ?> 
	</div>
		<form action="#"> 
				<?php
				$qno=1; 
				$sql1 = "SELECT * FROM questions where type='t'";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) {
				    while($row1 = $result1->fetch_assoc()) {    ?>
					    <div class='col s12 left-align'>
					    <br><br>
						<?php $qid=$row1['qid']; 
						?>
						<a name='<?php echo "tagline".$qid?>'></a>		
						<div class='col s12'> Q <?php echo $qno; $qno++; ?> : <?php echo $row1['question']; ?> </div>  
							<div class='col s12 l12'>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',1)">'; ?>
								      <input value='a' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'a';?>" />
								      <label for="<?php echo $row1['qid'].'a';?>"> <?php echo $row1['a'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',1)">'; ?>
								      <input value='b' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'b';?>" />
								      <label for="<?php echo $row1['qid'].'b';?>"> <?php echo $row1['b'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',1)">'; ?>
								      <input value='c' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'c';?>" />
								      <label for="<?php echo $row1['qid'].'c';?>"> <?php echo $row1['c'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',1)">'; ?>
								      <input value='d' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'d';?>" />
								      <label for="<?php echo $row1['qid'].'d';?>"> <?php echo $row1['d'];?> </label>
							    	</p>
					    	</div>
						</div>

				    <?php
					}
				} ?> 

				<div class='col s12 center align-center center-align'>
					<button type="button" class="btn transparent z-depth-5 col s12 hoverable" onclick="submitFinal('1')">Submit Final</button>
				</div>	<form>  
</div>



<!-- Spells -->



<div id='spells' class="cursor col s10 offset-s1 " >
		<br><br><br><br>
	<div class='col s12'>
		<?php
		$qno=1;
		$sql = "SELECT * FROM questions where type='s'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {    ?>
			    <div class='col s12 l2 container'>
					<a href='<?php echo  "#spells".$row['qid']; ?>'>
						<div class='question'>
							Question <?php echo $qno;
							$qno++; ?>		
						</div>
					</a>
				</div>
		    <?php
			}
		} ?> 

	</div>
		<form action="#"> 
				<?php 
				$qno=1;
				$sql1 = "SELECT * FROM questions where type='s'";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) {
				    while($row1 = $result1->fetch_assoc()) {    ?>
					    <div class='col s12 left-align'>
								<br><br>
								<?php $qid=$row1['qid']; ?>
						<a name='<?php echo "spells".$qid?>'></a>		
						<div class='col s12'> Q <?php echo $qno; $qno++; ?> : <?php echo $row1['question']; ?> </div>  
							<div class='col s12'>
								<?php $radioname=$row1['qid']; ?>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',2)">'; ?>
								      <input value='a' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'a';?>" />
								      <label for="<?php echo $row1['qid'].'a';?>"> <?php echo $row1['a'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',2)">'; ?>
								      <input value='b' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'b';?>" />
								      <label for="<?php echo $row1['qid'].'b';?>"> <?php echo $row1['b'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',2)">'; ?>
								      <input value='c' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'c';?>" />
								      <label for="<?php echo $row1['qid'].'c';?>"> <?php echo $row1['c'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',2)">'; ?>
								      <input value='d' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'d';?>" />
								      <label for="<?php echo $row1['qid'].'d';?>"> <?php echo $row1['d'];?> </label>
							    	</p>
					    	</div>
						</div>

				    <?php
					}
				} ?> 

				<div class='col s12 center align-center center-align'>
					<button type="button" class="btn transparent z-depth-5 col s12 hoverable" onclick="submitFinal('2')">Submit Final</button>
				</div>	<form>
</div>




<!-- Pictures -->


<div id='pictures' class="cursor col s10 offset-s1 " >
		<br><br><br><br>
	<div class='col s12'>
		<?php
		$qno=1;
		$sql = "SELECT * FROM questions where type='p'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {    ?>
			    <div class='col s12 l2 container'>
					<a href='<?php echo  "#pictures".$row['qid']; ?>'>
						<div class='question'>
							Question <?php echo $qno;
							$qno++; ?>		
						</div>
					</a>
				</div>
		    <?php
			}
		} ?> 

	</div>
		<form action="#">
				<h4 class='center red-text'>you can click on the images to zoom...</h4>
				<?php 
				$qno=1;
				$sql1 = "SELECT * FROM questions where type='p'";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) {
				    while($row1 = $result1->fetch_assoc()) {    ?>
					    <div class='col s12 left-align'>
								<br><br>
								<?php $qid=$row1['qid']; ?>
						<a name='<?php echo "pictures".$qid?>'></a>		
						<div class='col s12'> Q <?php echo $qno; $qno++; ?> : <?php echo $row1['question']; ?> </div>  
							<div class='col s12 l3'>
								    <img class="materialboxed" width="150" style='background:white;' src="<?php echo $row1['source'];?>">
							</div>


							<div class='col s12 l9'>
								<?php $radioname=$row1['qid']; ?>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',3)">'; ?>
								      <input value='a' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'a';?>" />
								      <label for="<?php echo $row1['qid'].'a';?>"> <?php echo $row1['a'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',3)">'; ?>
								      <input value='b' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'b';?>" />
								      <label for="<?php echo $row1['qid'].'b';?>"> <?php echo $row1['b'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',3)">'; ?>
								      <input value='c' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'c';?>" />
								      <label for="<?php echo $row1['qid'].'c';?>"> <?php echo $row1['c'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',3)">'; ?>
								      <input value='d' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'d';?>" />
								      <label for="<?php echo $row1['qid'].'d';?>"> <?php echo $row1['d'];?> </label>
							    	</p>
					    	</div>
						</div>

				    <?php
					}
				} ?> 

				<div class='col s12 center align-center center-align'>
					<button type="button" class="btn transparent z-depth-5 col s12 hoverable" onclick="submitFinal('3')">Submit Final</button>
				</div>	<form>
</div>




<!-- Videos -->


<div id='videos' class="cursor col s10 offset-s1 " >
		<br><br><br><br>
	<div class='col s12'>
		<?php
		$qno=1;
		$sql = "SELECT * FROM questions where type='v'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {    ?>
			    <div class='col s12 l2 container'>
					<a href='<?php echo  "#".$row['qid']; ?>'>
						<div class='question'>
							Question <?php echo $qno;
							$qno++; ?>		
						</div>
					</a>
				</div>
		    <?php
			}
		} ?> 

	</div>
		<!-- <form action="#"> -->
				<?php 
				$previous=null;
				$qno=1;
				$sql1 = "SELECT * FROM questions where type='v'";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) {
				    while($row1 = $result1->fetch_assoc()) {    ?>
					    <div class='col s12 left-align'>
								<br><br>
								<?php $qid=$row1['qid']; ?>
						<a name='<?php echo $qid?>'></a>		
							<?php 
							if($row1["source"]=="img/videos/video01.mp4" && $row1["source"]!= $previous)
							{	
							?>
								<h3 class='center'>Did you put your name in the goblet of fire??</h3>
							      <div class='col l8 offset-l2 s12'>
							      	<video class="responsive-video" controls>
								    	<source src="img/videos/video01.mp4" type="video/mp4">
								  	</video>
								  	<br><br>
								  </div>

					
							<?php 
							}
							?>
							<?php 
							if($row1["source"]=="img/videos/video02.mp4" && $row1["source"]!= $previous)
							{	
							?>
							      <h3 class='center'>We can not speak above the ground...</h3>
							      <div class='col l8 offset-l2 s12'>
							      	<video class="responsive-video" controls>
								    	<source src="img/videos/video02.mp4" type="video/mp4">
								  	</video>
								  	<br><br>
								  </div>

					
							<?php 
							}
							?>
							<?php 
							if($row1["source"]=="img/videos/video03.mp4" && $row1["source"]!= $previous)
							{	
							?>
							      <h3 class='center'>Expelliarmus!<br>Avada Kedavra!</h3>
							      <div class='col l8 offset-l2 s12'>
							      	<video class="responsive-video" controls>
								    	<source src="img/videos/video03.mp4" type="video/mp4">
								  	</video>
								  	<br><br>
								  </div>

					
							<?php 
							}
							?>
							<div class='col s12'>
								<div class='col s12'> Q <?php echo $qno; $qno++; ?> : <?php echo $row1['question']; ?> </div> <br><bR>  
							</div>
							<div class='col s12'>
								<?php $radioname=$row1['qid']; ?>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',4)">'; ?>
								      <input value='a' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'a';?>" />
								      <label for="<?php echo $row1['qid'].'a';?>"> <?php echo $row1['a'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',4)">'; ?>
								      <input value='b' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'b';?>" />
								      <label for="<?php echo $row1['qid'].'b';?>"> <?php echo $row1['b'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',4)">'; ?>
								      <input value='c' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'c';?>" />
								      <label for="<?php echo $row1['qid'].'c';?>"> <?php echo $row1['c'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',4)">'; ?>
								      <input value='d' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'d';?>" />
								      <label for="<?php echo $row1['qid'].'d';?>"> <?php echo $row1['d'];?> </label>
							    	</p>
					    	</div>
						</div>

				    <?php
					$previous=$row1["source"];
					}
				} ?> 

				<div class='col s12 center align-center center-align'>
					<button type="button" class="btn transparent z-depth-5 col s12 hoverable" onclick="submitFinal('4')">Submit Final</button>
				</div>	<form> 
</div>




<!-- Bonuses -->


<div id='bonuses' class="cursor col s10 offset-s1 " >
		<br><br><br><br>
	<div class='col s12'>
		<?php
		$qno=1;
		$sql = "SELECT * FROM questions where type='b'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {    ?>
			    <div class='col s12 l2 container'>
					<a href='<?php echo  "#".$row['qid']; ?>'>
						<div class='question'>
							Question <?php echo $qno;
							$qno++; ?>		
						</div>
					</a>
				</div>
		    <?php
			}
		} ?> 

	</div>
		<!-- <form action="#"> -->
				<?php 
				$qno=1;
				$sql1 = "SELECT * FROM questions where type='b'";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) {
					if($row1['source']==''){ ?>
							<div class='col s12'>
								<h3 class='red-text center'>Identify the companies with their taglines ( Q1 to Q6 ) --></h3>
							</div>
					<?php 
					}
				    while($row1 = $result1->fetch_assoc()) {    ?>
					    <div class='col s12 left-align'>
								<br><br>
								<?php $qid=$row1['qid']; ?>
						<a name='<?php echo $qid?>'></a>		
						<div class='col s12'> Q <?php echo $qno; $qno++; ?> : <?php echo $row1['question']; ?> </div>  
							<?php if($row1['source']!=''){ ?>
							<div class='col s12 l3'>
								    <img class="materialboxed" width="150" style='background:white;' src="<?php echo $row1['source'];?>">
							</div>
							<?php } ?>
							<div class='col s12 l9'>
								<?php $radioname=$row1['qid']; ?>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',5)">'; ?>
								      <input value='a' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'a';?>" />
								      <label for="<?php echo $row1['qid'].'a';?>"> <?php echo $row1['a'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',5)">'; ?>
								      <input value='b' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'b';?>" />
								      <label for="<?php echo $row1['qid'].'b';?>"> <?php echo $row1['b'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',5)">'; ?>
								      <input value='c' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'c';?>" />
								      <label for="<?php echo $row1['qid'].'c';?>"> <?php echo $row1['c'];?> </label>
							    	</p>
									<?php echo '<p class="col s12 l6" onchange="toasting(); calculate(\''.$row1["qid"].'\',5)">'; ?>
								      <input value='d' name="<?php echo $row1['qid'];?>" type="radio" id="<?php echo $row1['qid'].'d';?>" />
								      <label for="<?php echo $row1['qid'].'d';?>"> <?php echo $row1['d'];?> </label>
							    	</p>
					    	</div>
						</div>

				    <?php
					}
				} ?> 
				<div class='col s12 center align-center center-align'>
					<button type="button" class="btn transparent z-depth-5 col s12 hoverable" onclick="submitFinal('5')">Submit Final</button>
				</div>
	<form>
</div>

 <!-- Modal Structure -->
  <div id="modal1" class="modal bg-modal white-text center transparent" style='height:600px;'>
    <div class="modal-content transparent" >
    <br><br><br>
      <h4><u>The Triwizard Tournament</u></h4>
      <h5>No negative marking</h5>
      <p>Instructions are simple : Each of the five sections have 12 questions, each question carries 3 marks, and time-based, so why are you wasting time reading these instructions...?</p>
      <p>Click on one of the five Tabs to begin...! LET the first task begin</p>
    </div>
    <br><br>
    <div class="modal-footer transparent">
      <a href="#!" class="btn modal-action modal-close waves-effect waves-blue transparent">Close and Begin</a>
    </div>
  </div>



</body>


<?php include('scripts.php'); ?>

<script>
var clk=0;
$(document).ready(function(){
  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '8%', // Starting top style attribute
      endingTop: '20%' // Ending top style attribute
    }
  );	
  	 	$('#modal1').modal('open');
  	 //   	$("a").on('click', function(event) {

		  //   // Make sure this.hash has a value before overriding default behavior
		  //   if (this.hash !== "") {
		  //     // Prevent default anchor click behavior
		  //     event.preventDefault();

		  //     // Store hash
		  //     var hash = this.hash;

		  //     // Using jQuery's animate() method to add smooth page scroll
		  //     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  //     $('html, body').animate({
		  //       scrollTop: $(hash).offset().top
		  //     }, 800, function(){
		   
		  //       // Add hash (#) to URL when done scrolling (default click behavior)
		  //       window.location.hash = hash;
		  //     });
		  //   } // End if
		  // });
	$("#taglines").hide();
    $("#videos").hide();
    $("#pictures").hide();
    $("#spells").hide();
    $("#bonuses").hide();
    $("#tagline").css("color","black");
	$('ul.tabs').tabs();
    $('ul.tabs').tabs('select_tab', 'tab_id');
    $('.materialboxed').materialbox();

    $('#tagline').click(function(){
    	$("#taglines").show();
    	$("#videos").hide();
    	$("#pictures").hide();
    	$("#spells").hide();
    	$("#bonuses").hide();
    });
    $('#spell').click(function(){
    	$("#taglines").hide();
    	$("#videos").hide();
    	$("#pictures").hide();
    	$("#spells").show();
    	$("#bonuses").hide();
    });
    $('#picture').click(function(){
    	$("#taglines").hide();
    	$("#videos").hide();
    	$("#pictures").show();
    	$("#spells").hide();
    	$("#bonuses").hide();
    });
    $('#video').click(function(){
    	$("#taglines").hide();
    	$("#videos").show();
    	$("#pictures").hide();
    	$("#spells").hide();
    	$("#bonuses").hide();
    });
    $('#bonus').click(function(){
    	$("#taglines").hide();
    	$("#videos").hide();
    	$("#pictures").hide();
    	$("#spells").hide();
    	$("#bonuses").show();
    });



});
var tempTag = [];
var tempSpell = [];
var tempPic = [];
var tempVid = [];
var tempBonus = [];

function calculate(radioname, id){
	var val=$('input[name='+radioname+']:checked').val();
	if(id=='1')
		tempTag[radioname]=val;
	if(id=='2')
		tempSpell[radioname]=val;
	if(id=='3')
		tempPic[radioname]=val;
	if(id=='4')
		tempVid[radioname]=val;
	if(id=='5')
		tempBonus[radioname]=val;
}
function submitFinal(i){
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var totalTotal = this.responseText;
                if(totalTotal>=0)
                	Materialize.toast("<span class='harrypotter'> answers submitted. You can submit again if not so sure!</span>", 8000, 'red');
            }
        };
        if(i=='1')
        	xmlhttp.open("GET", "checking_process.php?temp="+tempTag+"&i="+i, true);
        if(i=='2')
        	xmlhttp.open("GET", "checking_process.php?temp="+tempSpell+"&i="+i, true);
        if(i=='3')
        	xmlhttp.open("GET", "checking_process.php?temp="+tempPic+"&i="+i, true);
        if(i=='4')
        	xmlhttp.open("GET", "checking_process.php?temp="+tempVid+"&i="+i, true);
        if(i=='5')
        	xmlhttp.open("GET", "checking_process.php?temp="+tempBonus+"&i="+i, true);
        xmlhttp.send();
}
function toasting(){
    	clk++;
    	if(clk==6)
			Materialize.toast("<span class='harrypotter'> Harry put his hand into the silk bag and pulled out the Hungarian Horntail </span>", 8000, 'blue');
    	else if(clk==14)
			Materialize.toast("<span class='harrypotter'>The Champion is allowed a wand!!!</span>", 8000, 'blue');
    	else if(clk==20)
			Materialize.toast("<span class='harrypotter'>Use your Wand, Harry! Use Your Wand!!</span>", 8000, 'blue');
    	else if(clk==26)
			Materialize.toast("<span class='harrypotter'> '' Accio Firebolt! '' </span>", 8000, 'blue');
    	else if(clk==30)
			Materialize.toast("<span class='harrypotter'> He swung his leg over the broom and kicked off from the ground...</span>", 5000, 'blue');
    	else if(clk==36)
			Materialize.toast("<span class='harrypotter'> 'Great Scott, he can fly!' yelled Bagman !!</span>", 8000, 'blue');
    	else if(clk==42)
			Materialize.toast("<span class='harrypotter'>'Come on, come and get me... up you get now...'</span>", 8000, 'blue');
    	else if(clk==48)
			Materialize.toast("<span class='harrypotter'> 'Our youngest champion is quickest to get his egg!' cried Ludo Bagman</span>", 5000, 'blue');
    	else if(clk==56)
			Materialize.toast("<span class='harrypotter'> He had got through the first task, he had survived...</span>", 8000, 'blue');

    }
</script>
</html>
<?php
}
else if((isset($_SESSION["u1"])) && (isset($_SESSION["p1"])) && (isset($_SESSION["admin"])) && $_SESSION["admin"] == true)
{  header("location:welcome-admin.php"); 
}
else
{  header("location:login.php"); 
}
?>
<script>
 
 var time=setInterval(function(){
var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                	var x=this.responseText;
                	//document.write(x);
                	// alert(x);
                	if(x=="1")
                	{
                		window.clearInterval(time);
            			window.location = 'logout.php';
                	}
                
            		
            }
        }
        
        	xmlhttp.open("GET", "temporary.php", true);
 
        	xmlhttp.send();


},1000);
</script>

<script type="text/javascript">
	var t=0;
	var counter=0;
	var color;
	var i=1;
	window.onload=bg
	var msg="";
	function bg(){
		$("#body").fadeIn();

		if(t==0)
		{
			$("#body").addClass('animated fadeIn');
			document.getElementById("body").src = "bg1.jpg";
				t=1;

		}
		if(t==2)
		{
			$("#body").addClass('animated fadeIn');
			document.getElementById("body").src = "bg2.jpg";
				if(i==1)
					{color="red"; i=2;}
				else if(i==2)
					{color="blue"; i=3;}
				else if(i==3)
					{color="green"; i=4;}
				else if(i==4)
					{color="yellow"; i=1;}
				 thatIsACounter();
				 counter++; 
				t=3;
		}

		$("#body").delay(23900).fadeOut();
		
		setTimeout(bg1,24000)

	}
	function bg1(){
		
		$("#body").fadeIn();

		if(t==1)
		{
			$("#body").addClass('animated fadeIn');
			document.getElementById("body").src = "bg3.jpg";
				t=2;

		}
		if(t==3)
		{
			$("#body").addClass('animated fadeIn');
			document.getElementById("body").src = "bg4.jpg";
				t=0;
		}

		$("#body").delay(23900).fadeOut();
		
		setTimeout(bg,24000)

	}
function thatIsACounter(){
if(counter==0)
	{msg="where are your manners wormtail...?? Avada Kedavra!!!!!!"; 
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==2)
	{msg = "our most faithful servant has joined us...";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==4)
	{msg = "The scar hurts again... but voldemort can't be lurking in the privet drive";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==6)
	{msg = "The Weasleys have arrived... in the blocked fireplace...!!";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==8)
	{msg = "dudley's tongue is three feet long!!!";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==10)
	{msg="We are going to the Quidditch World Cup!!";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==12)
	{msg = "Welcome to the 422nd Quidditch World Cup!!";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==15)
	{msg="Victor Krum gets the snitch, but Ireland wins!!";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==18)
	{msg="MORSMORDRE!!";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==21)
	{msg = "The Dark Mark appears in the sky once again... it's his sign... you-know-who's...";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==24)
	{msg = " The Triwizard Tournament will be held this year at Hogwarts! ";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==27)
	{msg = "Mad-Eye Moody have arrived... the aurror? yup. mad now a days...";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==30)
	{msg = "champion  will be chosen by the impartial judge... The Goblet of fire..";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==33)
	{msg = "Harry potter? the fourth champion!!!??? this isn't happening!";
Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}
if(counter==36)
	{msg = "DIDJAPUTYOURNAMEINTHEGOBLETOFFIYAAAHHHH!!!";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==39)
	{msg = "God... that's the vicious hungarian horntail!!! tail as much dangerous as the front!!";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==43)
	{msg = "well... the yule ball is coming... who do you reckon i should take???";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==46)
	{msg = "The second task... 'harry potter must save his wheezy!!'";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==50)
	{msg = "we can not speak above the ground...";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==53)
	{msg = "the maze... the third task... the maze!!!";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==56)
	{msg = "the graveyard... 'cedric no!!' ... 'Avada Kedavra!!!'";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==60)
	{msg = "Flesh from the servant... bone from the father... blood of the enemy...!!!";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==63)
	{msg = "lord voldemort has risen again.";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==66)
	{msg = "'avada kedavra!' .... 'Expelliarmus!!!'";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==70)
	{msg = "'he can't be back dumbledore...' ... 'then we have reached the parting of the ways, cornelius' ";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
if(counter==73)
	{msg = "harry potter... the boy who lived... come to die...";
	Materialize.toast("<span class='harrypotter'> "+ msg +"</span>", 8000, color);
}	
}



</script>

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 

