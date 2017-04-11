<?php
ob_start();
include 'header.php';
$email=$_POST['email'];
$password=md5($_POST['password']);


$query='SELECT * From users Where email="'.$email.'" AND password="'.$password.'" AND deactivate<>"on"';
global $conn;
$result =mysqli_query($conn,$query);
  // echo mysqli_num_rows( $result);

if (mysqli_num_rows( $result)==1) {
 $crntresult=mysqli_fetch_assoc($result);

 $_SESSION['email']=$email;
 $_SESSION['password']=$password;


 $queryup= 'UPDATE `users` SET lastactivity=now() Where email="'.$email.'"';
 
 mysqli_query($conn,$queryup)or die(mysqli_error());

 if ($crntresult['user_type']=='admin') {
 		$_SESSION['identity_no']=$crntresult['identity_no'];

     header('Location:admin/index.php?act=mgu');

 }elseif ($crntresult['user_type']=='HM') {
      	
                         
 	$_SESSION['identity_no']=$crntresult['identity_no'];

 	 header('Location:manager/index.php?act=hmu');
 }
}else{

	
	$_SESSION["error"]="MESSAGE OF ERROR";
	 header('Location:index.php');
	  
}

?>
