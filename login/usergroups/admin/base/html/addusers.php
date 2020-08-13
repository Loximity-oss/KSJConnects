<?php session_start(); ?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>KSJConnects - Admin Profile</title>

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
    <link rel="stylesheet" href="../../global/vendor/chartist/chartist.css">
    <link rel="stylesheet" href="../../global/vendor/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="../assets/examples/css/dashboard/v1.css">


    <!-- Fonts -->
    <link rel="stylesheet" href="../../global/fonts/weather-icons/weather-icons.css">
    <link rel="stylesheet" href="../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition dashboard">
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
                            <a class="dropdown-item" onclick="JSconfirm();" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
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

                        <!-- User Management Stuff-->
                        <li class="site-menu-category">User Management</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                                <span class="site-menu-title">User Management Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item active">
                                    <a class="animsition-link" href="#">
                                        <span class="site-menu-title">Add User Accounts</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="viewuser.php">
                                        <span class="site-menu-title">View User Accounts</span>
                                    </a>
                                </li>
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
                                    <a class="animsition-link" href="addcomplaint.php">
                                        <span class="site-menu-title">Add Resident's Complaint</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="viewcomplaint.php">
                                        <span class="site-menu-title">View Resident's Complaint</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="manipulatecomplaint.php">
                                        <span class="site-menu-title">Manage Resident's Complaints</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Facility Booking Stuff-->
                        <li class="site-menu-category">Facility Booking System</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-stats-bars" aria-hidden="true"></i>
                                <span class="site-menu-title">Facility Booking Submenu</span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item ">
                                    <a class="animsition-link" href="index.php">
                                        <span class="site-menu-title">View Resident's Facility Bookings</span>
                                    </a>
                                </li>
                                <li class="site-menu-item ">
                                    <a class="animsition-link" href="index.php">
                                        <span class="site-menu-title">Manage Resident's Facility Bookings</span>
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
                                        <a class="animsition-link" href="viewmerit.php">
                                            <span class="site-menu-title">View Resident's Merit</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item ">
                                        <a class="animsition-link" href="manipulatemerit.php">
                                            <span class="site-menu-title">Manage Resident's Merit</span>
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
                                            <span class="site-menu-title">View Resident's Sticker App</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item ">
                                        <a class="animsition-link" href="index.php">
                                            <span class="site-menu-title">Manage Resident's Sticker App</span>
                                        </a>
                                    </li>
                                </ul>
                            </a>
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
                <li class="breadcrumb-item active">User Management / Add User Accounts</li>
            </ol>
            <h1 class="page-title">Add User Accounts</h1>
        </div>
        <div class="page-content container-fluid">
            <!-- Add User Card -->
            <div class="card">
                <div class="card-header card-header-transparent card-header-bordered">
                    User Details
                </div>
                <div class="card-block">
                    <h4 class="card-title">Please enter user details below...</h4>
                    <form action="" method="POST">

                        <!--user ID-->
                        <div class="form-group ">
                            <label for="staticuserID" class="form-label">User ID</label>
                            <input type="text" class="form-control" id="staticuserID" name="staticuserID" onblur="checkAvailability()" required>
                            <span id="user-availability-status"></span>
                        </div>
                        <!--fullname-->
                        <div class="form-group ">
                            <label for="staticfullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="staticfullname" name="staticfullname" required>
                        </div>
                        <!--password-->
                        <div class="form-group ">
                            <label for="staticpassword" class="form-label">Password</label>
                            <input type="text" class="form-control" id="staticpassword" name="staticpassword" required>
                        </div>
                        <!--email-->
                        <div class="form-group ">
                            <label for="staticemail" class="form-label">Email</label>
                            <input type="text" class="form-control" id="staticemail" name="staticemail" onblur="checkAvailability_email()" required>
                            <span id="email-availability-status"></span>
                        </div>
                        <!--phone_no-->
                        <div class="form-group ">
                            <label for="staticphoneno" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="staticphoneno" name="staticphoneno" required>
                        </div>
                        <!-- user type -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">User Type</label>
                            <select class="form-control" id="staticusertype" name="staticusertype" required>
                                <option>ADMIN</option>
                                <option>GUEST</option>
                                <option>STAFF</option>
                            </select>
                        </div>
                        <!-- verification -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">User Verification Level</label>
                            <select class="form-control" id="staticverification" name="staticverification" required>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add User</button>
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
    <script src="../../global/vendor/skycons/skycons.js"></script>
    <script src="../../global/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
    <script src="../../global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
    <script src="../../global/vendor/matchheight/jquery.matchHeight-min.js"></script>

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
        Config.set('assets', '../assets');
    </script>

    <!-- Page -->
    <script src="../assets/js/Site.js"></script>
    <script src="../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../global/js/Plugin/switchery.js"></script>
    <script src="../../global/js/Plugin/matchheight.js"></script>
    <script src="../../global/js/Plugin/jvectormap.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/examples/js/dashboard/v1.js"></script>


    <!--jQuery Stuff-->
    <script>
        function checkAvailability() {
            console.log($("#staticuserID").val());
            jQuery.ajax({
                url: "verification/check_availability.php",
                data: 'username=' + $("#staticuserID").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status").html(data);
                },
                error: function() {}
            });
        }

        function checkAvailability_email() {
            //if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
            console.log($("#staticemail").val());
            jQuery.ajax({
                url: "verification/check_email.php",
                data: 'email=' + $("#staticemail").val(),
                type: "POST",
                success: function(data) {
                    $("#email-availability-status").html(data);
                },
                error: function() {}
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
error_reporting(0);
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "ksjdb");
    if (!$con) {
        echo  mysqli_connect_error();
        exit;
    }
    //todo check userid
    if ($_POST['staticverification'] == 2) {
        $hash = md5(rand(0, 1000));
    } else {
        $hash = $_POST['staticverification'];
    }

    $sql = "INSERT INTO `users` (`imageType`,`picture`,`userID`, `fullname`, `password`, `email`, `phone_no`, `userType`, `verification`, `bio`) 
    VALUES ('','0x0','" . $_POST['staticuserID'] . "','" . $_POST['staticfullname'] . "', '" . $_POST['staticpassword'] . "', '" . $_POST['staticemail'] . "', '" . $_POST['staticphoneno'] . "', '" . $_POST['staticusertype'] . "' , '" . $hash . "', 'Default Bio');";
    $sql2 = "INSERT INTO `merit` (`userID`,`merit`) VALUES ('" . $_POST['staticuserID'] . "','0');";
    $result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql2);

    if ($result) {
        if ($hash != 1) {
            $to = $_POST['staticemail'];
            $subject = 'KSJConnects SIGN UP | Verification E-mail';
            $message = '
     
            Thanks for signing up!
            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
            
             
            Please click this link to activate your account:
            http://118.101.107.162/KSJConnects/verification/verify.php?email=' . $_POST['email'] . '&hash=' . $hash . '
             
            ';
            $headers = 'From: ssah37@gmail.com';

            if (mail($to, $subject, $message, $headers))
                echo '<script>swal({
                title: "Success",
                text: "The user account has been added!",
                icon: "success",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "addusers.php";
               }
            ); </script>';
            else
                echo '<script>swal({
                title: "Oh no",
                text: "The verification email was not sent. However the account has been added.",
                icon: "error",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "addusers.php";
               }
            ); </script>';
        } else {
            echo '<script>swal({
                title: "Success",
                text: "The user account has been added!",
                icon: "success",
                button: "Ok",
              }).then(function(){ 
                window.location.href = "addusers.php";
               }
            ); </script>';
        }
    } else {
        echo '<script>swal({
            title: "Oh no",
            text: "The account has not been added.",
            icon: "error",
            button: "Ok",
          }).then(function(){ 
            window.location.href = "addusers.php";
           }
        ); </script>';
    }
}

?>