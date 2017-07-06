<?php
///////////////////Login Form/////////////////////
include 'admin/methods/cmethods.php';
include 'header.php';
// print_r($_SESSION);
   sendmessages(); // ftn cal for error message
   if (isset($_SESSION)) {
   	if (isset($_SESSION['user_type'])=="admin") {
   		header('Location:admin/index.php?act=mgu');
   	}elseif(isset($_SESSION['user_type'])=="HM"){
   		header('Location:manager/index.php?act=hmu');
   	}elseif (isset($_SESSION['user_type'])=="HS") {
   		header('Location:supervisor/index.php?act=hubsu');
   	}
   }
   ?>
   <div class="container">

   	<div class="row">
   		<div class="col-md-6 col-md-offset-3">
   			<div class="panel panel-login panel-head">
   				<div class="panel-heading ">
   					<div class="row">
   						<div class="col-xs-12 text-center">
   							<img src="logo.png"style="margin-top:10px;margin-bottom:10px;margin-left:5px;"title="ATRMS"alt="ATRMS">
   						</div>

   					</div>
   					<hr>
   				</div>
   				<div class="panel-body">
   					<div class="row">
   						<div class="col-lg-12" id="login">

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

   						</form>
                            
                            <div class="col-lg-12">
                           <div class="text-center">
                           
                                <a id="btn-pwd" tabindex="5" class="forgot-password" onclick="forget()">Forgot Password?</a>
                              
                           </div>
                        </div>
                    </div>
   						<div class="col-lg-12" id="forget" style="display: none;">
   							<div class="form-group">
   								<input type="text"  name="email" id="showEmail" tabindex="1" class="form-control" placeholder="Email" value="">
   							</div>
   							<div class="row">
   								<div class="col-sm-6 col-sm-offset-3">
   									<input type="button" value="Submit" id="login-submit" tabindex="4" onclick="sendForgetPwd(this.value)" class="form-control btn btn-login" value="">
   								</div>
   							</div>
   						</div><br>
   						<div class="form-group" > 
   							
                       
                        <div class="row">
                           <div class="text-center " >
                              <a id="btn-show" tabindex="5" class="forgot-password" style="display: none;" onclick="forget()">Back to Login</a>
                           </div>
                           </div>
                        </div>
   						</div>
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
