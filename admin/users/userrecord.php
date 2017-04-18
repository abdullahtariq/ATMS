<?php 

$result = select("users","",$_GET['id']);

// echo mysql_num_rows($result);
$ftnresult=mysqli_fetch_assoc($result);



$continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
$roleINFO= array("CH"=>"Chief","HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor","SF"=>"Staff");
$fundsource=array("RB-10"=>"RB (10 UNA)","2QS"=>"2QSA (Support Account)","10-RC"=>"10 RCR (Cost Recovery)");
?>

<div class="container"> 
     <div class="text-center">
     	<h2>User Detail</h2>
     </div>
	<div class="panel-body">
		<div class="col-lg-12">
			<div class="form-group pull-right">
				<div class="row">
					<div class="col-sm-2 col-sm-offset-3">
						<a  data-toggle="tooltip" data-placementhref="index.php?act=mgupdate&id=<?php echo $ftnresult['user_id'] ; ?>"="bottom" title="Edit">
							<input type="button" value="Edit" id="login-submit"  class="btn btn-primary" ></a>
						</div>
						
					</div>
				</div>
			</div>
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
						<th>Employee Type</th>
						<th>Contract Type</th>
						<th>Contract Start</th>
						<th>Contract End</th>
						<th>PER Year/Hour</th>
						<th>Funding Sources</th>
					
					</tr>
				</thead>
				<tbody>
					<tr> 
						<td><?php echo $ftnresult['deskphone']; ?></td>
						<td><?php echo $ftnresult['mobile']; ?></td>
						<td><?php echo $ftnresult['activefrom'];  ?></td>
						<td><?php echo $continents[$ftnresult['continents']];  ?></td>
						<td><?php echo $roleINFO[$ftnresult['inforole']];  ?></td>
						<td><?php echo $ftnresult['finanasdata'];?></td>
						<td><?php echo $ftnresult['finanasoption'];  ?></td>
						<td><?php echo $ftnresult['contractstart'];  ?></td>
						<td><?php echo $ftnresult['contractend'];  ?></td>
						<td><?php echo $ftnresult['peryear'];  ?></td>
						<td><?php echo $fundsource[$ftnresult['funds']];  ?></td>
						
					</tr>
				</tbody>
			</table>
		</div>

		</div


