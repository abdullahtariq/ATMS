<?php

include 'header.php';
if (isset($_SESSION['email'])) {

 include '../admin/methods/cmethods.php';
include 'users/selectapi.php';
$staticURL="";
if(isset($_GET['act']) && !empty($_GET['act'])){
	$staticURL = $_GET['act'];
}

if ($staticURL=='hmu') {
	
	include 'users/hmlist.php';
      
}elseif ($staticURL=='hmc') {
	include 'users/createhm.php';
}elseif ($staticURL == 'hmin'){
	include 'users/insertionhm.php';
}elseif ($staticURL=='hmv') {
	include 'users/hmrecord.php';
}elseif ($staticURL=='hmupdate') {
	include 'users/edithm.php';
}elseif ($staticURL=='hmsucess') {
          include 'users/hmrecupdate.php';
}
else{
	include 'users/mdashboard.php';
}

include 'footer.php';
}else{
	header("Location:../index.php");
}
?>