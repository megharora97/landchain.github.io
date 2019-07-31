<?php
	//Start session
	session_start();
	//Unset the variables stored in session
      if(session_destroy()) {
      header("Location: login.php");
   }
?>