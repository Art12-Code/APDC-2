<?php 

$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "mtee";

// telegram
$api = "6058433282:AAEmuKkjURSzD27G4UwkPKYD-4fzFFnBgnI";


// Create connection
$conn = mysqli_connect($sname,
	$uname, $pass, $db_name);

    // Checking for connections
    if (!$conn){
        echo "Connection Unsuccessful!!!";
       
        die("ERROR: Could not connect. ". mysqli_connect_error());
    } 
    
    elseif($conn) {
        echo "<p hidden>connected</P>";
    }

    /*
    $result1 = mysqli_query($conn, "show tables");
    while($tt = mysql_fetch_array($result1)){
        echo($tt[0]."<br>");
    }
    */
    
    ?>
    