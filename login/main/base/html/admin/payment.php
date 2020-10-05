<?php include 'edit/userSessionCheck.php' ?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>KSJConnects - Admin (Add/Update/Delete Payment Records)</title>

    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
    <link rel="stylesheet" href="../../../global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
    <link rel="stylesheet" href="../../assets/examples/css/tables/datatable.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../../../global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../global/fonts/material-design/material-design.css">
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="../../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>

</head>

<body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
                <i class="icon wb-more-horizontal" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                <img class="navbar-brand-logo" src="../../assets/images/logo.png" title="KSJConnects">
                <span class="navbar-brand-text hidden-xs-down"> KSJConnects</span>
            </div>

        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="nav-item hidden-float" id="toggleMenubar">
                        <a class="nav-link" data-toggle="menubar" href="#" role="button">
                            <i class="icon hamburger hamburger-arrow-left">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>


                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                            <span class="avatar avatar-online">
                                <?php if (!$list['picture']) {
                                    echo '<img class="card-img-top" src="https://freepikpsd.com/wp-content/uploads/2019/10/default-profile-image-png-1-Transparent-Images.png" alt="Card image cap">';
                                } else {
                                    echo '<img class="card-img-top" src="profileimg/imageView.php?username=' . $_SESSION['username'] . '" alt="Card image cap">';
                                } ?>
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="profile.php" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                            <div class="dropdown-divider" role="presentation"></div>
                            <a class="dropdown-item" onclick="JSconfirm();" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
            </div>
            <!-- End Navbar Collapse -->

            <!-- Site Navbar Seach -->
            <div class="collapse navbar-search-overlap" id="site-navbar-search">
                <form role="search">
                    <div class="form-group">
                        <div class="input-search">
                            <i class="input-search-icon wb-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" name="site-search" placeholder="Search...">
                            <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Site Navbar Seach -->
        </div>
    </nav>
    <div class="site-menubar">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <!-- General Stuff-->
                        <li class="site-menu-category">General</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="index.php">
                                        <span class="site-menu-title">Dashboard</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="profile.php">
                                        <span class="site-menu-title">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Payment Stuff-->
                        <li class="site-menu-category">Payment System</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-payment" aria-hidden="true"></i>
                                <span class="site-menu-title">Payment Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="payment.php">
                                        <span class="site-menu-title">Resident Payment</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Management Stuff-->
                        <li class="site-menu-category">User Management</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                                <span class="site-menu-title">User Management Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="addremoveusers.php">
                                        <span class="site-menu-title">Manipulate User Accounts</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="residentapplication.php">
                                        <span class="site-menu-title">Resident Application</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="roommgmt.php">
                                        <span class="site-menu-title">Room List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Complaint System Information Stuff-->
                        <li class="site-menu-category">Complaint System</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-alert" aria-hidden="true"></i>
                                <span class="site-menu-title">Complaint System Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="manipulatecomplaint.php">
                                        <span class="site-menu-title">Resident's Complaints</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Facility Booking Stuff-->
                        <li class="site-menu-category">Facility Booking System</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-list" aria-hidden="true"></i>
                                <span class="site-menu-title">Facility Booking Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item ">
                                    <a class="animsition-link" href="facilitylist">
                                        <span class="site-menu-title">Facility List</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item ">
                                    <a class="animsition-link" href="facilitybooking">
                                        <span class="site-menu-title">Facility Bookings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Student Merit Stuff-->
                        <li class="site-menu-category">Resident Merit System</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-emoticon" aria-hidden="true"></i>
                                <span class="site-menu-title">Merit Submenu</span>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item ">
                                        <a class="animsition-link" href="manipulatemerit.php">
                                            <span class="site-menu-title">Resident's Merit</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item ">
                                        <a class="animsition-link" href="createprogram.php">
                                            <span class="site-menu-title">Create Programme</span>
                                        </a>
                                    </li>
                                </ul>
                            </a>
                        </li>

                        <!-- Sticker App Stuff-->
                        <li class="site-menu-category">Sticker Application</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                                <span class="site-menu-title">Sticker Submenu</span>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item ">
                                        <a class="animsition-link" href="stickerapp.php">
                                            <span class="site-menu-title">Resident's Sticker App</span>
                                        </a>
                                    </li>
                                </ul>
                            </a>
                        </li>


                        <!-- Announcement System-->
                        <li class="site-menu-category">Announcement System</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-info" aria-hidden="true"></i>
                                <span class="site-menu-title">Announcement Submenu</span>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item ">
                                        <a class="animsition-link" href="announcement.php">
                                            <span class="site-menu-title">Annoucement CRUD</span>
                                        </a>
                                    </li>
                                </ul>
                            </a>
                        </li>


                    </ul>
                    <div class="site-menubar-section">
                        <h5>
                            Sprint 3 Progress
                            <span class="float-right">100%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 100%;" role="progressbar"></div>
                        </div>
                        <h5>
                            Product Release
                            <span class="float-right">100%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 100%;" role="progressbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Payment Management / Payment Records Management</li>
            </ol>
            <h1 class="page-title">Payment Records</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="card">
                <div class="card-header">
                    Semester Payments
                </div>
                <div class="card-body">
                    <h5 class="card-title">Semester Restart Controls</h5>
                    <p class="card-text">To Restart for a new semester payment, kindly press DELETE (records for this semester) THEN insert</p>
                    <form action="" method="post">
                        <!--date-->
                        <div class="form-group ">
                            <label for="DateDue" class="form-label">Due Date</label>
                            <input type="date" class="form-control" name="DateDue" required>
                        </div>
                        <!-- buttons -->
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="submit" name="Insert" class="btn btn-primary">Insert</button>
                            </div>
                    </form>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <form action="" method="post">
                            <button type="submit" name="Delete" class="btn btn-default">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">Payment Records List</h3>
            </header>
            <div class="panel-body">
                <!-- Modal for Data Button -->
                <div class="modal fade" id="examplePositionCenter2" aria-labelledby="examplePositionCenter2" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-simple modal-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title">Manual Payment</h4>
                            </div>
                            <div class="modal-body">
                                <form action="payment/charge.php" method="POST" id="payment-form">
                                    <!--user ID-->
                                    <div class="form-group ">
                                        <label for="userID" class="form-label">User ID</label>
                                        <input type="text" class="form-control" id="userID" name="userID" readonly>
                                        <span id="user-availability-status"></span>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group ">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" readonly>
                                    </div>
                                    <div id="card-element" class="form-control">
                                        <!-- a Stripe Element will be inserted here. -->
                                    </div>
                                    <div id="card-errors" role="alert"></div>
                            </div>

                            <div class="modal-footer">
                                <!--buttons-->
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button class="btn btn-primary">Pay with Credit Card</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Data Button -->
                <div class="modal fade" id="examplePositionCenter3" aria-labelledby="examplePositionCenter3" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-simple modal-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title">Manual Payment</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <!--user ID-->
                                    <div class="form-group ">
                                        <label for="userID" class="form-label">User ID</label>
                                        <input type="text" class="form-control" id="userID-c" name="userID_c" readonly>
                                        <span id="user-availability-status"></span>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group ">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email_c" id="email-c" readonly>
                                    </div>

                                    <!-- proof -->
                                    <div class="form-group ">
                                        <label for="proof" class="form-label">Proof of Transaction</label>
                                        <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                            <input type="text" class="form-control" readonly="">
                                            <span class="input-group-btn">
                                                <span class="btn btn-success btn-file">
                                                    <i class="icon wb-upload" aria-hidden="true"></i>
                                                    <input type="file" onclick="" name="proof" multiple="" accept="image/*" required>
                                                </span>
                                            </span>

                                        </div>
                                        <span> Please pay in full. </span>
                                    </div>
                            </div>

                            <div class="modal-footer">
                                <!--buttons-->
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                                        <button type="submit" name="cash" class="btn btn-primary">Pay with Cash</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="example-wrap">
                            <div class="nav-tabs-horizontal" data-plugin="tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab" aria-selected="true">Unpaid</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab" aria-selected="false">Successful Payment</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree" role="tab" aria-selected="false">Pending Verification</a></li>
                                    <li class="dropdown nav-item" role="presentation" style="display: none;">
                                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu</a>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">Unpaid</a>
                                            <a class="dropdown-item" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">Successful Payment</a>
                                            <a class="dropdown-item" data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree" role="tab">Pending Verification</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tab-content pt-20">
                                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                                        <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
                                            <?php
                                            $con = mysqli_connect("localhost", "root", "", "ksjdb");
                                            if (!$con) {
                                                echo  mysqli_connect_error();
                                                exit;
                                            }
                                            $sql = "SELECT payment.`userID`,payment.`transactionID`,payment.`paymentMethod`,payment.`dateDue`,payment.`status`,payment.`imageType`,payment.`imageData`, users.`email` 
                                            FROM `payment` INNER JOIN users ON Payment.userID=users.userID WHERE `status` = 1";

                                            $result = mysqli_query($con, $sql);
                                            mysqli_close($con);
                                            $qry = $result;
                                            $list = mysqli_num_rows($qry);
                                            echo '<thead>
                                                        <tr role="row">
                                                            <th>No</th>
                                                            <th>User ID</th>
                                                            <th>Transaction ID</th>
                                                            <th>Method of Payment</th>
                                                            <th>Date Due</th>
                                                            <th>Email</th>
                                                            <th>Actions</th> 
                                                        </tr>
                                                        </thead>';
                                            $counter = 1;
                                            if ($list > 0) {
                                                echo '
                                                        <tbody>';
                                                while ($row = mysqli_fetch_assoc($qry)) {
                                                    echo '
                                            <tr>
                                                <form action=""  method="POST">
                                                    <td class="nr">' . $counter . '</td>
                                                    <td>' . $row['userID'] . '</td>         
                                                    <td>' . $row['transactionID'] . '</td>    
                                                    <td>' . $row['paymentMethod'] . '</td>  
                                                    <td>' . $row['dateDue'] . '</td>
                                                    <td>' . $row['email'] . '</td>                                              
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit_row"
                                                        data-original-title="Edit" data-target="#examplePositionCenter2" data-toggle="modal" type="button" ><i class="icon wb-payment" aria-hidden="true"></i></a>
                                                        
                                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit_row_1"
                                                        data-original-title="Edit" data-target="#examplePositionCenter3" data-toggle="modal" type="button" ><i class="icon md-balance-wallet" aria-hidden="true"></i></a>
                                                    </td>
                                                </form>
                                            </tr>';
                                                    $counter++;
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                                        <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                            <?php
                                            $con = mysqli_connect("localhost", "root", "", "ksjdb");
                                            if (!$con) {
                                                echo  mysqli_connect_error();
                                                exit;
                                            }
                                            $sql = "SELECT * FROM `payment` WHERE `status` = 2";

                                            $result = mysqli_query($con, $sql);
                                            mysqli_close($con);
                                            $qry = $result;
                                            $list = mysqli_num_rows($qry);
                                            echo '<thead>
                                                        <tr role="row">
                                                            <th>No</th>
                                                            <th>User ID</th>
                                                            <th>Transaction ID</th>
                                                            <th>Method of Payment</th>
                                                            <th>Date Due</th>
                                                        </tr>
                                                        </thead>';
                                            $counter = 1;
                                            if ($list > 0) {
                                                echo '
                                                        <tbody>';
                                                while ($row = mysqli_fetch_assoc($qry)) {
                                                    echo '
                                            <tr>
                                                <form action=""  method="POST">
                                                    <td class="nr">' . $counter . '</td>
                                                    <td>' . $row['userID'] . '</td>         
                                                    <td>' . $row['transactionID'] . '</td>    
                                                    <td>' . $row['paymentMethod'] . '</td>  
                                                    <td>' . $row['dateDue'] . '</td>                                            
                                                </form>
                                            </tr>';
                                                    $counter++;
                                                }
                                            }
                                            ?>

                                        </table>
                                    </div>
                                    <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                                        <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                            <?php
                                            $con = mysqli_connect("localhost", "root", "", "ksjdb");
                                            if (!$con) {
                                                echo  mysqli_connect_error();
                                                exit;
                                            }
                                            $sql = "SELECT * FROM `payment` WHERE `status` = 3";

                                            $result = mysqli_query($con, $sql);
                                            mysqli_close($con);
                                            $qry = $result;
                                            $list = mysqli_num_rows($qry);
                                            echo '<thead>
                                                        <tr role="row">
                                                            <th>No</th>
                                                            <th>User ID</th>
                                                            <th>Transaction ID</th>
                                                            <th>Proof of Payment</th>
                                                            <th>Method of Payment</th>
                                                            <th>Date Due</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>';
                                            $counter = 1;
                                            if ($list > 0) {
                                                echo '
                                                        <tbody>';
                                                while ($row = mysqli_fetch_assoc($qry)) {
                                                    echo '
                                            <tr>
                                                <form action=""  method="POST">
                                                    <td class="nr">' . $counter . '</td>
                                                    <input type="hidden" name="userID" value="' . $row['userID'] . '">
                                                    <td>' . $row['userID'] . '</td>         
                                                    <td>' . $row['transactionID'] . '</td>   
                                                    <td><a target="_blank" href="verification/viewpaymentslip.php?no=' . $row['userID'] . '" class="btn btn-primary" >View</a></td> 
                                                    <td>' . $row['paymentMethod'] . '</td>  
                                                    <td>' . $row['dateDue'] . '</td>      
                                                    <td class="actions">
                                                        <button type="submit" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                                        data-original-title="Remove" name="approve"><i class="icon wb-check" aria-hidden="true"></i></button>
                                                
                                                        <button type="submit" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                                        data-original-title="Remove" name="reject"><i class="icon wb-close" aria-hidden="true"></i></button>
                                                    </td>                                      
                                                </form>
                                            </tr>';
                                                    $counter++;
                                                }
                                            }
                                            ?>

                                        </table>
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
    <!-- End Page -->



    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
        <div class="site-footer-right">
            Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
        </div>
    </footer>
    <!-- Core  -->
    <script src="../../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../../global/vendor/jquery/jquery.js"></script>
    <script src="../../../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../../global/vendor/animsition/animsition.js"></script>
    <script src="../../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../../../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

    <!-- Plugins -->
    <script src="../../../global/vendor/switchery/switchery.js"></script>
    <script src="../../../global/vendor/intro-js/intro.js"></script>
    <script src="../../../global/vendor/screenfull/screenfull.js"></script>
    <script src="../../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="../../../global/vendor/datatables.net/jquery.dataTables.js"></script>
    <script src="../../../global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../../../global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
    <script src="../../../global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
    <script src="../../../global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
    <script src="../../../global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
    <script src="../../../global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
    <script src="../../../global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
    <script src="../../../global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
    <script src="../../../global/vendor/datatables.net-buttons/buttons.html5.js"></script>
    <script src="../../../global/vendor/datatables.net-buttons/buttons.flash.js"></script>
    <script src="../../../global/vendor/datatables.net-buttons/buttons.print.js"></script>
    <script src="../../../global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
    <script src="../../../global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
    <script src="../../../global/vendor/asrange/jquery-asRange.min.js"></script>
    <script src="../../../global/vendor/bootbox/bootbox.js"></script>

    <!-- Scripts -->
    <script src="../../../global/js/Component.js"></script>
    <script src="../../../global/js/Plugin.js"></script>
    <script src="../../../global/js/Base.js"></script>
    <script src="../../../global/js/Config.js"></script>

    <script src="../../assets/js/Section/Menubar.js"></script>
    <script src="../../assets/js/Section/GridMenu.js"></script>
    <script src="../../assets/js/Section/Sidebar.js"></script>
    <script src="../../assets/js/Section/PageAside.js"></script>
    <script src="../../assets/js/Plugin/menu.js"></script>

    <script src="../../../global/js/config/colors.js"></script>
    <script src="../../assets/js/config/tour.js"></script>
    <script>
        Config.set('assets', '../../../assets');
    </script>

    <!-- Page -->
    <script src="../../assets/js/Site.js"></script>
    <script src="../../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../../global/js/Plugin/switchery.js"></script>
    <script src="../../../global/js/Plugin/datatables.js"></script>
    <script src="../../assets/examples/js/tables/datatable.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="payment/js/charge.js"></script>
    <script src="../../../global/js/Plugin/input-group-file.js"></script>
    <script src="../../../global/js/Plugin/jquery-placeholder.js"></script>




    <!-- for live editing -->
    <!--jQuery Stuff-->
    <script>
        var list;
        var i;

        function JSconfirm() {
            swal({
                    title: "Are you sure?",
                    text: "Are you sure you want to logout out of KSJConnects?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((logout) => {
                    if (logout) {
                        location.href = '../../../../logout.php';
                    }
                });
        }

        $(".edit_row").click(function() {

            var $row = $(this).closest("tr"); // Find the row
            var $text = $row.find(".nr").text(); // Find the text
            var table = $('#exampleTableTools').DataTable();
            var data = table.row($text - 1).data();
            $("#userID").val(data[1]);
            $("#email").val(data[5]);
        });

        $(".edit_row_1").click(function() {

            var $row = $(this).closest("tr"); // Find the row
            var $text = $row.find(".nr").text(); // Find the text
            var table = $('#exampleTableTools').DataTable();
            var data = table.row($text - 1).data();
            $("#userID-c").val(data[1]);
            $("#email-c").val(data[5]);
        });



        function checkAvailability_user() {
            jQuery.ajax({
                url: "verification/check_availability.php",
                data: 'username=' + $("#userID").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status").html(data);
                },
                error: function() {}
            });
        }
    </script>
</body>

</html>

<?php
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
    echo  mysqli_connect_error();
    exit;
}

if (isset($_POST['Insert'])) {
    $sql = "INSERT INTO `payment` (`userID`, `transactionID`, `paymentMethod`, `dateDue`, `status`,`imageType`,`imageData`) SELECT userID,NULL,NULL,'2020-09-01',1,NULL,NULL FROM users where userType ='RESIDENT'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    if ($result) {
        echo '<script>swal({
                title: "Success",
                text: "The semester data has been purged.",
                icon: "success",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    } else {
        echo '<script>swal({
                title: "Oh no",
                text: "The semester has not been purged",
                icon: "error",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    }
}

if (isset($_POST['Delete'])) {
    $sql = "DELETE FROM Payment";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    if ($result) {
        echo '<script>swal({
                title: "Success",
                text: "The semester has been resetted.",
                icon: "success",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    } else {
        echo '<script>swal({
                title: "Oh no",
                text: "The semester has not been resetted.",
                icon: "error",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    }
}
if (isset($_POST['cash'])) {
    $imgData = addslashes(file_get_contents($_FILES['proof']['tmp_name']));
    $imageProperties = getimageSize($_FILES['proof']['tmp_name']);
    $pstr = rand();
    $pystr = "ch_" . sha1($pstr);

    $sql = "UPDATE `payment` SET `imageData` = '{$imgData}' ,`transactionID`= '" . $pystr . "', `imageType` = '{$imageProperties['mime']}',  `paymentMethod` = 'Manual Payment', `status` = '3'
    WHERE `payment`.`userID` = '" . $_POST['userID_c'] . "'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);

    if ($result) {
        echo '<script>swal({
                    title: "Success",
                    text: "Student payment has been inserted.",
                    icon: "success",
                    button: "Ok",
                  }).then(function(){ 
                    window.location.href = "payment.php";
                   }
                ); </script>';
    } else {
        echo '<script>swal({
                    title: "Oh no",
                    text: "Student payment has not been inserted.",
                    icon: "error",
                    button: "Ok",
                  }).then(function(){ 
                    window.location.href = "payment.php";
                   }
                ); </script>';
    }
}

if (isset($_POST['approve'])) {
    $sql = "UPDATE `payment` SET `status` = '2' WHERE `payment`.`userID` = '" . $_POST['userID'] . "'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    if ($result) {
        echo '<script>swal({
                title: "Success",
                text: "Payment approved.",
                icon: "success",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    } else {
        echo '<script>swal({
                title: "Oh no",
                text: "There is a problem with payment approval.",
                icon: "error",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    }
}

if (isset($_POST['reject'])) {
    $sql = "UPDATE `payment` SET `transactionID` = NULL, `paymentMethod` = NULL, `status` = '1', `imageType` = NULL, `imageData` = NULL WHERE `payment`.`userID` = '" . $_POST['userID'] . "'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    if ($result) {
        echo '<script>swal({
                title: "Success",
                text: "Payment successfully rejected.",
                icon: "success",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    } else {
        echo '<script>swal({
                title: "Oh no",
                text: "Payment has not been rejected.",
                icon: "error",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "payment.php";
               }
            ); </script>';
    }
}
?>