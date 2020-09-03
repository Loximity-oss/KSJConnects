<?php session_start(); ?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>KSJConnects - Staff (View Merit of Residents)</title>

    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../assets/css/site.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
    <link rel="stylesheet" href="../../global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
    <link rel="stylesheet" href="../assets/examples/css/tables/datatable.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../../global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="../../global/vendor/breakpoints/breakpoints.js"></script>
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
                <img class="navbar-brand-logo" src="../assets/images/logo.png" title="KSJConnects">
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
                                <?php echo '<img src="profileimg/imageView.php?username=' . $_SESSION['username'] . '" alt="Card image cap">'; ?>
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


                        <!-- Complaint System Information Stuff-->
                        <li class="site-menu-category">Complaint System</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-alert" aria-hidden="true"></i>
                                <span class="site-menu-title">Complaint System Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="#">
                                        <span class="site-menu-title">Add Complaint</span>
                                    </a>
                                </li>
                                <li class="site-menu-item active">
                                    <a class="animsition-link" href="viewcomplaint.php">
                                        <span class="site-menu-title">View Previous Complaints</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                    <div class="site-menubar-section">
                        <h5>
                            Sprint 1 Progress
                            <span class="float-right">80%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 75%;" role="progressbar"></div>
                        </div>
                        <h5>
                            Product Release
                            <span class="float-right">30%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 30%;" role="progressbar"></div>
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
                <li class="breadcrumb-item active">Complaint System / View Complaints</li>
            </ol>
            <h1 class="page-title">Add Complaints</h1>
        </div>
        <div class="page-content container-fluid">
            <div class="panel">
                <header class="panel-heading">
                    <div class="panel-actions"></div>
                    <h3 class="panel-title">Add Complaints</h3>
                </header>
                <div class="card-block">
                    <h4 class="card-title">Please enter user details below...</h4>
                    <form action="" method="POST">

                        <!--Complaint String-->
                        <div class="form-group ">
                            <label for="staticcomplaintstr" class="form-label">Complaint reason</label>
                            <textarea class="form-control" name="staticcomplaintstr" maxlength="200" placeholder="Enter Complaint (max 200)" id="staticcomplaintstr"></textarea>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Add Complaint</button>
                    </form>
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
    <script src="../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../global/vendor/jquery/jquery.js"></script>
    <script src="../../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../global/vendor/animsition/animsition.js"></script>
    <script src="../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

    <!-- Plugins -->
    <script src="../../global/vendor/switchery/switchery.js"></script>
    <script src="../../global/vendor/intro-js/intro.js"></script>
    <script src="../../global/vendor/screenfull/screenfull.js"></script>
    <script src="../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="../../global/vendor/datatables.net/jquery.dataTables.js"></script>
    <script src="../../global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../../global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
    <script src="../../global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
    <script src="../../global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
    <script src="../../global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
    <script src="../../global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
    <script src="../../global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
    <script src="../../global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
    <script src="../../global/vendor/datatables.net-buttons/buttons.html5.js"></script>
    <script src="../../global/vendor/datatables.net-buttons/buttons.flash.js"></script>
    <script src="../../global/vendor/datatables.net-buttons/buttons.print.js"></script>
    <script src="../../global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
    <script src="../../global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
    <script src="../../global/vendor/asrange/jquery-asRange.min.js"></script>
    <script src="../../global/vendor/bootbox/bootbox.js"></script>

    <!-- Scripts -->
    <script src="../../global/js/Component.js"></script>
    <script src="../../global/js/Plugin.js"></script>
    <script src="../../global/js/Base.js"></script>
    <script src="../../global/js/Config.js"></script>

    <script src="../assets/js/Section/Menubar.js"></script>
    <script src="../assets/js/Section/GridMenu.js"></script>
    <script src="../assets/js/Section/Sidebar.js"></script>
    <script src="../assets/js/Section/PageAside.js"></script>
    <script src="../assets/js/Plugin/menu.js"></script>

    <script src="../../global/js/config/colors.js"></script>
    <script src="../assets/js/config/tour.js"></script>
    <script>
        Config.set('assets', '../../assets');
    </script>

    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../global/js/Plugin/switchery.js"></script>
    <script src="../../global/js/Plugin/datatables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/examples/js/tables/datatable.js"></script>


    <!-- for live editing -->
    <!--jQuery Stuff-->
    <script>
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
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }
    $sql = "INSERT INTO `complaint` (`complaintID`, `userID`, `complaint_str`, `status`, `supervisor`) VALUES (NULL, '" . $_SESSION["username"] . "', '" . $_POST["staticcomplaintstr"] . "', '1', 'none');";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);

    if ($result)
        echo '<script>swal({
            title: "Success",
            text: "The complaint has been added!",
            icon: "success",
            button: "Ok",
            }).then(function(){ 
            window.location.href = "addcomplaint.php";
            }
            ); </script>';
    else
        echo '<script>swal({
            title: "Oh no",
            text: "The complaint was not added. Please contact KSJConnects Administration.",
            icon: "error",
            button: "Ok",
            }).then(function(){ 
            window.location.href = "addcomplaint.php";
            }
            ); </script>';
}


?>