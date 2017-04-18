
<?php     
    sendmessages();//ftn cal for success message
    $idnos=$_SESSION['identity_no'];
     // echo $idnos;
    $continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
$roleINFO= array("CH"=>"Chief","HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor","SF"=>"Staff");
$fundsource=array("RB-10"=>"RB (10 UNA)","2QS"=>"2QSA (Support Account)","10-RC"=>"10 RCR (Cost Recovery)");
    ?>

    <div class="container">
    	<div class="text-center">
    		<h2>Users Record List</h2>
    	</div>
    	<div class="panel-body">
    		<div class="col-lg-12">
    			<div class="form-group pull-right">
    				<div class="row">
    					<div class="col-sm-2 col-sm-offset-3">
    						<a href="index.php?act=hmc">
    							<input  type="button" value="Create User" id="login-submit"  class="btn btn-primary" ></a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
<!-- <?php
               // include '../admin/methods/searchdata.php';
               
   		?> -->
    		<div class="table-responsive">
    			<table class="table table-striped table-bordered"    >
    				<thead>
    					<tr>
    						<th>First Name</th>
    						<th>Last Name</th>
    						<th>Email</th>
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
    						<th class="text-center">Action</th>
    					</tr>
    				</thead>
    				<?php
    				$ftnresult=select('users',array("created_by"=>$idnos));//where clause in associativearray


    				while ($userResult=mysqli_fetch_assoc($ftnresult)) { 

    					if ($userResult['deactivate']=='on') {?>

    					<tbody>
    						<div>
    							<tr class="danger">
    								<!-- <td ><?php echo $userResult['identity_no']; ?></td> -->
    								<td class="capitalize"><?php echo $userResult['firstname'] ?></td>
    								<td class="capitalize"><?php echo $userResult['lastname'] ?></td>
    								<td><?php echo $userResult['email']; ?></td>
    								<td><?php echo $userResult['deskphone']; ?></td>
    								<td><?php echo $userResult['mobile']; ?></td>
    								<td><?php echo $userResult['activefrom']; ?></td>
    								<td><?php echo $continents[$userResult['continents']]; ?></td>
                                <td><?php echo $roleINFO[$userResult['inforole']]; ?></td>
    								<td><?php echo $userResult['finanasdata']; ?></td>
    								<td><?php echo $userResult['finanasoption']; ?></td>
    								<td><?php echo $userResult['contractstart']; ?></td>
    								<td><?php echo $userResult['contractend']; ?></td>
    								<td><?php echo $userResult['peryear']; ?></td>
    								<td><?php echo $fundsource[$userResult['funds']]; ?></td>
    								<td class="text-center"><a  href="index.php?act=hmv&id=<?php echo $userResult['user_id'] ; ?>" >
    									<input type="button" class="btn btn-primary" value="Veiw">
    								</a><a href="index.php?act=hmupdate&id=<?php echo $userResult['user_id'] ; ?>"><input type="button" class="btn btn-primary" value="Edit"></a></td>	
    							</tr>
    						</div>
    					</tbody>
    					<?php  }else {?>

    					<tbody>
    						<tr>
    							<!-- <td><?php echo $userResult['identity_no']; ?></td> -->
    							<td class="capitalize"><?php echo $userResult['lastname'] ?></td>
    							<td class="capitalize"><?php echo $userResult['firstname'] ?></td>
    							<td><?php echo $userResult['email']; ?></td>
    							<td><?php echo $userResult['deskphone']; ?></td>
    							<td><?php echo $userResult['mobile']; ?></td>
    							<td><?php echo $userResult['activefrom']; ?></td>
    							<td><?php echo $continents[$userResult['continents']]; ?></td>
                                <td><?php echo $roleINFO[$userResult['inforole']]; ?></td>
    							<td><?php echo $userResult['finanasdata']; ?></td>
    							<td><?php echo $userResult['finanasoption']; ?></td>
    							<td><?php echo $userResult['contractstart']; ?></td>
    							<td><?php echo $userResult['contractend']; ?></td>
    							<td><?php echo $userResult['peryear']; ?></td>
    							<td><?php echo $fundsource[$userResult['funds']]; ?></td>
    							<td class="text-center"><a  href="index.php?act=hmv&id=<?php echo $userResult['user_id'] ; ?>">
    								<input type="button" class="btn btn-primary" value="Veiw">
    							</a><a href="index.php?act=hmupdate&id=<?php echo $userResult['user_id'] ; ?>"><input type="button" class="btn btn-primary" value="Edit"></a></td>

    						</tr>
    					</tbody>
    					<?php } 

    				}?>

    			</table>
    		</div>

    	</div>
