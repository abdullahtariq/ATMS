<?php
include '../../common-sql.php';
  $id=$_POST['url_id'];
  $to_Date=$_POST['strtdate'];
  $format_T =strtotime($to_Date);
  $T=date('20y-m-d',$format_T);

  $from_Date=$_POST['post_at_to_date'];
  $format_F=strtotime($from_Date);
  $F=date('20y-m-d',$format_F);


 $query='SELECT * FROM projects WHERE strtdate BETWEEN "'.$T.'" AND "'.$F.'" AND user_id="'.$id.'" ORDER BY strtdate desc';
$slct=mysqli_query($conn,$query);
  
	// $record= array();

	// while ($rec_Result=mysqli_fetch_assoc($query)) {
		
	// 	$Q=array();
	// 	$Q['strtdate']=$rec_Result['strtdate'];
 //        $Q['ticketing'] = $rec_Result['ticketing'];
 //        $Q['training'] =$rec_Result['training'];
 //        $Q['meeting'] = $rec_Result['meeting'];
 //        $Q['leave'] = $rec_Result['leave'];
 //        $Q['others'] = $rec_Result['others'];
 //        array_push($record, $Q);

	// }
 //          echo json_encode($record);


include "treplicateTable.php";


?>