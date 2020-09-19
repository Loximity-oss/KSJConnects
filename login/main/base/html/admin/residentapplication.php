<?php include 'edit/userSessionCheck.php' ?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>KSJConnects - Admin (Resident Application)</title>

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
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../../global/vendor/respond/respond.min.js"></script>
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
                                    echo '<img class="card-img-top" src="imageView.php?username=' . $_SESSION['username'] . '" alt="Card image cap">';
                                } ?>
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
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
                                    <a class="animsition-link" href="index.php">
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
                                        <a class="animsition-link" href="index.php">
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
                                        <a class="animsition-link" href="index.php">
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
                                        <a class="animsition-link" href="index.php">
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
                            <span class="float-right">1%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 1%;" role="progressbar"></div>
                        </div>
                        <h5>
                            Product Release
                            <span class="float-right">80%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 80%;" role="progressbar"></div>
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
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">User Management / Resident Application</li>
            </ol>
            <h1 class="page-title">Resident Application Menu</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="card">
                <div class="card-header">
                    User Insertion Form
                </div>
                <div class="card-body">
                    <h5 class="card-title">User Form</h5>
                    <p class="card-text">Enter USERID to check User Application.</p>

                    <form action="" method="post">
                        <!--appid-->
                        <div class="form-group row">
                            <label for="appid" class="col-sm-2 col-form-label">Application ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="appid" readonly class="form-control-plaintext" id="appid" size="50">
                            </div>
                        </div>

                        <!--userID-->
                        <div class="form-group row">
                            <label for="staticuserID" class="col-sm-2 col-form-label">User ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticuserID" name="staticuserID" placeholder="Enter Username Here to Continue" onblur="checkAvailability()" required>
                                <span id="user-availability-status"></span>
                            </div>
                        </div>

                        <!-- hide data for convenience -->
                        <div id="hide" style="display: none;">
                            <!--name-->
                            <div class="form-group row">
                                <label for="staticname" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <p id="staticname" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--ID-->
                            <div class="form-group row">
                                <label for="staticid" class="col-sm-2 col-form-label">ID</label>
                                <div class="col-sm-10">
                                    <p id="staticid" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--year/course-->
                            <div class="form-group row">
                                <label for="staticyearcourse" class="col-sm-2 col-form-label">year/course </label>
                                <div class="col-sm-10">
                                    <p id="staticyearcourse" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--matric-->
                            <div class="form-group row">
                                <label for="staticmatric" class="col-sm-2 col-form-label">Matric</label>
                                <div class="col-sm-10">
                                    <p id="staticmatric" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--phone-->
                            <div class="form-group row">
                                <label for="staticphone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <p id="staticphone" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--address-->
                            <div class="form-group row">
                                <label for="staticaddress" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <p id="staticaddress" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--religion-->
                            <div class="form-group row">
                                <label for="staticreligion" class="col-sm-2 col-form-label">Religion</label>
                                <div class="col-sm-10">
                                    <p id="staticreligion" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--sex-->
                            <div class="form-group row">
                                <label for="staticsex" class="col-sm-2 col-form-label">Sex</label>
                                <div class="col-sm-10">
                                    <p id="staticsex" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--parentjob-->
                            <div class="form-group row">
                                <label for="staticparentjob" class="col-sm-2 col-form-label">Parent's job</label>
                                <div class="col-sm-10">
                                    <p id="staticparentjob" class="form-control-plaintext"></p>
                                </div>
                            </div>

                            <!--status_string-->
                            <div class="form-group row">
                                <label for="staticstatus_string" class="col-sm-2 col-form-label">Status String</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="staticstatus_string" name="staticstatus_string" required>
                                </div>
                            </div>

                            <!--acad-->
                            <div class="form-group row">
                                <label for="staticstatus_string" class="col-sm-2 col-form-label">Academic Results</label>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary" data-target="#examplePositionCenter2" data-toggle="modal" type="button">View ACAD</button>

                                    <div class="modal fade" id="examplePositionCenter2" aria-labelledby="examplePositionCenter2" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-simple modal-center">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title">Modal Title</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body…</p>
                                                    <img class="modal-content" id="acadslipimg" src="" alt="Card image cap">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--payslip-->
                            <div class="form-group row">
                                <label for="staticstatus_string" class="col-sm-2 col-form-label">Payslip</label>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary" data-target="#examplePositionCenter1" data-toggle="modal" type="button" disabled>View Payslip</button>

                                    <div class="modal fade" id="examplePositionCenter1" aria-labelledby="examplePositionCenter1" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-simple modal-center">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title">Modal Title</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>One fine body…</p>
                                                    <img class="modal-content" id="payslipimg" src="" alt="Card image cap">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Room -->
                            <div class="form-group row">
                                <label for="roomID" class="col-sm-2 col-form-label">Room ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="roomID" name="roomID">
                                </div>
                            </div>

                            <!-- buttons -->
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <button type="submit" name="accept" class="btn btn-primary">Accept Application</button>
                                </div>
                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                    <button type="submit" name="reject" class="btn btn-primary">Reject Application</button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
            <!--Roomlist-->
            <div class="panel" id="roomlist" style="display: none;">
                <header class="panel-heading">
                    <div class="panel-actions"></div>
                    <h3 class="panel-title">Room Availability</h3>
                </header>
                <div class="panel-body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 823px;">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "ksjdb");
                                    if (!$con) {
                                        echo  mysqli_connect_error();
                                        exit;
                                    }
                                    $sql = "SELECT * FROM roomlist WHERE `userID` = ''";

                                    $result = mysqli_query($con, $sql);
                                    mysqli_close($con);
                                    $qry = $result;
                                    $list = mysqli_num_rows($qry);
                                    if ($list > 0) {
                                        echo '<thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 127.992px;" aria-sort="ascending" aria-label="Room ID: activate to sort column descending">Room ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 162.992px;" aria-label="Block: activate to sort column ascending">Block</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Room ID</th>
                                                <th rowspan="1" colspan="1" style="">Block</th>
                                            </tr>
                                        </tfoot>';
                                        while ($row = mysqli_fetch_assoc($qry)) {
                                            echo '
                                            <tr role="row" >
                                                <td class="sorting_1" tabindex="0">' . $row['roomID'] . '</td>
                                                <td style="">' . $row['block'] . '</td>
                                            </tr>
                                            ';
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Student List-->
            <div class="panel" id="studentlist">
                <header class="panel-heading">
                    <div class="panel-actions"></div>
                    <h3 class="panel-title">Application List</h3>
                </header>
                <div class="panel-body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info" style="width: 823px;">
                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "ksjdb");
                                    if (!$con) {
                                        echo  mysqli_connect_error();
                                        exit;
                                    }
                                    $sql = "SELECT * FROM registration WHERE `status` = '1'";

                                    $result = mysqli_query($con, $sql);
                                    mysqli_close($con);
                                    $qry = $result;
                                    $list = mysqli_num_rows($qry);
                                    if ($list > 0) {
                                        echo '<thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 127.992px;" aria-sort="ascending" aria-label="User: activate to sort column descending">User ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 162.992px;" aria-label="Full Name: activate to sort column ascending">Full Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 142.992px;" aria-label="ID: activate to sort column ascending">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 36.992px;" aria-label="Year/Course: activate to sort column ascending">Year/Course</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 68.992px;" aria-label="Matric ID: activate to sort column ascending">Matric ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 54.992px;" aria-label="Phone: activate to sort column ascending">Phone</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 54.992px;" aria-label="Verification: activate to sort column ascending">Status</th>
                                        </tr>
                                        </thead>';
                                        while ($row = mysqli_fetch_assoc($qry)) {
                                            echo '
                                            <tr role="row" >
                                                <td class="sorting_1" tabindex="0">' . $row['userID'] . '</td>
                                                <td style="">' . $row['name'] . '</td>
                                                <td style="">' . $row['id'] . '</td>
                                                <td style="">' . $row['year/course'] . '</td>
                                                <td style="">' . $row['matric'] . '</td>
                                                <td style="">' . $row['phone'] . '</td>
                                                <td style="">' . $row['status'] . '</td>
                                            </tr>
                                            ';
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../../assets/examples/js/tables/datatable.js"></script>


    <!-- for live editing -->
    <!--jQuery Stuff-->
    <script>
        function checkAvailability() {
            jQuery.ajax({
                url: "verification/regliveedit.php",
                data: 'username=' + $("#staticuserID").val(),
                type: "POST",
                dataType: "json",
                cache: false,
                success: function(data) {
                    //conversion from object to array
                    var userData = $.map(data, function(value, index) {
                        return [value];
                    });

                    //append to input boxes...
                    $("#appid").val(userData[0]);
                    $("#staticname").html(userData[1]);
                    $("#staticid").html(userData[2]);
                    $("#staticyearcourse").html(userData[3]);
                    $("#staticmatric").html(userData[4]);
                    $("#staticphone").html(userData[5]);
                    $("#staticaddress").html(userData[6]);
                    $("#staticreligion").html(userData[7]);
                    $("#staticsex").html(userData[8]);
                    $("#staticparentjob").html(userData[9]);
                    $("#status").val(userData[10]);




                    //edit USERNAME AVAILABLE status
                    $("#user-availability-status").html("<span class='status-available'> User ID available. </span>");
                    $("#studentlist").hide();
                    $("#roomlist").show();
                    $("#hide").show();

                    document.getElementById("acadslipimg").src = "verification/viewslips.php?no=" + userData[0] + "&slip=2";
                    document.getElementById("payslipimg").src = "verification/viewslips.php?no=" + userData[0] + "&slip=1";

                },
                error: function(data) {
                    $("#user-availability-status").html("<span class='status-available'> User ID not available. </span>");
                    $("#studentlist").show();
                    $("#roomlist").hide();
                    $("#hide").hide();

                    //clear html
                    $("#appid").val("");
                    $("#staticname").html("");
                    $("#staticid").html("");
                    $("#staticyearcourse").html("");
                    $("#staticmatric").html("");
                    $("#staticphone").html("");
                    $("#staticaddress").html("");
                    $("#staticreligion").html("");
                    $("#staticsex").html("");
                    $("#staticparentjob").html("");
                    $("#status").val("");
                    $("#staticstatus_string").val("");
                    document.getElementById("acadslipimg").src = "";
                    document.getElementById("payslipimg").src = "";

                }
            });
        }

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
    </script>
</body>

</html>

<?php
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
    echo  mysqli_connect_error();
    exit;
}
$con2 = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con2) {
    echo  mysqli_connect_error();
    exit;
}
$date = date('Y-m-d');
if (isset($_POST['accept'])) {
    $sql = "UPDATE `registration` SET `status` = '2', `status_string` = '" . $_POST['staticstatus_string'] . "', `dateAccepted` = '" . $date . "' WHERE `registration`.`no` = '" . $_POST['appid'] . "' ";
    $sql2 = "UPDATE `roomlist` SET `userID` = '" . $_POST['staticuserID'] . "' WHERE `roomlist`.`roomID` = '" . $_POST['roomID'] . "'";
    $result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con2, $sql2);
    if ($result) {
        echo '<script>
               swal({
                title: "Success",
                text: "The user has been accepted.",
                icon: "success",
                button: "Ok",
              }); </script>';
    } else {
        echo '<script>
               swal({
                title: "Oh no",
                text: "Something went wrong.",
                icon: "error",
                button: "Ok",
              }); </script>';
    }
}

if (isset($_POST['reject'])) {
    $sql = "UPDATE `registration` SET `status` = '3', `status_string` = '" . $_POST['staticstatus_string'] . "', `dateAccepted` = '$date' WHERE `registration`.`no` = '" . $_POST['appid'] . "' ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script>swal({
                title: "Success",
                text: "The user has been rejected.",
                icon: "success",
                button: "Ok",
              }); </script>';
    } else {
        echo '<script>swal({
                title: "Oh no",
                text: "Something went wrong.",
                icon: "error",
                button: "Ok",
              }); </script>';
    }
}
?>