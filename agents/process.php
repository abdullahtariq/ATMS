<?php
  session_start();
include '../common-sql.php';
   // print_r($_SESSION);
  $user=$_SESSION['user_id'];
  // echo $user."<br>";
$type=$_POST['type'];
if($type == 'new') {
  $start= $_POST['strtdate'].'+'.$_POST['zone'];
  $ticket = $_POST['ticketing'];
  $meet   = $_POST['meeting'];  
  $leave  = $_POST['leave'];
  $other  = $_POST['others'];
   
   $slctquery='SELECT * FROM projects WHERE strtdate="'.$start.'" AND user_id="'.$user.'"';
   // echo  $slctquery;
   $result =mysqli_query($conn,$slctquery);
   if (mysqli_num_rows($result)> 0) {
    
    echo json_encode(array('status'=>'failed','message'=>'Data is already existed'));

}else{

  $query = "INSERT INTO projects(`user_id`,`strtdate`, `ticketing`, `meeting`, `leave`,`others`) VALUES($user,'$start','$ticket','$meet','$leave','$other')";
 
  $insert = mysqli_query($conn,$query);
   $lastid = mysqli_insert_id($conn);
  echo json_encode(array('status'=>'success','eventid'=>$lastid,'start'=>$start,'ticketing'=>$ticket,'meeting'=>$meet,'leave'=>$leave,'others'=>$other));
  
  }
 
}
 if($type == 'fetch') {
     $events = array();
    $query = mysqli_query($conn, 'SELECT * FROM projects WHERE user_id="'.$user.'"');
    while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
     $e = array();
     $e['id'] = $fetch['id'];
     $e['start'] = $fetch['strtdate'];
     $e['end'] = $fetch['enddate'];
     $e['ticketing'] = $fetch['ticketing'];
     $e['meeting'] = $fetch['meeting'];
     $e['leave'] = $fetch['leave'];
     $e['others'] = $fetch['others'];
     $e['allday'] = false;
     $e['title']='Veiw Details';
     array_push($events, $e);
    }
     echo json_encode($events);
}




?>