<?php
session_start();
include "connect.php";
  if(isset($_POST['submit']))
  {
    function validateMobile($number){
      if(strlen($number)!=10)
    {
        return false;
    }
    return true;
    }
    $m=null;
    if(empty($_POST['teamname']) || empty($_POST['password']) || empty($_POST['leader_first']) || empty($_POST['leader_email']) || empty($_POST['leader_contact']) || !validateMobile($_POST['leader_contact'])){
      $m = "<h3>Invalid Entries</h3>";
    }else{
  
    // $dbhost = 'localhost';
    // $dbuser = 'root';
    // $dbpass = '';
    // $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    // if(! $conn )
    // {
    //   die('Could not connect: ' . mysql_error());
    // }
    if($_SESSION['secure']==$_POST['secure'])
    {
  if(hash_equals($_SESSION['token'], $_POST['token']))
  {
    
    $salt='@.!%&#<(@#';


    $sql = "SELECT * FROM user";
    $run1 = $conn->query($sql);
    $num = mysqli_num_rows($run1);
    if($num>90)
      $_SESSION['flag']=2;
    if($num<90)
    {

    $team_name=htmlentities($conn->real_escape_string(trim($_POST['teamname'])));
    $password=htmlentities($conn->real_escape_string(trim(md5($salt.$_POST['password']))));
    $check = "SELECT * FROM user WHERE teamname='$team_name'";
    $resultcheck=$conn->query($check);
    if(mysqli_num_rows($resultcheck)==0)
    {
    
      $m_1_f=htmlentities($conn->real_escape_string(trim($_POST['member_1_first'])));
      // $m_1_l=$_POST['member_1_last'];
      // $m_1_s_id=$_POST['member_1_st_id'];
      $m_1_e=htmlentities($conn->real_escape_string(trim($_POST['member_1_email'])));
      $m_1_c=htmlentities($conn->real_escape_string(trim($_POST['member_1_contact'])));

      $m_2_f=htmlentities($conn->real_escape_string(trim($_POST['member_2_first'])));
      // $m_2_l=$_POST['member_2_last'];
      // $m_2_s_id=$_POST['member_2_st_id'];
      $m_2_e=htmlentities($conn->real_escape_string(trim($_POST['member_2_email'])));
      $m_2_c=htmlentities($conn->real_escape_string(trim($_POST['member_2_contact'])));

      $l_f=htmlentities($conn->real_escape_string(trim($_POST['leader_first'])));
      // $l_l=$_POST['leader_last'];
      // $l_s_id=$_POST['leader_st_id'];
      $l_e=htmlentities($conn->real_escape_string(trim($_POST['leader_email'])));
      $l_c=htmlentities($conn->real_escape_string(trim($_POST['leader_contact'])));
      /*function getGroup($g){
        $l = sizeof($g);
        $m = rand(0,$l-1);
        return $g[$m];
      }*/
      //function getGroupName(){
      $flag=true;
      while($flag==true)
      {
      $n = rand(1,3);
      if ($n==1)
      	$groupname="Hogwarts";
      if ($n==2)
      	$groupname="Durmstrang";
      if ($n==3)
      	$groupname="Beauxbatons";

      $getteams="SELECT * FROM user WHERE groupname='$n' ";
      $runteams=$conn->query($getteams);
      if(mysqli_num_rows($runteams)<17);
      {
        $group=$n;
        $flag=false;
      }
    }
    /*$teams = array("HOGWARTS", "Durmstrang", "Beauxbatons");
    $n = rand(0,2);
      $groupname = $teams[$n];
      $getteams="SELECT * FROM user WHERE groupname='$n'";
      $runteams=$conn->query($getteams);
      if(mysqli_num_rows($runteams)>=18);
      {
        array_splice($teams, $n, 1);
      }
  }*/

      $query = "INSERT INTO user"."(teamname ,password ,member1, member2 ,leader ,mailid1 ,mailid2 ,mailid3 ,contact1 ,contact2 ,contact3, groupname )"."VALUES ('$team_name', '$password' , '$m_1_f' , '$m_2_f' , '$l_f' , '$m_1_e' , '$m_2_e' , '$l_e' , '$m_1_c' , '$m_2_c' , '$l_c', '$group')";
      $run = $conn->query($query);
      if($run)
      $_SESSION['flag']=1;
     
 }
     else
     {
      echo "error";
     }
   }
   

   else
  {
    header('Location:full.html');
  }
}

  }
  else 
  {
    $_SESSION['flag']=3;
  }
  }
}
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
      background-image: url('img/greathall.png');
      /*background-size: cover;*/
      background-repeat: no-repeat;
      background-position: center; 
    }  

    .btn{
      border: 1px solid white;
    }

		.reg{
			padding-left: 35%
		}
    
@font-face {
    font-family: harrypotter;
    src: url('fonts/HopferHornbook.ttf');
    font-weight: bold;
}
.harrypotter{
      font-family: 'harrypotter';
}
	</style>
</head>

<?php 
if ($_SESSION['flag']==1) {
  
?>

<body class="harrypotter row center">
  <br><br><br><br><br><br><br>
  <?php if(is_null($m)){
    echo '<div class="col s8 offset-s2 white-text">Your Team Has Been Successfully registered. Your School is <br><br></div>';
  }else{
        echo '<div class="col s8 offset-s2 white-text">'.$m.' <br><br></div>';
  } ?>
    <div class="center white-text" style="font-size:65px;">
    <?php
    try{
      if(isset($groupname)){
      echo $groupname . "</div>";
    }
    }
    catch(Exception $e){
        echo "Don't try this again, my friend...";
    }
  }
  elseif($_SESSION['flag']==2)
  {
    ?>
  
  <?php
}
elseif($_SESSION['flag']==3)
{
  ?>
  <body class="harrypotter row center">
  <br><br><br><br><br><br><br>
  <div class="col s8 offset-s2 white-text">Entered Captcha is Wrong.<br><bR>
    <div class="center" style="font-size:65px;">
  </div>
  <?php
}
?>
  <br><br>
    <div class="col s12">
    <br><br><br>
       <a class="btn transparent col s12 m8 offset-m2" href='register.php'>Go Back</a>
    </div>   
  <?php
    
    include("scripts.php");
  ?>
</body>
</html>


     
