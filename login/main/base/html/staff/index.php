<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>KSJConnects - Staff Homepage</title>

  <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../../../assets/images/favicon.ico">

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
  <link rel="stylesheet" href="../../../global/vendor/chartist/chartist.css">
  <link rel="stylesheet" href="../../../global/vendor/aspieprogress/asPieProgress.css">
  <link rel="stylesheet" href="../../assets/examples/css/dashboard/v2.css">


  <!-- Fonts -->
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
    <div class="page-header h-300 mb-30">
      <div class="text-center white m-0 mt-50">
        <div class="font-size-50 mb-30 white">Kolej Siswa Jaya</div>
        <ul class="list-inline font-size-14">
          <li class="list-inline-item ml-20">
            <i class="mr-5" aria-hidden="true"></i> Welcome to KSJConnects System.
          </li>
        </ul>
      </div>
    </div>

    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-primary">
                <i class="icon wb-user"></i>
              </button>
              <span class="ml-15 font-weight-400">USER ACCESS LEVEL</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100">Staff</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-info">
                <i class="icon wb-users"></i>
              </button>
              <span class="ml-15 font-weight-400">Current Students</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100">1200</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-success">
                <i class="icon wb-table"></i>
              </button>
              <span class="ml-15 font-weight-400">Unoccupied Rooms</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100">5</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 info-panel">
          <div class="card card-shadow">
            <div class="card-block bg-white p-20">
              <button type="button" class="btn btn-floating btn-sm btn-danger">
                <i class="icon wb-alert"></i>
              </button>
              <span class="ml-15 font-weight-400">Unresolved Complaints</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100">0</span>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xxl-3 col-xl-4">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block text-center bg-white p-40">
              <div class="avatar avatar-100 mb-20">
                <?php echo '<img src="profileimg/imageView.php?username=' . $_SESSION['username'] . '" alt="Card image cap">'; ?>
              </div>
              <?php
              echo '
              <p class="font-size-20 blue-grey-700">' . $_SESSION['username'] . '</p>
              <p class="blue-grey-400 mb-20">Kolej Siswa Jaya Administration Account</p>
              <p class="mb-35">Thanks for using the KSJConnects System. Here you will see certain stuff that will be useful to you.</p>
              '; ?>
              <ul class="list-inline font-size-18 mb-35">
                <li class="list-inline-item">
                  <a class="blue-grey-400" href="javascript:void(0)">
                    <i class="icon bd-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item ml-10">
                  <a class="blue-grey-400" href="javascript:void(0)">
                    <i class="icon bd-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item ml-10">
                  <a class="blue-grey-400" href="javascript:void(0)">
                    <i class="icon bd-dribbble" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item ml-10">
                  <a class="blue-grey-400" href="javascript:void(0)">
                    <i class="icon bd-instagram" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Panel Web Designer -->
        </div>

        <div class="col-xxl-9">

          <div class="card border border-primary">
            <div class="card-block">
              <h4 class="card-title">KSJConnects Disclaimer</h4>
              <p class="card-text">This web application contains confidential information and is intended only for the individual named and the management of KSJConnects.
                If you are not the individual or managment you should not disseminate, distribute or copy this of this information..
              </p>
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
  <script src="../../../global/vendor/chartist/chartist.min.js"></script>
  <script src="../../../global/vendor/gmaps/gmaps.js"></script>
  <script src="../../../global/vendor/matchheight/jquery.matchHeight-min.js"></script>

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
    Config.set('assets', '../../assets');
  </script>

  <!-- Page -->
  <script src="../../assets/js/Site.js"></script>
  <script src="../../../global/js/Plugin/asscrollable.js"></script>
  <script src="../../../global/js/Plugin/slidepanel.js"></script>
  <script src="../../../global/js/Plugin/switchery.js"></script>
  <script src="../../../global/js/Plugin/gmaps.js"></script>
  <script src="../../../global/js/Plugin/matchheight.js"></script>
  <script src="../../../global/js/Plugin/asscrollable.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../../assets/examples/js/dashboard/v2.js"></script>
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