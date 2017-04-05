<?php

include 'header.php';
if (isset($_SESSION['email'])) {
	
include 'methods/cmethods.php';
include 'users/selectapi.php';
$staticURL="";
if(isset($_GET['act']) && !empty($_GET['act'])){
	$staticURL = $_GET['act'];
}

if ($staticURL=='mgu') {
	
	include 'users/usermanager.php';

}elseif ($staticURL=='mguc') {
	include 'users/createuser.php';
}elseif ($staticURL == 'mguin'){
	include 'users/userinsertion.php';
}elseif ($staticURL=='mguv') {
	include 'users/userrecord.php';
}elseif ($staticURL=='mgupdate') {
	include 'users/edituser.php';
}elseif ($staticURL=='mgusucess') {
          include 'users/updaterecord.php';
}
else{
	include 'users/dashboard.php';
}

include 'footer.php';
}else{
	header("Location:../index.php");
}
?>

