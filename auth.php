<?php
ob_start();
include 'header.php';
$email=$_POST['email'];
$password=md5($_POST['password']);
// echo $email;
$query='SELECT * From users Where email="'.$email.'" AND password="'.$password.'"';
global $conn;
$result =mysqli_query($conn,$query);;
 // echo mysql_num_rows( $result);

if (mysqli_num_rows( $result)==1) {
 $crntresult=mysqli_fetch_assoc($result);
 session_start();
 $_SESSION['email']=$email;
 $_SESSION['password']=$password;
 if ($crntresult['user_type']=='admin') {
    header('Location:admin/index.php?act=mgu');

 }
}else{
	echo 'Invalid Email or Password';
}

?>
