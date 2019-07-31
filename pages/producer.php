<?php
   include('..\session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transaction</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
                <a class="navbar-brand" href="welcome.php">Transaction</a>
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
                                    <strong>John Smith</strong>
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
                                    <strong>John Smith</strong>
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
                                    <strong>John Smith</strong>
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
                            <a href="transaction.php"><i class="fa fa-table fa-fw"></i>TransactionHistory</a>
                        </li>
                        <li>
                            <a href="form.php"><i class="fa fa-edit fa-fw"></i>TableForms</a>
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
                    <h1 class="page-header">Welcome <?php echo $login_session; ?></h1><h2>Tables</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Producer History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Producer Id</th>
                                        <th>Penalize Tokens</th>
                                        <th>Total Tokens</th>
                                        <th>Verification Status</th>
                                        <th>Transaction Id</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1</td>
                                        <td>500</td>
                                        <td>10000</td>
                                        <td class="center">Y</td>
                                        <td class="center">1</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>2</td>
                                        <td>400</td>
                                        <td>50000</td>
                                        <td class="center">Y</td>
                                        <td class="center">2</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>3</td>
                                        <td>500</td>
                                        <td>7000</td>
                                        <td class="center">Y</td>
                                        <td class="center">3</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>4</td>
                                        <td>5900</td>
                                        <td>80000</td>
                                        <td class="center">Y</td>
                                        <td class="center">4</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td>5</td>
                                        <td>80000</td>
                                        <td>70000</td>
                                        <td class="center">Y</td>
                                        <td class="center">5</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>6</td>
                                        <td>3000</td>
                                        <td>5000</td>
                                        <td class="center">Y</td>
                                        <td class="center">6</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>7</td>
                                        <td>8900</td>
                                        <td>78990</td>
                                        <td class="center">Y</td>
                                        <td class="center">7</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>8</td>
                                        <td>9000</td>
                                        <td>87900</td>
                                        <td class="center">Y</td>
                                        <td class="center">8</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>9</td>
                                        <td>8907</td>
                                        <td>98789</td>
                                        <td class="center">Y</td>
                                        <td class="center">9</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>10</td>
                                        <td>76890</td>
                                        <td>878909</td>
                                        <td class="center">Y</td>
                                        <td class="center">10</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>11</td>
                                        <td>2125</td>
                                        <td>55636</td>
                                        <td class="center">Y</td>
                                        <td class="center">11</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>12</td>
                                        <td>78900</td>
                                        <td>521656</td>
                                        <td class="center">Y</td>
                                        <td class="center">12</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>13</td>
                                        <td>32932</td>
                                        <td>898302</td>
                                        <td class="center">Y</td>
                                        <td class="center">13</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>14</td>
                                        <td>212981</td>
                                        <td>2232333</td>
                                        <td class="center">Y</td>
                                        <td class="center">14</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>15</td>
                                        <td>283728</td>
                                        <td>26736232</td>
                                        <td class="center">Y</td>
                                        <td class="center">15</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>16</td>
                                        <td>27397</td>
                                        <td>2273823</td>
                                        <td class="center">Y</td>
                                        <td class="center">16</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>17</td>
                                        <td>326732</td>
                                        <td>32823828</td>
                                        <td class="center">Y</td>
                                        <td class="center">17</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>18</td>
                                        <td>2382738</td>
                                        <td>79282822</td>
                                        <td class="center">Y</td>
                                        <td class="center">18</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>19</td>
                                        <td>323723</td>
                                        <td>3898929</td>
                                        <td class="center">Y</td>
                                        <td class="center">19</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>20</td>
                                        <td>2839829</td>
                                        <td>372938923</td>
                                        <td class="center">Y</td>
                                        <td class="center">20</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>21</td>
                                        <td>78722</td>
                                        <td>323445</td>
                                        <td class="center">Y</td>
                                        <td class="center">21</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>22</td>
                                        <td>728172</td>
                                        <td>9829829</td>
                                        <td class="center">Y</td>
                                        <td class="center">22</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>23</td>
                                        <td>2873287</td>
                                        <td>23729839</td>
                                        <td class="center">Y</td>
                                        <td class="center">23</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>24</td>
                                        <td>273827</td>
                                        <td>82738273</td>
                                        <td class="center">Y</td>
                                        <td class="center">24</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>25</td>
                                        <td>332323</td>
                                        <td>62736273</td>
                                        <td class="center">Y</td>
                                        <td class="center">25</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>26</td>
                                        <td>3273627</td>
                                        <td>78273229</td>
                                        <td class="center">Y</td>
                                        <td class="center">26</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>27</td>
                                        <td>372873</td>
                                        <td>7328722</td>
                                        <td class="center">Y</td>
                                        <td class="center">27</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>28</td>
                                        <td>328728</td>
                                        <td>27828282</td>
                                        <td class="center">Y</td>
                                        <td class="center">28</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>29</td>
                                        <td>456677</td>
                                        <td>57687999</td>
                                        <td class="center">Y</td>
                                        <td class="center">29</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>30</td>
                                        <td>545678</td>
                                        <td>6464657</td>
                                        <td class="center">Y</td>
                                        <td class="center">30</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>31</td>
                                        <td>21646</td>
                                        <td>565955</td>
                                        <td class="center">Y</td>
                                        <td class="center">31</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>32</td>
                                        <td>576788</td>
                                        <td>265962</td>
                                        <td class="center">Y</td>
                                        <td class="center">32</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>33</td>
                                        <td>657799</td>
                                        <td>2652622</td>
                                        <td class="center">Y</td>
                                        <td class="center">33</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>34</td>
                                        <td>35451</td>
                                        <td>5626526</td>
                                        <td class="center">Y</td>
                                        <td class="center">34</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>35</td>
                                        <td>659262</td>
                                        <td>65562626</td>
                                        <td class="center">Y</td>
                                        <td class="center">35</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>36</td>
                                        <td>656262</td>
                                        <td>62626262</td>
                                        <td class="center">-</td>
                                        <td class="center">36</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>37</td>
                                        <td>5965260</td>
                                        <td>59656226</td>
                                        <td class="center">-</td>
                                        <td class="center">37</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>38</td>
                                        <td>56565</td>
                                        <td>473843</td>
                                        <td class="center">-</td>
                                        <td class="center">38</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>39</td>
                                        <td>4389484</td>
                                        <td>98938399</td>
                                        <td class="center">-</td>
                                        <td class="center">39</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>40</td>
                                        <td>83293829</td>
                                        <td>93029302</td>
                                        <td class="center">-</td>
                                        <td class="center">40</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Opera for Wii</td>
                                        <td>Wii</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nokia N800</td>
                                        <td>N800</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Presto</td>
                                        <td>Nintendo DS browser</td>
                                        <td>Nintendo DS</td>
                                        <td class="center">8.5</td>
                                        <td class="center">C/A<sup>1</sup>
                                        </td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>KHTML</td>
                                        <td>Konqureror 3.1</td>
                                        <td>KDE 3.1</td>
                                        <td class="center">3.1</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>KHTML</td>
                                        <td>Konqureror 3.3</td>
                                        <td>KDE 3.3</td>
                                        <td class="center">3.3</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>KHTML</td>
                                        <td>Konqureror 3.5</td>
                                        <td>KDE 3.5</td>
                                        <td class="center">3.5</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Tasman</td>
                                        <td>Internet Explorer 4.5</td>
                                        <td>Mac OS 8-9</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.1</td>
                                        <td>Mac OS 7.6-9</td>
                                        <td class="center">1</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Tasman</td>
                                        <td>Internet Explorer 5.2</td>
                                        <td>Mac OS 8-X</td>
                                        <td class="center">1</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Misc</td>
                                        <td>NetFront 3.1</td>
                                        <td>Embedded devices</td>
                                        <td class="center">-</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Misc</td>
                                        <td>NetFront 3.4</td>
                                        <td>Embedded devices</td>
                                        <td class="center">-</td>
                                        <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Misc</td>
                                        <td>Dillo 0.8</td>
                                        <td>Embedded devices</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Misc</td>
                                        <td>Links</td>
                                        <td>Text only</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Misc</td>
                                        <td>Lynx</td>
                                        <td>Text only</td>
                                        <td class="center">-</td>
                                        <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Misc</td>
                                        <td>IE Mobile</td>
                                        <td>Windows Mobile 6</td>
                                        <td class="center">-</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Misc</td>
                                        <td>PSP browser</td>
                                        <td>PSP</td>
                                        <td class="center">-</td>
                                        <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeU">
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td class="center">-</td>
                                        <td class="center">U</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Land Usage Information</h4>
                                <p>A trustworthy real estate ownership record and land registry system to diminish the financial burden, time invested and land frauds. It will serve as a foundation for better investments in land, enable the development of a mortgage market and a credit market in general, and become an institution for trust in one of the most fundamental parts of an economy: land and real estate.<a target="_blank" href="#">https:www.blockweb.com</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
