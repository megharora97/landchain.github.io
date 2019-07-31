<?php
include("connection.php");
   session_start();
   $errors = array(); 
   if(isset($_POST['login_user'])) {
      // username and password sent from form 
	  
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);	  
	$sql = "SELECT mem_id FROM member WHERE username = '$myusername' and password = '$mypassword'";
	//echo $sql;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<?php
   if(isset($_POST['reg_user'])) {
	   
   }
?>
<?php
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $fname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lname = mysqli_real_escape_string($db, $_POST['lastname']);
  $password_1 = mysqli_real_escape_string($db, $_POST['passwd_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['passwd_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM member WHERE username='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO member (username, password, fname, lname) 
  			  VALUES('$email', '$password', '$fname', '$lname')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}	   
?>
<!DOCTYPE html>
<head>
<title>LOGIN</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="fullwidth.css" rel="stylesheet" type="text/css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="row backgroundimg">
    <div class="container">  
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
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form method = "post" id="signupform" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd_1" placeholder="Password">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd_2" placeholder="Confirm Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
								   <button id="btn-signup" type="submit" class="btn btn-info" name="reg_user"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
								<button id="btn-reset" type="submit" class="btn btn-info" name="reset"><i class="icon-hand-right"></i> &nbsp RESET</button>
                                    </div>
                                </div>
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
</div>
</body>
</html>
    