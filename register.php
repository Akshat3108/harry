<?php

session_start();
if((isset($_SESSION["u1"])) && (isset($_SESSION["p1"])) && (isset($_SESSION["admin"])))
{
    header('Location:welcome.php');
}
if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];
if(empty($_SESSION['secure']))
  $_SESSION['secure'] = rand(1000,9999);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="materialize\materialize\css\materialize.min.css">
    <link rel="stylesheet" type="text/css" href="fonts\fa\css\font-awesome.min.css">
<style type="text/css">
    body{
      background-image: url('img/hogwarts.gif');
      background-size: cover;
      background-repeat: no-repeat; 
    }    

@font-face {
    font-family: harrypotter;
    src: url('fonts/HopferHornbook.ttf');
    font-weight: bold;
}
.harrypotter{
      font-family: 'harrypotter';
}
      /* label color */
   .input-field label {
     /*color: #000;*/
   }
   /* label focus color */
   .input-field input[type=text]:focus + label, .input-field input[type=email]:focus + label, .input-field input[type=password]:focus + label, .input-field input[type=number]:focus + label {
     color: #ddd;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus,.input-field input[type=email]:focus,.input-field input[type=number]:focus,.input-field input[type=password]:focus {
     border-bottom: 1px solid #ddd;
     box-shadow: 0 1px 0 0 #ddd;
   }
   .btn{
    border:solid 1px white !important;
   }
   /* valid color */
/*   .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }*/
   /* invalid color */
/*   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
   }*/
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }
        
  </style>



</head>
<body>
    <a href="index.php" style="position:fixed; top:0; left:0;"><button class="btn transparent harrypotter">Go Back</button></a>
<div class="row container white-text harrypotter">
    <form action="showteam.php" method="POST" name="form" class="col s12">
      <div class="align-left left-align row" style="float:left;" >
        <img src="img/registration.png" class="col l12 center hide-on-med-and-down">
        <img src="img/registration.png" style="position:fixed;" class="hide-on-large-only responsive-img">
      </div>

     <div class="row blue-text center" style="margin-top:130px;">
       Enter your name to the goblet of fire...
       <br><br>
       Single participants must fill the "Leader" form, and leave the "Member" forms blank...
     </div>

      <div class="row">
        <div class="input-field col s12 m8 offset-m2">
        <i class="prefix fa fa-bolt"></i>
          <input id="team_name_input" type="text" class="validate" name="teamname" required>
          <label for="team_name">Team Name</label>
        </div>
  
        <div class="center-align col s12" id="msg"></div>
  
        <div class="input-field col s12 m8 offset-m2">
        <i class="prefix fa fa-bolt"></i>
          <input id="password" type="password" class="validate" name="password" required>
          <label for="team_name">Password</label>
        </div>
       </div>
      


       <!-- <member_1> -->
      <div class="col s12 l4">
        <img src="img/member.png" class="col s12">

        <div class="row">
          <div class="input-field col s12">
            <input id="first_name" type="text" class="validate" name="member_1_first" >
            <label for="first_name">Member 1 Name</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="member_1_email">
            <label for="email">Member 1 Email</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <input id="contact" type="tel" data-length="10"  class="validate" name="member_1_contact" >
            <label for="contact">Member 1 Contact Number</label>
          </div>
      </div>
    
    </div>
    <!-- </member_1> -->

    <!-- <leader> -->
      <div class="col l4 s12" >
        <img src="img/leader.png" class="col s12">

      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate" name="leader_first" required>
          <label for="first_name">Full Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="leader_email" required>
          <label for="email">Email</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <input id="contact" type="tel" class="validate" data-length="10" name="leader_contact" required>
          <label for="contact">Contact Number</label>
        </div>
      </div>

    </div>
    <!-- </leader> -->

    <!-- <member_2> -->
    <div class="col l4 s12">
        <img src="img/member.png" class="col s12">
        <div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate" name="member_2_first" >
          <label for="first_name">Member 2 Full Name</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="member_2_email" >
          <label for="email">Member 2 Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="contact" type="tel" class="validate" data-length="10"  name="member_2_contact" >
          <label for="contact">Member 2 Contact Number</label>
        </div>
      </div>

    </div>


      <div class="col s12"> 
          <img src="captcha.php" class="col s6 l2 center" />
        <div class="col s12 l10 offset-m3"> 
          <input type="text" size="6" name="secure" id="secure" required placeholder="enter the captcha">
          <!-- <label for="secure">Enter the Captcha</label> -->
        </div>
        <div class="col s12">
        <br><br>
           <a class=" transparent center col s12"> 
           <input type="hidden" name="token" value='<?php echo $token; ?>' />
           <button type="submit" name="submit" class="btn transparent">Submit your name...</button>
           </a>
        </div>   

      </div>


   </form>
</div>






<!-- <php> -->
<?php 
 include('scripts.php');


?>
<script type="text/javascript">
  $(document).ready(function() {
    //$('#msg').load('check_team_name.php').show();
    var user_name = $(this).val();
    $('#team_name_input').keyup(function (){
        $.post('check_team_name.php', { teaminput : form.teamname.value },
          function(result) {
            $('#msg').html(result).show();
          });
        });
    }); 

// document.getElementById("msg").style.color="red";
</script>

<!-- </php> -->
</body>
</html>
