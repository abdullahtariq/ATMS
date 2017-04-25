<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname ="emp-mns";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully"."<br>";

    
 $email=$_POST["email"];
 // echo $email;

  $query='SELECT * From users WHERE email="'.$email.'"';

 $result =mysqli_query($conn,$query);
 

 if (mysqli_num_rows($result)> 0) {
    
    echo "Email is alrady exist";

}

 


         
  
  

?>