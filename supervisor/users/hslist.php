<?php
// echo "MNAZAT";

     
    sendmessages();//ftn cal for success message
     // $idnos=$_SESSION['identity_no'];
     // echo $idnos;
    $create=$_SESSION['created_by'];

        $hub=$_SESSION['continents'];
        // echo $hub;

     // echo $create;
    $continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
$roleINFO= array("HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor");
     
?>
<title>Users' List - ATRMS - United Nations</title>
<div class="container">
	<div class="text-center">
		<h2>Users' List</h2>
	</div><br>
	
 <?php
               include '../admin/methods/searchdata.php';
   		?> 
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="tblrecord">
				<thead>
					<tr>    
                            <th>Last Name</th>
    						<th>First Name</th>
    						<th>Email</th>
    						<th>Desk Phone</th>
    						<th>Mobile Phone</th>
    						<th>Activate From</th>
    						<th>HUB</th>
    						<th>Role Information</th>
    						<th class="text-center">Action</th>
    					</tr>
				</thead>
				<?php
				$ftnresult=select('users',array("created_by"=>$create,"continents"=>$hub));
				 

				while ($userResult=mysqli_fetch_assoc($ftnresult)) { 

                           if ($userResult['deactivate']=='on') {?>
                         
	                <tbody>
	                <div>
	             				<tr class="danger">
    								<!-- <td ><?php echo $userResult['identity_no']; ?></td> -->

                                    <td class="capitalize"><?php echo $userResult['lastname'] ?></td>
    								<td class="capitalize"><?php echo $userResult['firstname'] ?></td>    								<td><?php echo $userResult['email']; ?></td>
    								<td><?php echo $userResult['deskphone']; ?></td>
    								<td><?php echo $userResult['mobile']; ?></td>
    								<td><?php echo $userResult['activefrom']; ?></td>
    								<td><?php echo $continents[$userResult['continents']]; ?></td>
    								<td><?php echo $roleINFO[$userResult['inforole']]; ?></td>
    								<td class="text-center"><a  href="index.php?act=hubsv&id=<?php echo $userResult['user_id'] ; ?>" >
    									<input type="button" class="btn btn-primary" value="Veiw">
    								</a></td>	
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
    							<td class="text-center"><a  href="index.php?act=hubsv&id=<?php echo $userResult['user_id'] ; ?>" >
    									<input type="button" class="btn btn-primary" value="Veiw">
    								</a></td>	

    						</tr>
				</tbody>
                     <?php } 
				
				 }?>

			</table>
		</div>

	</div>


