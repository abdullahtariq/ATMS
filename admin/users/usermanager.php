
<?php

   sendmessages();//ftn cal for success message
$continents=array("AS"=>"Asia","EU"=>"Europe","AM"=>"America","AF"=>"Africa","HQ"=>"HQ");
$roleINFO= array("CH"=>"Chief","HM"=>"Hub Manager","AG"=>"Agent","HS"=>"Hub Supervisor","SF"=>"Staff");

 ?>

 <title>Users' List - ATRMS - United Nations</title>
   <div class="container">
   	<div class="text-center">
   		<h2>Users' List</h2>
   	</div>
   	<div class="panel-body">
   		<div class="col-lg-12">
   			<div class="form-group pull-right">
   				<div class="row">
   					<div class="col-sm-2 col-sm-offset-3">
   						<a href="index.php?act=mguc">
   							<input  type="button" value="Create User" id="login-submit"  class="btn btn-primary" ></a>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>

   		<?php
               include 'methods/searchdata.php';
   		?>
   		<div class="table-responsive">
   			<table class="table table-striped table-bordered" id="tblrecord"    >
   				<thead>
   					<tr>
   						<!-- <th>Id</th> -->
                     <th><input class="main_box" type="checkbox" id="main-box"   name="main-box" ></th>
   						<th>Last Name</th>
                     <th>First Name</th>
   						<th>Mobile Phone</th>
   						<th>HUB</th>
   						<th>Role Information</th>
   						<th>Employee Type</th>
   						<th>Contract Type</th>
   						<th>Contract End</th>
   						<th>PER Year/Hour</th>
   					</tr>
   				</thead>
   				<?php
   				$ftnresult=select('users',"","");

   				while ($userResult=mysqli_fetch_assoc($ftnresult)) {
  
   					if ($userResult['deactivate']=='on') {?>

   					<tbody>
   						<div>

                     <?php
                      if ($userResult['inforole']=="AG" || $userResult['direct']=="Direct") {?>
                            
                            <tr class="danger showCursor" id="row-<?php echo $userResult['user_id'] ; ?>" onclick="showRow(event)">
                             <td class="text-center"><input class="mybox" type="checkbox" id="check-box"   name="check-box" disabled="disabled"></td>

                    <?php  }else{?>

                            <tr class="danger showCursor" id="row-<?php echo $userResult['user_id'] ; ?>" onclick="editRow(event)">
                            <td> </td>
                  <?php  } ?>
   								<!-- <td ><?php echo $userResult['identity_no']; ?></td> -->
                           <td class="capitalize"><?php echo $userResult['direct']; ?><?php echo $userResult['lastname'] ?></td>
   								<td class="capitalize"><?php echo $userResult['firstname'] ?></td>
   								<td><?php echo $userResult['mobile']; ?></td>
   								<td><?php echo $continents[$userResult['continents']]; ?></td>
   								<td><?php echo $roleINFO[$userResult['inforole']]; ?></td>
   								<td><?php echo $userResult['finanasdata']; ?></td>
   								<td><?php echo $userResult['finanasoption']; ?></td>
   								<td><?php echo $userResult['contractend']; ?></td>
   								<td><?php echo $userResult['peryear']; ?></td>
   							</tr>
   						</div>
   					</tbody>
   					<?php  }else {?>

   					<tbody>
                  <?php
                      if ($userResult['inforole']=="AG" || $userResult['direct']=="Direct") {?>
                            
                            <tr class="showCursor" id="row-<?php echo $userResult['user_id'] ; ?>" onclick="showRow(event)">
                            <td class="text-center"><input  type="checkbox" class="mybox" id="check-box"  name="check-box"></td>

                    <?php  }else{?>
                               
                            <tr class="showCursor" id="row-<?php echo $userResult['user_id'] ; ?>" onclick="editRow(event)">
                            <td></td>
                  <?php  } ?>
   						
   							<!-- <td><?php echo $userResult['identity_no']; ?></td> -->
   							<td class="capitalize"><?php echo $userResult['lastname'] ?></td>
   							<td class="capitalize"><?php echo $userResult['firstname'] ?></td>
   							<td><?php echo $userResult['mobile']; ?></td>
   							<td><?php echo $continents[$userResult['continents']]; ?></td>
                           <td><?php echo $roleINFO[$userResult['inforole']]; ?></td>
   							<td><?php echo $userResult['finanasdata']; ?></td>
   							<td><?php echo $userResult['finanasoption']; ?></td>
   							<td><?php echo $userResult['contractend']; ?></td>
   							<td><?php echo $userResult['peryear']; ?></td>
   						</tr>
   					</tbody>
   					<?php }

   				}?>

   			</table>
            <div class="panel-body">
         <div class="col-lg-12">
            <div class="form-group pull-right">
               <div class="row">
                  <div class="col-sm-2 col-sm-3">
                     
                        <input  type="button" value="Veiw Reports" id="veiw-rep" onclick="veiwreport()"  class="btn btn-primary" >
                     </div>
                  </div>
               </div>
            </div>
         </div>

   		</div>

   	</div>
