<?php 
 include '../../common-sql.php';

    
 $email=$_POST["email"];
 // echo $email;

  $query='SELECT * From users WHERE email="'.$email.'"';

 $result =mysqli_query($conn,$query);
 

 if (mysqli_num_rows($result)> 0) {
    
    echo "Email is alrady exist";

}

 


         
  
  

?>