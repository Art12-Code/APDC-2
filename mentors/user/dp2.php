<?php
echo "Page not Loading<br><br>user Data not loaded..<br><br>";

echo "<a href='session_logout.php'> Restart</a> <br><br>"; 
// echo $_REQUEST['uname']."<br><br>".$_REQUEST['uemail']; 



session_start();
extract($_REQUEST);
// extract($_POST);   
// going to use above code
require 'c/db_conn.php';
include 'c/db_conn.php';
// Taking all 5 values from the form data(input)
// $unam = $_REQUEST['uname'];
$uemail = $_REQUEST['uemail'];
echo $unam;
$actype = $_REQUEST['actype'];
$free = $actype;
$nn1 = "=====";
$supadmin = "admin@apdcgroup.org";
// $phone = $_REQUEST['phone'];
// $n4 = explode("?", $unam);
// $nn3 = str_replace(' ', '_', $n4);
// $uname = $nn3[0];
// $tab = "_".$phone;
$dm22 = $_REQUEST['dm2'];
$dmp = $_REQUEST['tgid'];


$msg =  " == O T P CODE ==\n\n You are about to login to your APDC Mentor Ship account, use otp code  \n\nFor : "
.$uemail."\n\nOTP : ".$dm22."\n\nContact support at ".$supadmin." for any issues.\n\n= # = # =";


    
$query2 = "SELECT *  FROM `$free` WHERE `email` LIKE '$uemail';";

$result = mysqli_query($conn, $query2);

if (mysqli_num_rows($result) >= 1) {

    
    $row = mysqli_fetch_assoc($result);
    echo " - Name : " . $row["name"]. "<br> - Email : " . $row["email"]."<br> - phone : " . $row["phone"].  "<br> Done <br> - Acct Type : " . $actype.  "<br> ";
  

    $useru = $row["name"];
    $emailu = $row["email"];
    $chatid = $dmp;
 //   $chatid = "5701908682";
    

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );


    if($emailu == $uemail) { 
        
            $_SESSION['puid'] = $useru;
            $_SESSION['uem'] = $emailu;
            $_SESSION['otp'] = $dm22;
            $_SESSION['acctyp'] = $row["user_type"];
            $_SESSION['phone'] = $row["phone"];
            $_SESSION['bio'] = $row["bio"];
            $_SESSION['photo'] = $row["photo"];
            $_SESSION['fb'] = $row["fb"];
            $_SESSION['whp'] = $row["whp"];
            $_SESSION['mtor1'] = $row["mtor1"];

            if(isset($_SESSION['puid']))   // Checking whether the session is already there or not if 
            // true then header redirect it to the home page directly 
{
header("Location:otp.php"); 
exit;
}
// profile dashboard
        }

else{
    echo "Invalid username or password";
    echo "<a href='index.php#form9-s'>Login.</a>";

    echo "bad Request<br>
         
    <script lang='javascript'>

    function myfunc() {
        setTimeout(function(){
          location.href = 'index.php#form9-s';
        }, 2000);
        };
             </script>
         
    <body onload='myfunc()' > 
    <br><br>
    Redirecting<br></body>
            
            ";
}
}
     
    else{
        echo "<h1>error<br>user Not found<br></h1>";
       echo "<a href='index.php#form9-s'>Login.</a>";

       echo "bad Request<br>
            
       <script lang='javascript'>
   
       function myfunc() {
           setTimeout(function(){
             location.href = 'index.php#form9-s';
           }, 2000);
           };
                </script>
            
       <body onload='myfunc()' > 
       <br><br>
       Redirecting<br></body>
               
               ";
    }
  
  