<?php 
 include '../../common-sql.php';
 include 'cmethods.php';
 include '../users/selectapi.php';
session_start();
    // echo $_SESSION['email'];
 $password=$_POST["password"];
  // echo  $password;
 

$updateQ='UPDATE users SET password="'.md5($password).'" WHERE email="'.$_SESSION['email'].'"';

  // echo $updateQ;
$updateResult =mysqli_query($conn,$updateQ) or die(mysqli_error($conn));

// echo $updateResult;

$Updateresponse=array('status'=>'true','message'=>'Password Updated Sucessfully');

echo json_encode($Updateresponse);






  


         
  
  

?>