<?php session_start(); ?>
<title>Password Reset</title>
<?php require("connection.php");  ?>
					
<?php
	if(isset($_GET['token']) && isset($_GET['ip']) && isset($_GET['info'])){
		$token=mysqli_real_escape_string($db,$_GET['token']);
		$time=mysqli_real_escape_string($db,$_GET['ip']);
		$sql="select * from password_tokens where link='{$token}' order by id DESC limit 1";
		$result=mysqli_query($db,$sql);
		echo $sql;
		if(!mysqli_error($db)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
				extract($row);
				$link_time=strtotime($time);
				$system_time=strtotime(date("Y-m-d H:i:s"));
				$minutes=($system_time-$link_time)/60;
				if($minutes<LINK_EXPIRATION_TIME){
					$msg='  <div >
						<p><strong>FAILURE: </strong>This link is expired.Please click <a href="forgetpassword.php">here</a> to try again.</p>
					</div>';
				}else{
					if(isset($_POST['submit'])){
					$password=mysqli_real_escape_string($db,$_POST['password']);
					
					$sql1="update `member set password='{$password}' where username='{$email}'";
					//echo $sql1;
					$result1=mysqli_query($db,$sql1);
					if(!mysqli_error($db)){
						$msg='  <div >
						<p><strong>Success: </strong>Thank you. Your password reset successfully. Please click <a href="login.php">here</a> to Login. </p>
					</div>';
						
					}else{
						$msg='  <div >
						<p><strong>FAILURE: </strong>Oops Something went wrong.Please Try Again.</p>
					</div>';
					}
					}
					
				  ?>
				<!-- Main content wrapper -->
				 <div class="widget" style="height:230px;">	
						<div class="title"><img src="images/icons/dark/files.png" alt="" class="titleIcon" /><h6>Password Reset</h6></div>
						<form method="post" action="<?php echo htmlentities($_SERVER['REQUEST_URI']); ?>" id="validate" class="form">
							<fieldset>
								<div class="formRow">
									<label for="pass">New Password:</label>
									<div class="loginInput"><input type="password" name="password" class="validate[required]" id="pass" /></div>
									<div class="clear"></div>
								</div>           
								<div class="formRow">
									<label for="pass">Confirm Password:</label>
									<div class="loginInput"><input type="password" name="password1" class="validate[required,equals[pass]]" id="passc" /></div>
									<div class="clear"></div>
								</div>        
									
								
								<div class="loginControl">
									
									<input name="submit" type="submit" value="Reset Password" class="dredB logMeIn" />
									<div class="clear"></div>
								</div>
							</fieldset>
						</form>  
					</div>
			



			
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
			
                    <div class="panel-heading">
                        <div class="panel-title">Login/Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgetpassword.php">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
							
                        <form method = "post" id="loginform" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];} ?>" id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" />                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input value="" id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input name="login_user" type="submit" value = "Login" id="btn-login" class="btn btn-success" />
                                      <a id="btn-fblogin" href="index.php" class="btn btn-primary">Cancel</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
						
						
				<?php 
				}
			}else{
				$msg='  <div >
						<p><strong>FAILURE: </strong>Invalid Password Reset Link.</p>
					</div>';
			}
		}else{
			$msg='  <div >
						<p><strong>FAILURE: </strong>Oops Something went wrong.Please Try Again.</p>
					</div>';
		}
	}else{
		$msg='  <div >
						<p><strong>FAILURE: </strong>Invalid Password Reset Link.</p>
					</div>';
	}
?>

				
<?php
							if(isset($msg) && $msg!=null){
								echo $msg;
							}
						?>
		</div>	