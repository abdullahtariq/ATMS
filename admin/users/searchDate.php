<?php 
 include '../../common-sql.php';


    $post_at = "";
	$post_at_to_date = "";
	$queryCondition = "";
	if(!empty($_POST["search"]["post_at"])) {			
		$post_at = $_POST["search"]["post_at"];
		// echo $post_at."<br>";
		list($fid,$fim,$fiy) = explode("-",$post_at) ;
		
		$post_at_todate = date('Y-m-d');
		
		if(!empty($_POST["search"]["post_at_to_date"])) {
			$post_at_to_date = $_POST["search"]["post_at_to_date"];
			list($tid,$tim,$tiy) = explode("-",$_POST["search"]["post_at_to_date"]);
			$post_at_todate = "$tiy-$tim-$tid";
			// echo $post_at_todate."<br>";
		}
		
		$queryCondition .= "WHERE strtdate BETWEEN '$fiy-$fim-$fid' AND '" . $post_at_todate . "'";
	}

	$sql = "SELECT * from projects " . $queryCondition . " ORDER BY strtdate desc";
	 print_r($sql)."<br>";
	$result = mysqli_query($conn,$sql);
// print_r($result)."<br>";

while($row = mysqli_fetch_array($result)) {
	$date=date_create($row['strtdate']);
	?>
        <tr>  
        <td><?php echo date_format($date, 'd-m-Y ');  ?></td>
			<td><?php echo $row["ticketing"]; ?></td>
			<td><?php echo $row["training"]; ?></td>
			<td><?php echo $row["meeting"]; ?></td>
			<td><?php echo $row["leave"]; ?></td>
			<td><?php echo $row["others"]; ?></td>
			<td><?php echo $row["meeting"]; ?></td><br>

		</tr>
   <?php
		}
   ?>



?>
 