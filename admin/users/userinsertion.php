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
//$uniqueStr = generateRandomString();
$getUser = select('users',$email);

if(mysql_num_rows($getUser) == 0){
	$query = getInsertQuery('users',$_POST);
	$result = mysql_query($query)or die(mysql_error());

echo '<script type="text/javascript">
         window.location = "index.php?act=mgu";
       </script>';
}
else{
	echo 'User can not be created. Email already exists';
}
?>