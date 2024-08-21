<?php


echo "Logout Successfully ";

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();

if (isset($_SESSION['uuid']))
{
    unset($_SESSION['uuid']);
    unset($_SESSION);
}

// home page 
echo '<script type="text/javascript"> 
setTimeout(function(){
window.open("index.php","_self");
}, 500);
</script>';            //  On Successful Login redirects to home.php


// Include URL for Login page to login again.
// header("Location: index.php");

exit;
?>