<?php 
error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("vkr=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);
$domain = "https://vkrdownloader.herokuapp.com";
if(stripos($lloc,'//')==true)  {
   
    header("Location: $domain/download.php/?vkr=$lloc");
exit();
  }  

   elseif(stripos($lloc,'://')===false) {
   
    header("Location: $domain/search.php/?vkr=$video_id");
exit();
  }  
   else '';
?>
