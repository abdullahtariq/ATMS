
<?php     
if(isset($_SESSION["message"]))
	{?>
<div class="container">
	<div id="myalert"  class="alert alert-success" role="alert" collapse>
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<strong> your account has been created !</strong>
	</div>
</div>
<?php  unset($_SESSION["message"]);
}
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
						<a href="index.php?act=mguc">
							<input  type="button" value="Create User" id="login-submit"  class="btn btn-primary" ></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-bordered"    >
				<thead>
					<tr>
						<th>Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<?php
				$ftnresult=select('users',"","");

				while ($userResult=mysqli_fetch_assoc($ftnresult)) { 

                           if ($userResult['deactivate']=='on') {?>
                         
	                <tbody>
	                <div>
						<tr class="tablebck">
							<td ><?php echo $userResult['idnno']; ?></td>
							<td class="capitalize"><?php echo $userResult['fname'] ?></td>
							<td class="capitalize"><?php echo $userResult['lname'] ?></td>
							<td><?php echo $userResult['email']; ?></td>
							<td class="text-center"><a  href="index.php?act=mguv&id=<?php echo $userResult['id'] ; ?>"  data-toggle="tooltip" data-placement="bottom" title="Veiw User Detail">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a></td>	
						</tr>
						</div>
					</tbody>
                           <?php  }else {?>
                           	
                           	<tbody>
					<tr>
						<td><?php echo $userResult['idnno']; ?></td>
						<td class="capitalize"><?php echo $userResult['fname'] ?></td>
						<td class="capitalize"><?php echo $userResult['lname'] ?></td>
						<td><?php echo $userResult['email']; ?></td>
						<td class="text-center"><a  href="index.php?act=mguv&id=<?php echo $userResult['id'] ; ?>"  data-toggle="tooltip" data-placement="bottom" title="Veiw User Detail">
							<i class="fa fa-eye" aria-hidden="true"></i>
						</a></td>
						

						
					</tr>
				</tbody>
                     <?php } 
				
				 }?>

			</table>
		</div>

	</div>
