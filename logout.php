<?php

///////////////////Login Form/////////////////////

include 'admin/methods/cmethods.php';

include 'header.php';

   sendmessages(); // ftn cal for error message

?>

<div class="container">

<Title>Logged out Successfully</title>

<br><Br><?php



session_start();
session_destroy();
 echo "<center><font color=red>You have been successfully logged out.</font></center>"; 
 header('Location: index.php');


?>
	<div class="row">

		<div class="col-md-6 col-md-offset-3">

			<div class="panel panel-login panel-head">

				<div class="panel-heading ">

					<div class="row">

						<div class="col-xs-12 text-center">

									<img src="logo.png"style="margin-top:10px;margin-bottom:10px;margin-left:5px;"title="ATRMS"alt="ATRMS"><br>
							

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

								<div class="form-group text-center"> 

									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">

									<label for="remember"> Remember Me</label>

								</div>

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

											<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>

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



<?php 

  include 'footer.php';

?>

