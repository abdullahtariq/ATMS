<?php  
 
$servername = "localhost";
$username = "atms-un";
$password = "Mansehra@44";
$dbname ="ATMS-UN";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully"."<br>";
?>
