<!DOCTYPE html>
<html>
<head>
	<title>THE TRIWIZARD TOURNAMENT</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <materialize> -->
    <link rel="stylesheet" type="text/css" href="materialize\materialize\css\materialize.min.css">
    <link rel="stylesheet" type="text/css" href="fonts\fa\css\font-awesome.min.css">
	<!-- </materialize> -->
	<link rel="shortcut icon" type="text/css" href="img/broom-hp.png">

	<!-- <enxernal css> -->
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<!-- </enxernal> -->
<style type="text/css">
body, a:hover, a{
	/*cursor:url(http://media.tumblr.com/d966369b267e70194d0a4ac40f6df63b/tumblr_inline_ms5iz0TtmM1r6qyth.png), auto !important;*/
}
@font-face {
    font-family: harrypotter;
    src: url('fonts/HopferHornbook.ttf');
/*    font-weight: bold;
*/}

.harrypotter{
      font-family: 'harrypotter';
}
.bg-help{
	background-image: url('images/mobile/bg_help_mobile2.jpg'); 
	background-size:cover; 
	color: white !important;
	text-shadow: 4px 4px 9px #000,-4px 2px 9px #000,2px -2px 9px #000,-2px -4px 9px #000;
	background-position:center;
	background-repeat:no-repeat;
}
.bg-abt{
	background-image: url('images/mobile/bg_abt_mobile.jpg'); 
	background-size:cover; 
	background-position:center;
	background-repeat:no-repeat;
}
.bg-instructions{
	background-image: url('images/mobile/bg_instructions_mobile.jpg'); 
	background-size:cover; 
	background-position:center;
	background-repeat:no-repeat;
}
.bg-team{
	background-image: url('images/mobile/bg_team_mobile.jpg'); 
	background-size:cover; 
	background-position:center;
	background-repeat:no-repeat;
}
@media(min-width: 480px) {
	.bg-abt{
		background-image: url('images/bg_abt.jpg'); 
		background-size:cover; 
		background-position:center;
		background-repeat:no-repeat;
	}
}

@media(min-width: 480px) {
	.bg-team{
		background-image: url('images/bg_team.jpg'); 
		background-size:cover; 
		background-position:center;
		background-repeat:no-repeat;
	}
}
@media(min-width: 480px) {
	.bg-instructions{
		background-image: url('images/bg_instructions.jpg'); 
		background-size:cover; 
		background-position:center;
		background-repeat:no-repeat;
	}
}
@media(min-width: 480px) {
	.bg-help{
		background-image: url('images/bg_help.jpg'); 
		background-size:cover; 
		background-position:center;
		background-repeat:no-repeat;
		color: white !important;
	}
}
.first{
	background: url('images/mobile/banner01-mobile.jpg');
	background-size:cover; 
	background-position:center;
	background-repeat:no-repeat;
}
.second{
	background: url('images/mobile/banner02-mobile.jpg');
	background-size:cover; 
	background-position:center;
	background-repeat:no-repeat;
}
.third{
	background: url('images/mobile/banner03-mobile.jpg');
	background-size:cover; 
	background-position:center;
	background-repeat:no-repeat;
}
.fourth{
	background: url('images/mobile/banner04-mobile.jpg');
	background-size:cover; 
	background-position:center;
	background-repeat:no-repeat;
}

@media(min-width: 480px) {	
		.first{
			background: url('images/banner01.jpg');
			background-size:cover; 
			background-position:center;
			background-repeat:no-repeat;
		}
}	
@media(min-width: 480px) {	
		.second{
			background: url('images/banner02.jpg');
			background-size:cover; 
			background-position:center;
			background-repeat:no-repeat;
		}
}	
@media(min-width: 480px) {	
		.third{
			background: url('images/banner03.jpg');
			background-size:cover; 
			background-position:center;
			background-repeat:no-repeat;
		}
}	
@media(min-width: 480px) {	
		.fourth{
			background: url('images/banner04.jpg');
			background-size:cover; 
			background-position:center;
			background-repeat:no-repeat;
		}
}		
.up{
	position: fixed;
	bottom: 20px;
	right:20px;
	width:50px;
	height:50px;
	background-color: black;
	border-radius: 25px;
	padding-top: 15px;
	text-align: center;
}
.up i{
	color:white !important;
}		
</style>
</head>

<body class="harrypotter black">
<a id="up"></a>
<!-- <navbar> -->
<a href="#up" class="up"> <i class="fa fa-arrow-up"></i> </a>
  <nav class=" transparent">
    <div class="nav-wrapper">
	<a href="#" class="hide-on-med-and-down brand-logo">
	      <img  style="height:70px;" src="img/goblet.png">
	      	<span> 
	      		<img style="height:70px;" src="img/logo2.png">
	      	</span>
	</a>
	<a href="index.php" class="hide-on-large-only">
		The Triwizard Tournament
	</a> 
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-navicon"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#about">About</a></li>
        <li><a href="#help">Help</a></li>
        <li><a href="#instructions">Instructions</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <ul class="side-nav center" id="mobile-demo">
      	<li class="black">  		
		      <img  style="height:70px;" src="img/goblet.png">
		      <br>
		      The Triwizard Tournament
      	</li>
        <li><a href="#about">About</a></li>
        <li><a href="#help">Help</a></li>
        <li><a href="#instructions">Instructions</a></li>
        <li><a href="#team">Team</a></li>
        <li class="divider"></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>



  <div class="slider">
    <ul class="slides">
      <li class="first bg">
        <div class="caption center-align">
        </div>
      </li>
      <li class="second bg">
        <div class="caption left-align">
          <h5 class="light grey-text text-lighten-3">Hogwarts will always be there to welcome you home.</h5>
        </div>
      </li>
      <li class="third bg">
        <div class="caption left-align">
	        <h3>Do, or do not.<br>There is no try.</h3>
          <h5 class="light grey-text text-lighten-3">- Professor Dumbledore</h5>
        </div>
      </li>
      <li class="fourth bg">
        <div class="caption center-align">
        </div>
      </li>
    </ul>
  </div>




<div class="row" style="z-index:2;">
	<div class="col m12 bg-abt">
		<div class="col s12" style="padding-top:10%;"><center><img class="responsive-img" src="images/about.png" id="about"></center></div>
			<p class="left-align col s12 m8 black-text" style="padding-bottom: 5%">
				<b>Wizardry and Wonder</b> is going to fill the air of <b>AKGEC</b> this March. The moment has arrived. <b>OSS R&D Centre</b> is ready to throw you into world of witchcraft and wizardry where all your bonds, friendship, fear and power will be tested and the one who survives will be the ultimate champion. the platform is ready, so rush and catch the <b>hogwarts express.</b> after hogwarts, the Goblet of fire will be lit at akgec now.<br><br>
				Open Source Software Research and development Centre proudly presents - <b class="cyan-text text-darken-3"> "The triwizard tournament." </b> you can all submit you names to the goblet which will be lit very soon. The blockbuster episode will take you to Hogwarts for two days of spell binding events that magically morph the neighbourhood into much loved Fictional World created by author J.K.Rowling. Potter fans of all ages can come and enjoy an enchanting weekend,a Scavenger hunt and much more.... the goblet will soon choose the champions impartially based upon their potential. Prepare yourself to compete in the Tournament... prepare your team to lift the triwizard cup. bring your buddies,<b> Ron and Hermione </b>to help you, because harry, we are waiting for you!! Till then... <b class="blue-text">Mischief managed!!<b> 
			</p>
	</div>
</div>

<div class="row">
	<div class="col s12 m12 bg-help">
		<div class="col s12"><center><img class="responsive-img transparent " src="images/help.png" id="help" class="center-align"></center></div>
			<p class="left-align container">
				The book that could legitimately be called the turning point of the series is packed with action, backstory and significant darkness. It begins in the village of Little Hangleton, where Lord Voldemort and his servant Peter Pettigrew are in hiding. We hear that Voldemort is planning to return to power, and that he wants to kill Harry Potter. Harry sees this scene through a dream, and on his awakening, we find him having another miserable summer with the Dursleys in Privet Drive. However, he is saved by the Weasleys, who come to take Harry back to The Burrow so that he can attend the Quidditch World Cup with them. Their visit causes mayhem in the Dursley household, leaving Dudley even more terrified of wizards.<br><br>

				The Weasleys, Harry and Hermione take a Portkey to the World Cup, but on the night after the game a group of Death Eaters reunite and start to terrorize Muggles. Death Eaters were Voldemort’s followers, but unbeknownst to them, a truly loyal Death Eater is among them: one who went to Azkaban rather than renounce his allegiance, and who shoots the Dark Mark (a sign used to signal death) into the sky to scare them. Harry, Hermione and the Weasleys all return to Hogwarts, and it is announced that a Triwizard Tournament will be held at Hogwarts this year. This is a centuries-old tournament in which three seventeen-year-old witches or wizards battle through various obstacles to win eternal glory. Students from two other wizarding schools, Beauxbatons and Durmstrang, arrive and the competing Champions are chosen from the Goblet of Fire. However, along with the Hogwarts Champion Cedric Diggory, Harry’s name inexplicably comes out too. He has no choice but to compete.<br><br>

				Ron believes Harry entered his name on purpose, and succumbs to jealousy, feeling that he is overshadowed by both his friends and his family. Meanwhile, the conniving journalist Rita Skeeter has taken an interest in Harry, and writes many articles that tarnish his reputation. Hagrid shows Harry that he will have to face dragons in the first task. The new Defence Against the Dark Arts teacher, Mad-Eye Moody, advises Harry to play to his strengths, suggesting that he should fly on a broomstick to get past the dragon. Harry does so, and manages to complete the first task. After it, he and Ron reconcile. It is then announced that on Christmas day a Yule Ball will be held in honour of the Triwizard Tournament, and Harry asks Cho Chang to accompany him. She must refuse him as she is already going with Cedric, and although Harry is upset, he does manage to get Parvati Patil to go with him instead. It is revealed at the ball that Hermione is going with Viktor Krum, the Durmstrang Champion and internationally-famous Quidditch player. Ron is exceedingly jealous. The second task is set in the lake in the grounds of Hogwarts, and Harry must dive into its depths to save Ron. He successfully completes the task with a little help from Dobby the house-elf.<br><br>

				In the summer, Harry competes in the third and final task. It is a maze filled with beasts and charms that the Champions have to battle through, but in the end he and Cedric get to the Triwizard Cup at the same time. They take it together, but it turns out that the Cup is a Portkey, and the two are transported to a graveyard. Cedric gets killed by Peter Pettigrew, who is lying in wait for them along with Lord Voldemort. Using some of Harry’s blood, Pettigrew brings Voldemort back to life, and Voldemort and Harry battle each other in a deadly duel. Harry manages to escape with Cedric’s body and returns to Hogwarts injured and devastated. He is taken by Mad-Eye Moody, who reveals that he is in fact the faithful Death Eater from the Quidditch World Cup, Barty Crouch Junior. He put Harry’s name into the Goblet of Fire, and has been making sure Harry got through the tasks and got to the Cup first so that he would be taken to Voldemort. Dumbledore arrives and takes Harry away, leaving Crouch to the care of some Dementors. Harry is broken after the death of Cedric and the knowledge that Voldemort is back. He leaves Hogwarts worried about the future, scared about what might happen, and frustrated that so few people actually believe his story.<br><br>
				For more story reference visit <a href="https://www.pottermore.com/explore-the-story"> Pottermore </a>
			</p>
	</div>
</div>


<div class="row">
	<div class="col s12 m12 bg-instructions">
		<div class="col s12"><center><img class="responsive-img" src="images/instructions.png" id="instructions" class="center-align" style="padding-top: 8%;"></center></div>
			<p class="left-align container white-text" id="rules_content" style="padding-bottom: 8%">
				1. The event will contain three rounds. Every round will be judged on the basis of time.<br><br>
				2. The First round will be completely non-technical followed by two technical rounds, each event being two hour long.<br><br>
				3. Every round will contain some questions related to Harry Potter.<br><br>
				4. Team participation having at most 3 members is preferable. However, one can also participate individually. but beware, winning chances may be very low then!!<br><br>
				5. All the participating teams will be divided into three groups randomly. And Top five teams from each group will be selected for the second round.   <br><br>
				6. The First round will contain aptitude questions, picture questions, video questions and some simple riddles. some bonus questions and bonus materials will also be there for fans and nerds all alike. <br><br>
				7. In first round, the team attempting maximum correct questions in minimum time will go to second round.<br><br>
				8. Second and Third rounds are kept confidential and a clue will be given to the selected teams for the further rounds.<br><br>
			</p>
		</div>
</div>

<div class="row">
	<div class="col s12 m12 bg-team">
		<div class="col s12"><center><img class="responsive-img" src="images/team.png" id="team" class="center-align"></center></div>
			<div class="carousel hide-on-large-only">
			    <a class="carousel-item transparent z-depth-3" href="#!">
					<div class="container col s12">
						<div class="col s10 offset-s1">
							<br>
							<img src="images/ritik.jpg">
						</div>
						<div class="col s12 center black-text">
								Ritik Raj<br>
								+91 9643556747<br><br>
						</div>
						<br><br>
					</div>		  
			    </a>
			    <a class="carousel-item transparent z-depth-3" href="#!">
					<div class="container col s12">
						<div class="col s10 offset-s1">
							<br>
							<img src="images/bhatia.jpg">
						</div>
						<div class="col s12 center black-text">
								Shubham<br>
								CSE, Third Year
						</div>
					</div>		  
			    </a>
			    <a class="carousel-item transparent z-depth-3" href="#!">
					<div class="container col s12">
						<div class="col s10 offset-s1">
							<br>
							<img src="images/anshul.jpg">
						</div>
						<div class="col s12 center black-text">
								Anshul Sharma<br>
								+91 8476857957
						</div>
					</div>		  
			    </a>
			    <a class="carousel-item transparent z-depth-3" href="#!">
					<div class="container col s12">
						<div class="col s10 offset-s1">
							<br>
							<img src="images/akshat.jpg">
						</div>
						<div class="col s12 center black-text">
								Akshat Singhal<br>
								CSE, Second Year
						</div>
					</div>		  
			    </a>
			    <a class="carousel-item transparent z-depth-3" href="#!">
					<div class="container col s12">
						<div class="col s10 offset-s1">
							<br>
							<img src="images/diksha.jpg">
						</div>
						<div class="col s12 center black-text">
								Diksha Gupta<br>
								CSE, Second Year
						</div>
					</div>		  
			    </a>
			</div>

			<div class="hide-on-med-and-down">
				<div class="container col s12">
						<div class="col s3 offset-s1 z-depth-3 center circle">
							<br>
							<img src="images/ritik.jpg" width="250" class="circle">
							<div class="col s12 center black-text">
									Ritik Raj<br>
									CSE, Third Year
									<br><br>
							</div>
						</div>


						<div class="col s3 offset-s1 z-depth-3 center circle">
							<br>
							<img src="images/bhatia.jpg" width="250" class="circle">
							<div class="col s12 center black-text">
									Shubham Bhatia<br>
									CSE, Third Year
									<br><br>
							</div>
						</div>


						<div class="col s3 offset-s1 z-depth-3 center circle">
							<br>
							<img src="images/anshul.jpg" width="250" class="circle">
							<div class="col s12 center black-text">
									Anshul Sharma<br>
									CSE, Second Year
									<br><br>
							</div>
						</div>

						<div class="col s3 offset-s3 z-depth-3 center circle">
							<br>
							<img src="images/akshat.jpg" width="250" class="circle">
							<div class="col s12 center black-text">
									Akshat Singhal<br>
									CSE, Second Year
									<br><br>
							</div>
						</div>

						<div class="col s3 offset-s1 z-depth-3 center circle" style="margin-bottom:20px;">
							<br>
							<img src="images/diksha.jpg" width="250" class="circle">
							<div class="col s12 center black-text">
									Diksha Gupta<br>
									CSE, Second Year
									<br><br>
							</div>
						</div>
				</div>
				
			</div>
		</div>

</div>


        <footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Your team is there to help you...</h5>
                <p class="grey-text text-lighten-4">Help will always be given to those who ask for it.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a href="#about" class="grey-text text-darken-1">About</a></li>
                  <li><a href="#help" class="grey-text text-darken-1">Help</a></li>
                  <li><a href="#instructions" class="grey-text text-darken-1">Instructions</a></li>
                  <li><a href="#team" class="grey-text text-darken-1">Our Team</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright black">
            <div class="container">
            © 2017 OSS R&D Centre, AKGEC
            </div>
          </div>
        </footer>
<audio autoplay loop>
	<source src = "harry_theme.mp3" type="audio/ogg">	
</audio>
</body>
<?php include('scripts.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
	    $('.slider').slider({
	    	height:600
	    });
		$(".button-collapse").sideNav();   
	  	$('.carousel').carousel();  
	  	  $("a").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
	});

</script>
</html>