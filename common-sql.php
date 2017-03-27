<?php  
 
$conection=mysql_connect('localhost','almub345_admin','s7*PVFAIi2$*');//always three strings 1-localhost. 2-user. 3-pasword


if($conection){
//echo "connnection  establish";
}else{
	die('could not connect :'.mysql_error());
}
mysql_select_db('almub345_emp-mns');
?>
