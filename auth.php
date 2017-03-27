<?php
ob_start();
include 'header.php';
$email=$_POST['email'];
$password=md5($_POST['password']);
// echo $email;
$query='SELECT * From users Where email="'.$email.'" AND password="'.$password.'"';
$result=mysql_query($query)or die(mysql_error());
 // echo mysql_num_rows( $result);

if (mysql_num_rows( $result)==1) {
 $crntresult=mysql_fetch_assoc($result);
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
