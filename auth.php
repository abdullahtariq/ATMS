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

   $_SESSION['identity_no']=$crntresult['identity_no'];
   $_SESSION['user_type']=$crntresult['user_type'];  
   $_SESSION['user_id']=$crntresult['user_id'];
   $_SESSION['continents']=$crntresult['continents'];


 if ($crntresult['user_type']=='admin') {
 		
       header('Location:admin/index.php?act=mgu');

 }elseif ($crntresult['user_type']=='HM') {
      	
 	    header('Location:manager/index.php?act=hmu');

 }elseif ($crntresult['user_type']=='HS') {
     $_SESSION['created_by']=$crntresult['created_by'];
 	  header('Location:supervisor/index.php?act=hubsu');
 }elseif ($crntresult['user_type']=='AG') {

 	header('Location:agents/index.php?act=agu');
 }
}else{

	
	$_SESSION["error"]="MESSAGE OF ERROR";
	 header('Location:index.php');
	  
}

?>
