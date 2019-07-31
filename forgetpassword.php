<?php session_start();
	require("connection.php");
?>
<?php
//Load Composer's autoloader
if(isset($_POST['submit'])){
require 'PHPMailerAutoload.php';
$email=$_POST['email'];
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	$sql="select * from member where username='{$email}'";
	$result=mysqli_query($db,$sql);
	if(!mysqli_error($db)){
		if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		extract($row);
		$sql="insert into password_tokens (id,link,email) values(null,'".md5($email)."','$email')";
							//echo $sql;
					$result=mysqli_query($db,$sql);
					if(!mysqli_error($db)){
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "blockweb2018@gmail.com";                 // SMTP username
    $mail->Password = "block2018web";                           // SMTP password
    $mail->SMTPSecure = "ssl";                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->SetFrom('blockweb2018@gmail.com');
    $mail->addAddress($_POST['email']);     // Add a recipient
 //   $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
 //   $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

	$registration_link="http://localhost/blockweb/passwordreset.php?ip=".time()."&info=".sha1(date("Y-m-d"))."&token=".md5($email);

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = "
						Dear $fname $lname,<br>
						We have received password reset request from you on LandChain.<br>
						Please Click on the following link to reset your password<br>
						$registration_link <br><br>
							
						Link will expire after ". LINK_EXPIRATION_TIME ." Minutes.
						";
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
					}else{
						$msg='<div class="nNote nFailure hideit">
						<p><strong>FAILURE: </strong>Oops Something went wrong.Please try again.</p>
						</div>';
		}
		}else{
				$msg='<div class="nNote nFailure hideit">
				<p><strong>FAILURE: </strong>Invalid Email Address. Please Try Again</p>
				</div>';
			}
		}else{
		echo "<div class='alert error'>Error</div>";
		}
}
?>
<!DOCTYPE html>
<head>
<title>Forget Password</title>
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
                        <div class="panel-title">Forgot Password</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
							
                        <form method = "post" id="loginform" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];} ?>" id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email" />
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input name="submit" type="submit" value = "Proceed" id="btn-login" class="btn btn-success" />
                                      <a id="btn-fblogin" href="login.php" class="btn btn-primary">Cancel</a>

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
