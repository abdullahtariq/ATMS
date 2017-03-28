<?php  
 
$conection=mysql_connect('localhost','root','');//always three strings 1-localhost. 2-user. 3-pasword


if($conection){
//echo "connnection  establish";
}else{
	die('could not connect :'.mysql_error());
}
mysql_select_db('emp-mns');
?>
