<?php
session_start();
// $nc3 = $_SESSION['n3'];

// echo $nc3;

require 'c/db_conn.php';

$di   = strval(date("d_m_Y"));
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
// $nc3 = $_SESSION['n3'];
$free = "free";
$actype = $_REQUEST['actype'];
// Performing insert query execution
// here our table name is $tab

$query2 = "SELECT *  FROM `$free` WHERE `email` LIKE '$email';";

$result = mysqli_query($conn, $query2);

if (mysqli_num_rows($result) >= 1) {

    echo "User Email Already exist<br><br>";
    echo "<a href='index.php#form4-v'>Click here Registration was unSuccessful.</a>";

    echo "bad Request<br>
            
    <script lang='javascript'>

    function myfunc() {
        setTimeout(function(){
          location.href = 'index.php#form4-v';
        }, 4000);
        };
             </script>
         
    <body onload='myfunc()' > 
    <br><br>
    Redirecting<br></body>
            
            ";
    }  
    else{

$sql1 = "INSERT INTO $free  VALUES (NULL, '$free', '$name', '$email', '$phone', NULL, NULL, NULL, NULL, NULL, NULL, NULL);";

if(mysqli_query($conn, $sql1)){

    echo "<h1>ok good Request<br>Successful</h1>";
    echo "<a href='index.php#form9-s'>Proceed to Login Successfully Registered.</a>";

    echo nl2br("\n$email\n  $phone\n$name");

    echo "ok good Request<br>
            
    <script lang='javascript'>

    function myfunc() {
        setTimeout(function(){
          location.href = 'index.php#form9-s';
        }, 4000);
        };
             </script>
         
    <body onload='myfunc()' > 
    <br><br>
    Redirecting<br></body>
            
            ";
} else{
    echo "ERROR: Hush! Sorry $sql1. "
        . mysqli_error($conn);

       echo "bad Request<br>
            
       <script lang='javascript'>
   
       function myfunc() {
           setTimeout(function(){
             location.href = 'index.php#form4-v';
           }, 2000);
           };
                </script>
            
       <body onload='myfunc()' > 
       <br><br>
       Redirecting<br></body>
               
               ";
}
    }
// Close connection
mysqli_close($conn);

?>
