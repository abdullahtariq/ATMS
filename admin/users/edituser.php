<?php
$id="";

if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id=$_GET['id']; 

}

$result = select("users","",$id);

// echo mysql_num_rows($result);
$ftnresult=mysqli_fetch_assoc($result);

// print_r($ftnresult);

?>
<div class="container">
	<div class="formheading text-center">
		<h2>Edit Form Now</h2>
	</div> 
	<div class="col-md-1"></div>
	<div class="col-md-10">


		<form action="index.php?act=mgusucess" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo  $ftnresult['id']; ?>">

			<div class="common-border">
				<div class="basicstn">
					<h2>Basic Info</h2>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>First Name</label>
							<input  type="text" class="form-control capitalize" name="fname" value="<?php echo  $ftnresult['fname']; ?>" id="Fname" >
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Last Name</label>
							<input  type="text" class="form-control capitalize" name="lname" value="<?php echo  $ftnresult['lname']; ?>" id="Lname" >
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Email address</label>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="email" name="email" value="<?php echo  $ftnresult['email']; ?>" class="form-control" id="Email">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Desk Phone</label>
							<input type="text" class="form-control" name="dphone" value="<?php echo  $ftnresult['dphone']; ?>" id="Dphone" value="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Activate From</label>
							<div class='input-group input-append date' id="dp3" data-date-format="dd-mm-yyyy">
								<span class="input-group-addon add-on">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input readonly="readonly" data-format="hh:mm:ss" name="actfrom" value="<?php echo  $ftnresult['actfrom']; ?>"type='text' class="form-control span2" />

							</div>

						</div>
					</div>
					<div class="col-md-6 col-sm-12" > 
						<label for="exampleInputhub1">HUB</label>    		
						<select id="Cnthub" class="selectpicker" name="cnthub" data-value="<?php echo  $ftnresult['cnthub']; ?>">
							<option value="AS">Asia</option>
							<option value="EU">Europe</option>
							<option value="AM" >America</option>
							<option value="AF">Africa</option>
							<option value="HQ">HQ</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<label>Identification Number</label>
						<div class="input-group" style="width:100%;">

							<input type="text" class="form-control" name="idnno" value="<?php echo  $ftnresult['idnno']; ?>" id="Idntnumber" readonly="readonly">
						</div>
					</div>
					<div class="col-md-6 col col-sm-12">
						<label>Role Information</label>
						<div class="form-group">
							<select id="urole" class="selectpicker" name="urole" data-value="<?php echo  $ftnresult['urole']; ?>">
								<option value="CH">Chief</option>
								<option value="HM">Hub Manager</option>
								<option value="AG">Agent</option>
								<option value="HS">Hub Supervisor</option>
								<option value="SF">Staff</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="form-group">
							<label>Mobile Number</label>
							<input type="text" class="form-control"  name="Mnumber"  id="Mnumber" value="<?php echo  $ftnresult['Mnumber']; ?>" >
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
			<div class="common-border">
				<div class="basicstn">
					<h2>Financials</h2>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<label>Employee Type</label>
						<div class="form-group">
							<select onchange="changeOpt(event)" id="findata" class="selectpicker" name="findata" data-value="<?php echo  $ftnresult['findata']; ?>">
								<option value="-1">Select One</option>
								<option value="un employee">UN Employee</option>
								<option value="un family contractor">UN Family Contractor</option>
								<option value="consultants">Consultants</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<label id="typefd" style="display: none;">Contract Type</label>
						<div class="form-group">
							<input id="selectedFin" type="hidden" value="<?php echo  $ftnresult['finopt']; ?>">
							<div id="newdrpdown" >

							</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Contract Start</label>
							<div class='input-group input-append date' id="dp4" data-date-format="dd-mm-yyyy">
								<span class="input-group-addon add-on">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input readonly="readonly" data-format="hh:mm:ss" type='text' class="form-control span2" name="contsrt" value="<?php echo  $ftnresult['contsrt']; ?>" />

							</div>

						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Contract End</label>
							<div class='input-group input-append date' id="dp5" data-date-format="dd-mm-yyyy">
								<span class="input-group-addon add-on">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
								<input readonly="readonly" data-format="hh:mm:ss" type='text' class="form-control span2" name="contend" value="<?php echo  $ftnresult['contend']; ?>" />

							</div>

						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-sm-12 col-md-6">
						<label>Funding Sources</label>
						<div class="form-group">
							<select id="fndsource" class="selectpicker" name="funds" data-value="<?php echo  $ftnresult['funds']; ?>">
								<option value="-1">Select One</option>
								<option value="RB-10">RB (10 UNA)</option>
								<option value="2QS"> 2QSA (Support Account)</option>
								<option value="10-RC">10 RCR (Cost Recovery)</option>
							</select>

						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label id="pryear" style="display: none;">Annual Salary</label>
							<label id="prhour" style="display: none;">Hourly Rate</label>
							<div style="display:none;" id="salaryInput">
								<input type="text" class="form-control"  name="peryear"
								value="<?php echo  $ftnresult['peryear']; ?>"
								>
							</div>
						</div>
					</div>  

				</div>	

				<div class=" form-group"> 
					<label>Deactivate Account</label>
					<input  id="check" type="checkbox" name="Deactivate"  onclick="Deactivate()">
				</div>
				<input type="submit" value="submit" class="btn btn-success ">
				
				
			</div>
		</form>


	</div>
	
</div>