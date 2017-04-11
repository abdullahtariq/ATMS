<?php 
// $create=$_SESSION['created_by'];
   $id=$_GET['id'];
    // echo $create;
    
$result = select("users",array("user_id"=>$id));
// echo $result;

// echo mysql_num_rows($result);
$ftnresult=mysqli_fetch_assoc($result);


$continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
$roleINFO= array("HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor");


?>

<div class="container"> 
     <div class="text-center">
     	<h2>User Detail</h2>
     </div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered" style="width:400px;">
				<thead>
					<tr>
					<?php $date=date_create($ftnresult['lastactivity']); ?>
						<th >
							Name  : <span><?php echo $ftnresult['lastname'].$ftnresult ['firstname'];?></span><br/>
							Email : <?php echo $ftnresult['email'];?><br/>
							Identification : <?php echo $ftnresult['identity_no'];?><br/>
							Last Login : <?php echo date_format($date, 'd-m-Y h:i:s A');  ?>
						</th>  
						
					</tr>
				</thead>
			</table>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered"    >
				<thead>
					<tr>
						<th>Desk Phone</th>
						<th>Mobile Phone</th>
						<th>Activate From</th>
						<th>HUB</th>
						<th>Role Information</th>
						
						
					
					</tr>
				</thead>
				<tbody>
					<tr> 
						<td><?php echo $ftnresult['deskphone']; ?></td>
						<td><?php echo $ftnresult['mobile']; ?></td>
						<td><?php echo $ftnresult['activefrom'];  ?></td>
						<td><?php echo $continents[$ftnresult['continents']];  ?></td>
						<td><?php echo $roleINFO[$ftnresult['inforole']];  ?></td>
						
						
						
					</tr>
				</tbody>
			</table>
		</div>

		</div


