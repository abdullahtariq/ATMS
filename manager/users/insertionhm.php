<?php

$email=$_POST['email'];
$_POST['continents']=$_SESSION['continents'];
// $uniqueStr = generateRandomString();
$getUser = select('users',array("email"=>$email));


if(mysqli_num_rows($getUser) == 0){
		// print_r($_POST) ;
	$query = getInsertQuery('users',$_POST);
	

$_SESSION["message"]="MESSAGE OF SUCCESS";// show a message to user after  registration

  echo '<script type="text/javascript">
 window.location = "index.php?act=hmu";
 </script>';



}
else{
	
	echo 'User can not be created. Email already exists';
}
?>
