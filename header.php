<?php
if(!(isset($_SESSION))) session_start();
?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
          <link rel="shortcut icon" type="text/css" href="img/broom-hp.png">

    <link rel="stylesheet" type="text/css" href="materialize\materialize\css\materialize.min.css">
<style type="text/css">
body{
    font-family: 'harrypotter';

}
input[type="radio"]:checked + label:after{
     border: 2px solid maroon !important;
     background-color: maroon !important;

}
#logout:hover{
  /*border: solid 1px black;*/
}
.side-bar{
    height: 100%;
    scroll-behavior: all;
    overflow-y: auto;
  }
::-webkit-scrollbar {
    width: 15px;
}
 
::-webkit-scrollbar-track {
    background-color: black;
    /*-webkit-border-radius: 20px;*/
    /*border-radius: 10px;*/
}

::-webkit-scrollbar-thumb {
    -webkit-border-radius: 20px;
    border-radius: 10px;
    background: maroon; 
    /*background: #6d6d6d; */
}
@font-face {
    font-family: harrypotter;
    src: url('fonts/HopferHornbook.ttf');
    font-weight: bold;
}
.harrypotter{
      font-family: 'harrypotter';
}
.tabs .indicator { background-color: transparent !important; border: solid 2px #fff; }
</style>
<div class="navbar-fixed">
  <nav class="nav black">
    <div class="nav-wrapper">
      <a href="index.php" class="hide-on-med-and-down">
      <img  style="height:70px;" src="img/goblet.png">
      	<span> 
      		<img style="height:70px;" src="img/logo2.png">
      	</span>
      </a>
      <!-- <div class="black center"><a href="index.php" class="hide-on-large-only">The Triwizard Tournament</a></div> -->
      <a href="index.php" class="hide-on-large-only">The Triwizard Tournament</a>
      <a href="#" data-activates="mobile-demo2" class="button-collapse"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php if((isset($_SESSION["u1"])) && (isset($_SESSION["p1"])))
        { ?>
        <li id='logout' style='z-index: 1000;'><a href="logout.php" class='white-text'>Logout, <?php echo $_SESSION["u1"]; ?>?</a></li>
        <?php } ?>
      </ul>
      <ul class="side-nav" id="mobile-demo2">
        <?php if(!(isset($_SESSION["u1"])) && !(isset($_SESSION["p1"])))
        { ?>
        <li><a href="logout.php">Logout</a></li>
        <?php } ?>      </ul>
    </div>



<?php    function checkit(){
            echo "echo";
  } ?>