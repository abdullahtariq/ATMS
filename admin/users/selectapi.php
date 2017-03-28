<?php

 /*----------------------------
    Function for dynamic select Query
 ------------------------------*/

  function select($tableName,$email,$id){
  	if(!empty($email)){
  		$query='SELECT * From '.$tableName.' WHERE email="'.$email.'"';
  	}
    elseif(!empty($id)){
      $query='SELECT * From '.$tableName.' WHERE id="'.$id.'"';
    }else{
  		$query='SELECT * From '.$tableName;
  	}
  

  $result=mysql_query($query)or die(mysql_error());

   
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
 	if ($postObject['urole']=='CH') {
				 $type='"admin"';
			}else{
				$type='"'.$postObject['urole'].'"';
			}
	array_push($columnValues,$type);
  /*--------   End   -----------*/

 	$query = "INSERT INTO ".$tableName." (" . implode(',', $columnArray) . ") VALUES (" . implode(',', $columnValues). ")";
 	 return $query;
          
 };

 /*----------------------------
    Function for dynamic Update Query
 ------------------------------*/
    function   getUpdatequery($tableName,$updateObject,$id){

     
      $updtevalues=array();

      foreach ($updateObject as $key => $value) {
        $updtevalues[] = "$key = '$value'";


      }
            
            // print_r($updtevalues);
       $updatequery= "UPDATE ".$tableName." SET ". implode(',', $updtevalues). " WHERE id=".$id."";
      
     mysql_query($updatequery)or die(mysql_error());

        return $updatequery;
 }

?>











 
