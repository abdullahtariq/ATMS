<?php
include 'header.php';
if (isset($_SESSION['email'])) {
	include '../admin/methods/cmethods.php';
	include 'users/selectapi.php';

$staticURL="";
if (isset($_GET['act']) && !empty($_GET['act'])) {
	$staticURL=$_GET['act'];
}

if ($staticURL=="hubsu") {
	
	include 'users/hslist.php';
}elseif ($staticURL=="hubsv") {
	include 'users/hsrecord.php';
}else{
	include 'users/hsdashboard.php';
}

include 'footer.php';
}else{
	header("Location:../index.php");
}

?>
