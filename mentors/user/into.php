<?php 
 session_start();   // session starts with the help of this function 

 extract($_POST);   
 // find what is in db
 $otp = $_SESSION['otp'];

 $dmp = $_REQUEST['pass'];

 if ($otp == $dmp ){
  echo $dmp." <br> ";
  echo "yes";
  
  $_SESSION['uuid'] = $_SESSION['puid'];
  header("Location:mtee.php"); 
  exit;
} else{
  echo $dmp." <br> ";
  echo "no";
  header("Location:otp.php"); 
  exit;
}