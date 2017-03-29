<?php 
  $conection=mysql_connect('localhost','root','');//always three strings 1-localhost. 2-user. 3-pasword
  if($conection){
    //echo "connnection  establish";
    }else{
      die('could not connect :'.mysql_error());
    }
    mysql_select_db('emp-mns');

    
 $email=$_POST["email"];
 // echo $email;

  $query='SELECT * From users WHERE email="'.$email.'"';

 $result=mysql_query($query)or die(mysql_error());
 

 if (mysql_num_rows($result)> 0) {
    
    echo "Email is alrady exist";

}

 


         
  
  

?>