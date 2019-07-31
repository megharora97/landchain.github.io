<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Dashboard | LANDCHAIN</title>
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
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
       </div>
       </div> 
    </div>
</div>

   </body>
   
</html>