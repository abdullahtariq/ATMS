<?php
  session_start();
include '../common-sql.php';
   // print_r($_SESSION);
  $user=$_SESSION['user_id'];
  // echo $user."<br>";
$type=$_POST['type'];
if($type == 'new') {
  $start= $_POST['strtdate'].'+'.$_POST['zone'];;
  $ticket = $_POST['ticketing'];
  $meet   = $_POST['meeting'];  
  $leave  = $_POST['leave'];
  $other  =$_POST['others'];
  $query = "INSERT INTO projects(`user_id`,`strtdate`, `ticketing`, `meeting`, `leave`,`others`) VALUES($user,'$start','$ticket','$meet','$leave','$other')";
  echo $query;
  
  $insert = mysqli_query($conn,$query);
  $lastid = mysqli_insert_id($conn);
  
  echo json_encode(array('status'=>'success','eventid'=>$lastid));
}
 if($type == 'fetch') {
     $events = array();
    $query = mysqli_query($conn, "SELECT * FROM projects");
    while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
     $e = array();
     $e['id'] = $fetch['id'];
     $e['start'] = $fetch['strtdate'];
     $e['end'] = $fetch['enddate'];
     $e['ticketing'] = $fetch['ticketing'];
     $e['meeting'] = $fetch['meeting'];
     $e['leave'] = $fetch['leave'];
     $e['others'] = $fetch['others'];
     $e['allday'] = true;
     $e['title']='Veiw Details';
     array_push($events, $e);
    }
     echo json_encode($events);
}




?>