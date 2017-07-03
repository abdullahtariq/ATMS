<?php

 /*----------------------------
    Function for dynamic select Query
 ------------------------------*/

  function select($tableName,$email,$id){
  	if(!empty($email)){
  		$query='SELECT * From '.$tableName.' WHERE email="'.$email.'"';
  	}
    elseif(!empty($id)){
      $query='SELECT * From '.$tableName.' WHERE user_id="'.$id.'"';
    }else{
  		$query='SELECT * From '.$tableName.' ORDER BY `lastname`';
  	}
  
    global $conn;
    $result =mysqli_query($conn,$query);
    return $result;

  };


/*----------------------------
    Function for dynamic Insert Query
 ------------------------------*/
 function getInsertQuery($tableName,$postObject){
  $columnArray = array(); // define column name in array
  $columnValues = array(); // define column value in array
  
  $password = generateRandomString(); // from here we gonna send password/email to user
  foreach ($postObject as $key => $value) {// 
    array_push($columnArray,$key);           //pushing columns names
    array_push($columnValues,'"'.$value.'"'); //pushing columns value
  }
  // Pushing password,usertype into respective array
  array_push($columnArray,'password');
  array_push($columnArray,'user_type');
  array_push($columnValues,'"'.md5($password).'"');
  if ($postObject['inforole']=='CH') {
         $type='"admin"';
      }else{
        $type='"'.$postObject['inforole'].'"';
      }
  array_push($columnValues,$type);
  /*--------   End   -----------*/

  $query = "INSERT INTO ".$tableName." (" . implode(',', $columnArray) . ") VALUES (" . implode(',', $columnValues). ")";
   
    global $conn;
    $resultint = mysqli_query($conn,$query); 
    return  $resultint;
          
 };

 /*----------------------------
    Function for dynamic Update Query
 ------------------------------*/
    function   getUpdatequery($tableName,$updateObject,$id){

     if(isset($updateObject['deactivate'])){
          $updateObject['deactivate']='on';
     }else{

       $updateObject['deactivate']='off';
     }

      $updtevalues=array();

      foreach ($updateObject as $key => $value) {
        $updtevalues[] = "$key = '$value'";


      }
        array_push($updtevalues,"user_type='".$updateObject['inforole']."'");    
             // print_r($updtevalues);
       $updatequery= "UPDATE ".$tableName." SET ". implode(',', $updtevalues). " WHERE user_id=".$id."";
      
        global $conn;
        $resultup=mysqli_query($conn,$updatequery);
        return $resultup;
 }

?>











 
