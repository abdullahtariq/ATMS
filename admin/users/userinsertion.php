<?php
$Fname=$_POST['fname'];
$lname=$_POST['lname'];
$Dphone=$_POST['dphone'];
$Actfrom=$_POST['actfrom'];
$Cnthub=$_POST['cnthub'];
$Idnno=$_POST['idnno'];
$Urole=$_POST['urole'];
$Findata=$_POST['findata'];
$Finopt=$_POST['finopt'];
$Contstrt=$_POST['contsrt'];
$Contend=$_POST['contend'];
$pryer=$_POST['peryear'];
$email=$_POST['email'];
$funds=$_POST['funds'];
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
