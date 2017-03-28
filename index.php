<?php
///////////////////Login Form/////////////////////
include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login panel-head">
				<div class="panel-heading ">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2>Login</h2>
						</div>
						
					</div>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">

							<form id="login-form" action="auth.php" method="post" role="form" style="display: block;">
								<div class="form-group">
									<input type="text"  name="email" id="Email" tabindex="1" class="form-control" placeholder="Email" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<!-- <div class="form-group text-center"> 
									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									<label for="remember"> Remember Me</label>
								</div> -->
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" value="Submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
										</div>
									</div>
								</div>
								
								<div class="form-group" > 
									<div class="col-lg-12">
										<div class="text-center">
											<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
										</div>
									</div>
								</div>
							</div>
							
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>