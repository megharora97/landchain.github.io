
<?php
   include('..\session.php');
   include("..\connection.php");
   session_start();
   $errors = array(); 
?>
<?php

 if(isset($_POST['submit2'])) {
$client_name = abc;
 
 $land_title = mysqli_real_escape_string($db,$_POST['land_title']);
 $title_type = mysqli_real_escape_string($db,$_POST['title_type']); 
 $address = mysqli_real_escape_string($db,$_POST['address']);
 $country = mysqli_real_escape_string($db,$_POST['country']); 
 $transaction_id = mysqli_real_escape_string($db,$_POST['transaction_id']);
 $status = mysqli_real_escape_string($db,$_POST['status']); 
 $land_area = mysqli_real_escape_string($db,$_POST['land_area']);
 $emailid = mysqli_real_escape_string($db,$_POST['emailid']);
 $docurl = mysqli_real_escape_string($db,$_POST['docurl']);

 if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

    $query = "INSERT INTO list (client_name, land_title, title_type, address, country, transaction_id, status, land_area, emailid) 
              VALUES('$client_name','$land_title','$title_type','$address','$country','$transaction_id','$status','$land_area','$emailid')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Data Submitted Successfully!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forms</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
            <h2><a class="navbar-brand" href = "..\logout.php">Sign Out</a></h2>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="welcome.html">Forms</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Prashant</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Kiran</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Anil Kumar</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="welcome.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="transaction.php"><i class="fa fa-table fa-fw"></i> Transaction History</a>
                        </li>
                        <li>
                            <a href="form.php"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="producer.php"><i class="fa fa-wrench fa-fw"></i> Producer History<span class="fa arrow"></span></a>
                            
                                
                        
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Session History<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="../login.php">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome <?php echo $login_session; ?></h1><h2>Property Registration!!</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method = "post" target=_blank role="form">
                                        
                                        <div class="form-group">
                                            <label>Client Name: <?php echo $login_session; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Land Title</label>
                                            <input name="land_title" class="form-control" placeholder="Enter land title">
                                        </div>
                                        <div class="form-group">
                                            <label>Title Type</label>
                                            <input name="title_type" class="form-control" placeholder="Enter title type">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="address" class="form-control" placeholder="Enter Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country" class="form-control" placeholder="Enter country">
                                        </div>
                                        <div class="form-group">
                                            <label>Transaction Id</label>
                                            <input name="transaction_id" class="form-control" placeholder="Enter id">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input name="status" class="form-control" placeholder="Enter status">
                                        </div>
                                        <div class="form-group">
                                            <label>Land Area</label>
                                            <input name="land_area" class="form-control" placeholder="Enter land area">
                                        </div>
                                <div class="form-group">
                                            <label>Email id</label>
                                            <input name="emailid" class="form-control"placeholder="email@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Documents</label>
                                            <input name="docurl" type="file">
                                        </div>

                                        <button type="submit" name="submit2" class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-primary">Reset </button>
                                    </form>
                                </div>

<!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h1>Land Title Details</h1>
                                    <form role="form">
                                        
                                            <div class="form-group">


                                                <label>Land Title</label>
                                            <input class="form-control" placeholder="Enter land title ">
                                        </div>
                                        <div class="form-group">
                                            <label>Land Size</label>
                                            <input class="form-control" placeholder="Enter land size">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input class="form-control" placeholder="Enter country">
                                        </div>
                                        <div class="form-group">
                                            <label>Latitude/Longitude</label>
                                            <input class="form-control" placeholder="Enter lat/long">
                                        </div>
                                        <div class="form-group">
                                            <label>Title Type</label>
                                            <input class="form-control" placeholder="Enter title type">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Enter address">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" placeholder="Enter id">
                                        </div>
                                        <div class="form-group">
                                            <label>Postcode</label>
                                            <input class="form-control" placeholder="Enter time">
                                        </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        
                                    </form>
                                    
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
