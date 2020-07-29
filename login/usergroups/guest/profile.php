<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KSJConnects - Guest Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel=”stylesheet” href=” sweetalert.css”>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">KSJConnects</div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">New Application</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" onclick="JSconfirm();" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <?php echo '<h1 class="mt-4">Welcome back! ' . $_SESSION["username"] . '</h1>'; ?>
        <p>Welcome to KSJConnects Application System for
          larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional,
          and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the
          menu when clicked.</p>
      </div>

      <div class="container-fluid">
        <h2 class="mt-4">Active Applications</h2>
        <p>Below is the list of applications that you are currently applying.</p>
      </div>

      <?php
      $con = mysqli_connect("localhost", "root", "", "ksjdb");
      if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
        exit();
      }
      $sql = "SELECT `no`,`status`,`dateApplied` FROM registration WHERE userID = '" . $_SESSION['username'] . "' and status = '1' ";
      $result = mysqli_query($con, $sql);
      $result2 = mysqli_query($con, $sql);
      $list = mysqli_fetch_row($result);
      mysqli_close($con);
      if ($list > 0) {
        while ($row = mysqli_fetch_assoc($result2)) {
          if ($row['status'] == 1) {
            echo '<div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                Application ID : ' . $row['no'] . '
              </div>
              <div class="card-body">
                <h5 class="card-title">Application Status: Pending</h5>
                <p class="card-text">This Application is applied on "' . $row['dateApplied'] . '"</p>
                <p class="card-text">Please patiently wait! Thank you.</p>
              </div>
            </div>
          </div>';
          }
        }
      } else {
        echo '<p>No current application pending.</p>';
      }
      ?>
      <div class="container-fluid">
        <h2 class="mt-4">Successful Applications</h2>
        <p>Below is the list of applications that are successful</p>
      </div>

      <?php
      $con = mysqli_connect("localhost", "root", "", "ksjdb");
      if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
        exit();
      }
      $sql = "SELECT `no`,`status`,`dateApplied`,`status_string`,`dateAccepted` FROM registration WHERE userID = '" . $_SESSION['username'] . "' and status = '2' ";
      $result = mysqli_query($con, $sql);
      $result2 = mysqli_query($con, $sql);
      $list = mysqli_fetch_row($result);
      mysqli_close($con);
      if ($list > 0) {
        while ($row = mysqli_fetch_assoc($result2)) {
          if ($row['status'] == 2) {
            echo '<div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                Application ID : ' . $row['no'] . '
              </div>
              <div class="card-body">
                <h5 class="card-title">Application Status: Success!</h5>
                <p class="card-text">Application Acceptance Reason : "' . $row['status_string'] . '"</p>
                <p class="card-text">This Application is applied on "' . $row['dateApplied'] . '" and accepted on "' . $row['dateAccepted'] . '" </p>
                <p class="card-text">Application will expire on 3 days after acceptance.</p>
            </div>
          </div>
          </div>';
          }
        }
      } else {
        echo '<p>No successful application.</p>';
      }
      ?>


      <div class="container-fluid">
        <h2 class="mt-4">Failed Applications</h2>
        <p>Below is the list of applications that are rejected.</p>
      </div>

      <?php
      $con = mysqli_connect("localhost", "root", "", "ksjdb");
      if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
        exit();
      }
      $sql = "SELECT `no`,`status`,`dateApplied`,`status_string` FROM registration WHERE userID = '" . $_SESSION['username'] . "' and status = '3' ";
      $result = mysqli_query($con, $sql);
      $result2 = mysqli_query($con, $sql);
      $list = mysqli_fetch_row($result);
      mysqli_close($con);
      if ($list > 0) {
        while ($row = mysqli_fetch_assoc($result2)) {
          if ($row['status'] == 3) {
            echo '<div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                Application ID : ' . $row['no'] . '
              </div>
              <div class="card-body">
                <h5 class="card-title">Application Status: Rejected</h5>
                <p class="card-text">Application Rejected Reason : "' . $row['status_string'] . '"</p>
                <p class="card-text">This Application is applied on "' . $row['dateApplied'] . '"</p>
                
            </div>
          </div>
          </div>';
          }
        }
      } else {
        echo '<p>No rejected applications.</p>';
      }
      ?>

      <br>
      <br>
      <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });

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
              location.href = '../../logout.php';
            }
          });
      }
    </script>

</body>

</html>