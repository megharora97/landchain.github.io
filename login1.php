<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		echo "str: ".$str;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM member WHERE username='$username' AND password='$password'";
	$result=mysqli_query($bd, $qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['username'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			header("location: home.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US"> <!--<![endif]-->
<head>
	<title>LANDCHAIN</title>
	<meta name="description" content=" | Real Estate Agency" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="//gmpg.org/xfn/11" />
		<link rel="icon" href="https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/theme51225/favicon.ico" type="image/x-icon" />
		<link rel="pingback" href="https://livedemo00.template-help.com/wordpress_51225/xmlrpc.php" />
	<link rel="alternate" type="application/rss+xml" title="Real Estate" href="https://livedemo00.template-help.com/wordpress_51225/feed/" />
	<link rel="alternate" type="application/atom+xml" title="Real Estate" href="https://livedemo00.template-help.com/wordpress_51225/feed/atom/" />
	<link rel="stylesheet" type="text/css" media="all" href="https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/theme51225/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/theme51225/bootstrap/css/responsive.css" />
	<link rel="stylesheet" type="text/css" media="all" href="https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/css/camera.css" />
	<link rel="stylesheet" type="text/css" media="all" href="https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/theme51225/style.css" />
	<link rel="alternate" type="application/rss+xml" title="Real Estate &raquo; Feed" href="https://livedemo00.template-help.com/wordpress_51225/feed/" />
<link rel="alternate" type="application/rss+xml" title="Real Estate &raquo; Comments Feed" href="https://livedemo00.template-help.com/wordpress_51225/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Real Estate &raquo; Home Comments Feed" href="https://livedemo00.template-help.com/wordpress_51225/home/feed/" />
<link rel='stylesheet' id='flexslider-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/cherry-plugin/lib/js/FlexSlider/flexslider.css?ver=2.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/cherry-plugin/lib/js/owl-carousel/owl.carousel.css?ver=1.24' type='text/css' media='all' />
<link rel='stylesheet' id='owl-theme-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/cherry-plugin/lib/js/owl-carousel/owl.theme.css?ver=1.24' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css?ver=3.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='cherry-plugin-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/cherry-plugin/includes/css/cherry-plugin.css?ver=1.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='cherry-lazy-load-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/cherry-lazy-load/css/lazy-load.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.8' type='text/css' media='all' />
<link rel='stylesheet' id='theme51225-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/theme51225/main-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/css/magnific-popup.css?ver=0.9.3' type='text/css' media='all' />
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/js/jquery-1.7.2.min.js?ver=1.7.2'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/js/jquery-migrate-1.2.1.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-includes/js/swfobject.js?ver=2.2-20120417'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/js/modernizr.js?ver=2.0.6'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/js/jflickrfeed.js?ver=1.0'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/cherry-plugin/lib/js/jquery.easing.1.3.js?ver=1.3'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/js/custom.js?ver=1.0'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/bootstrap/js/bootstrap.min.js?ver=2.3.0'></script>
<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_51225/wp-content/plugins/cherry-plugin/lib/js/elasti-carousel/jquery.elastislide.js?ver=1.2.3'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://livedemo00.template-help.com/wordpress_51225/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://livedemo00.template-help.com/wordpress_51225/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 3.9.25" />
<link rel='canonical' href='https://livedemo00.template-help.com/wordpress_51225/' />
<link rel='shortlink' href='https://livedemo00.template-help.com/wordpress_51225/' />
<script>
 var system_folder = 'https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/admin/data_management/',
	 CHILD_URL ='https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/theme51225',
	 PARENT_URL = 'https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework', 
	 CURRENT_THEME = 'theme51225'</script>
<style type='text/css'>

</style>
<style type='text/css'>
h1 { font: normal 30px/38px Roboto, sans-serif;  color:#111111; }
h2 { font: normal 30px/38px Roboto, sans-serif;  color:#111111; }
h3 { font: normal 30px/38px Roboto, sans-serif;  color:#111111; }
h4 { font: bold 16px/24px Roboto, sans-serif;  color:#111111; }
h5 { font: bold 16px/24px Roboto, sans-serif;  color:#111111; }
h6 { font: normal 14px/20px Roboto, sans-serif;  color:#111111; }
body { font-weight: normal;}
.logo_h__txt, .logo_link { font: normal 40px/40px Roboto, sans-serif;  color:#121212; }
.sf-menu > li > a { font: bold 14px/20px Roboto, sans-serif;  color:#111111; }
.nav.footer-nav a { font: normal 13px/18px Roboto, sans-serif;  color:#ffffff; }
</style>
		<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script src="https://livedemo00.template-help.com/wordpress_51225/wp-content/themes/CherryFramework/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function(){
				jQuery('.sf-menu').mobileMenu({defaultText: "Navigate to..."});
			});
		</script>
	<!--<![endif]-->
	<script type="text/javascript">
		// Init navigation menu
		jQuery(function(){
		// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
				animation: {
					opacity: "show",
					height: "show"
				}, // used to animate the sub-menu open
				speed: "normal", // animation speed
				autoArrows: false, // generation of arrow mark-up (for submenu)
				disableHI: true // to disable hoverIntent detection
			});

		//Zoom fix
		//IPad/IPhone
			var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
				ua = navigator.userAgent,
				gestureStart = function () {
					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
				},
				scaleFix = function () {
					if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
						viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
						document.addEventListener("gesturestart", gestureStart, false);
					}
				};
			scaleFix();
		})
	</script>
	<!-- stick up menu -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
			if(!device.mobile() && !device.tablet()){
				jQuery('header.header').tmStickUp({
					correctionSelector: jQuery('#wpadminbar')
				,	listenSelector: jQuery('.listenSelector')
				,	active: false				,   pseudo: true				});
			}
		})
	</script>
</head>
<body class="home page page-id-203 page-template page-template-page-home-php">
	<div id="motopress-main" class="main-holder">
		<!--Begin #motopress-main-->
		<header class="motopress-wrapper header">
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="5b656e15174dc">

<form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>
</body>
</html>