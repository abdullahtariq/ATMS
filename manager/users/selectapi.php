<?php

 /*----------------------------
    Function for dynamic select Query
 ------------------------------*/

  function select($tableName,$where){
     
      $slct=array();
  foreach ($where as $key => $value) {
      
      $slct[]="$key='$value'";

     }
    //print_r($slct);
     if (count($slct)>0) {

      
     
       $query='SELECT * From '.$tableName.' WHERE '.$slct[0];
        
}
// elseif(!empty($email)){
//       $query='SELECT * From '.$tableName.' WHERE email="'.$email.'"';
//      }
//      elseif(!empty($id)){
//       $query='SELECT * From '.$tableName.' WHERE user_id="'.$id.'"';
//     }
    else{
    $query='SELECT * From '.$tableName;
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
 /*function getInsertQuery($tableName,$postObject){
 	$columnArray = array(); // define column name in array
 	$columnValues = array(); // define column value in array
 	
   	$password = generateRandomString(); // from here we gonna send password/email to user

   
 /*	foreach ($postObject as $key => $value) {// 
 		array_push($columnArray,$key);           //pushing columns names
 		array_push($columnValues,'"'.$value.'"'); //pushing columns value
 	}*/
 	// Pushing password,usertype into respective array
 	/*array_push($columnArray,'password');
 	array_push($columnArray,'user_type');
 	array_push($columnValues,'"'.md5($password).'"');
 	
	array_push($columnValues,$type);*/
  /*--------   End   -----------*/
  // var_dump($postObject);
 /* if ($postObject['inforole']=='CH') {
         $type='"admin"';
      }else{
        $type='"'.$postObject['inforole'].'"';
      }
   
   $email=$postObject['email'];
  
    var_dump($postObject)."<br><br>";
 	$query ='INSERT INTO credentials(email,password,user_type) VALUES ("'.$email.'","'.md5($password).'",'.$type.')';
 
 	 // echo $query;
    global $conn;
    $resultint = mysqli_query($conn,$query)or die(mysqli_error($conn)); 
    //return  $resultint;

    $chquery='INSERT INTO '.$tableName.'(firstname,lastname,deskphone,activefrom,identity_no,continents,mobile,contractstart,contractend,peryear,inforole,finanasdata,finanasoption,funds,created_by)VALUES ("'.$postObject['firstname'].'","'.$postObject['lastname'].'","'.$postObject['deskphone'].'","'.$postObject['activefrom'].'","'.$postObject['identity_no'].'","'.$postObject['continents'].'","'.$postObject['mobile'].'","'.$postObject['contractstart'].'","'.$postObject['contractend'].'","'.$postObject['peryear'].'","'.$postObject['inforole'].'","'.$postObject['finanasdata'].'","'.$postObject['finanasoption'].'","'.$postObject['funds'].'","'.$postObject['created_by'].'")';

    $resultch=mysqli_query($conn,$chquery)or die(mysqli_error($conn));
    return $resultch;
          
 };*/

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
            
             // print_r($updtevalues);
       $updatequery= "UPDATE ".$tableName." SET ". implode(',', $updtevalues). " WHERE user_id=".$id."";
      
        global $conn;
        $resultup=mysqli_query($conn,$updatequery);
        return $resultup;
 }

?>











 
