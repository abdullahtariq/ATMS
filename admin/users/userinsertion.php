<?php

//$uniqueStr = generateRandomString();
$getUser = select('users',$email,'');


if(mysqli_num_rows($getUser) == 0){
	
	 $query = getInsertQuery('users',$_POST);

$_SESSION["message"]="MESSAGE OF SUCCESS";// show a message to user after  registration

  echo '<script type="text/javascript">
          window.location = "index.php?act=mgu";
       </script>';



}
else{
	
	echo 'User can not be created. Email already exists';
}
?>
