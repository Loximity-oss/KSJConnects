<?php
include 'edit/userSessionCheck.php';
require_once 'edit/dbconnect.php';
$sql = "SELECT * FROM `announcement` ORDER BY `date` DESC";
$sql2 = "SELECT complaintID FROM `complaint` where userID ='".$_SESSION['username']."'";
$sql3 = "SELECT merit from merit where userID ='".$_SESSION['username']."'";
$sql4 = "SELECT roomID from roomlist where userID ='".$_SESSION['username']."'";
$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);
$result3 = mysqli_query($con, $sql3);
$result4 = mysqli_query($con, $sql4);
$list2 = mysqli_num_rows($result2);
$row3 = mysqli_fetch_assoc($result3);
$row4 = mysqli_fetch_assoc($result4);
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>KSJConnects - Resident Homepage</title>

  <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../../../assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../../assets/css/site.min.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
  <link rel="stylesheet" href="../../../global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
  <link rel="stylesheet" href="../../assets/examples/css/tables/datatable.css">

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
                                        <span class="site-menu-title">Your Payment</span>
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
                                        <span class="site-menu-title">Your Complaints</span>
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
                                    <a class="animsition-link" href="facilitylist.php">
                                        <span class="site-menu-title">Facility List</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item ">
                                    <a class="animsition-link" href="facilitybooking.php">
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
                                        <a class="animsition-link" href="programlist.php">
                                            <span class="site-menu-title">Program List</span>
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
                <span class="font-size-40 font-weight-100">Resident</span>
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
              <span class="ml-15 font-weight-400">Merit</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php echo $row3['merit']?></span>
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
              <span class="ml-15 font-weight-400">Your Room</span>
              <div class="content-text text-center mb-0">
                <span class="font-size-40 font-weight-100"><?php echo $row4['roomID'] ?></span>
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
                <span class="font-size-40 font-weight-100"><?php echo $list2 ?></span>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xxl-3 col-xl-4">
          <!-- Panel Web Designer -->
          <div class="card card-shadow">
            <div class="card-block text-center bg-white p-40">
              <div class="avatar avatar-100 mb-20">
                <?php if (!$list['picture']) {
                  echo '<img class="card-img-top" src="https://freepikpsd.com/wp-content/uploads/2019/10/default-profile-image-png-1-Transparent-Images.png" alt="Card image cap">';
                } else {
                  echo '<img class="card-img-top" src="profileimg/imageView.php?username=' . $_SESSION['username'] . '" alt="Card image cap">';
                } ?>
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
      <!-- modal -->
      <div class="modal fade" id="examplePositionCenter1" aria-labelledby="examplePositionCenter1" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-simple modal-center">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title">Announcement Details</h4>
            </div>
            <div class="modal-body">
              <!--ancTitleID-->
              <div class="form-group ">
                <label for="ancTitleID1" class="form-label">Announcement Title</label>
                <input type="text" class="form-control" id="ancTitleID1" name="ancTitleID" value="" readonly>
              </div>

              <!--AnnouncmentContent-->
              <div class="form-group ">
                <label for="ancContent1" class="form-label">Content</label>
                <textarea class="form-control" id="ancContent1"  maxlength="100" placeholder="Enter your announcement (max 100)" readonly></textarea>
              </div>
            </div>
          </div>
        </div>
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



        <?php

        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        $qry = $result;
        $list = mysqli_num_rows($qry);
        $row = mysqli_fetch_assoc($qry);
        echo '
          <div class="col-xxl-3 col-xl-4"></div>
          <div class="col-xxl-9">
            <div class="card border border-primary">
              <div class="card-block">
                <h4 class="card-title">Latest News: ' . $row['Title'] . ' : ' . $row['date'] . '</h4>
                <p class="card-text">' . $row['Text'] . '
                </p>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-xl-4"></div>

          <div class="col-xxl-9">
            <div class="panel">
                <h3 class="panel-title">News Table</h3>

              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-12">
                  <table class="table table-hover dataTable table-striped w-half" id="exampleTableTools">';




        echo '<thead>
                    <tr role="row">
                    <th>No</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Date</th>
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
                            <input type="hidden" name="BookID" value="' . $row['AnnouncmentID'] . '">
                            <td>' . $row['Title'] . '</td>         
                            <td>' . $row['Text'] . '</td>    
                            <td>' . $row['date'] . '</td>                                
                            <td class="actions">
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit_row"
                              data-original-title="Edit" data-target="#examplePositionCenter1" data-toggle="modal" type="button" ><i class="icon wb-link-intact" aria-hidden="true"></i></a>
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
  <script src="../../assets/examples/js/tables/datatable.js"></script>
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
  <script src="../../../global/vendor/flot/jquery.flot.js"></script>



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
  <script src="../../../global/js/Plugin/datatables.js"></script>
  <script src="../../assets/examples/js/tables/datatable.js"></script>
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

    $(".edit_row").click(function() {

      var $row = $(this).closest("tr"); // Find the row
      var $text = $row.find(".nr").text(); // Find the text
      var table = $('#exampleTableTools').DataTable();

      var data = table.row($text - 1).data();
      console.log(data);

      $("#ancTitleID1").val(data[1]);
      $("#ancContent1").val(data[2]);
    });
  </script>
</body>

</html>