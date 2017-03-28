<?php 
  $conection=mysql_connect('localhost','root','');//always three strings 1-localhost. 2-user. 3-pasword
  if($conection){
    //echo "connnection  establish";
    }else{
      die('could not connect :'.mysql_error());
    }
    mysql_select_db('emp-mns');

    
 $email=$dbhandle->real_escape_string($_POST["email"]);

 $query='SELECT * From users WHERE email="'.$email.'"';

 $result=$dbhandle->query($query);

 $num=$result->num_rows;
 if ($num>0) {
   
   echo "Email is already exist";
 }else{
  echo "";
 }

         
  
  

?>