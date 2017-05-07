<?php
  
  session_start();
  header('Content-type:image/jpeg');
  
  $_SESSION['secure']= rand(1000,9000);
  $text = $_SESSION['secure'];
  $font_size = 20;
  $image_width = 140;
  $image_height = 50;
  $image = imagecreate($image_width, $image_height);
  imagecolorallocate($image, 255, 255, 255);
  $text_color = imagecolorallocate($image, 0, 0, 0);

 

  imagettftext($image, $font_size, 0, 15, 30, $text_color, 'HopferHornbook.ttf', $text);
  imagejpeg($image);
?>