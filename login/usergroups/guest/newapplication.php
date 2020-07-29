<?php session_start();
$con = mysqli_connect("localhost", "root", "", "ksjdb");
if (!$con) {
  echo  mysqli_connect_error();
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KSJConnects - New Application</title>

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
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="profile.php" class="list-group-item list-group-item-action bg-light">Profile</a>
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
        <h1 class="mt-4">New Application </h1>'
        <p>Here you can apply for Kolej Siswa Jaya. Please note room selection is random.</p>
      </div>



      <?php

      $sql = "SELECT users.userID, users.fullname, users.phone_no, merit.merit, registration.status FROM users, registration, merit WHERE users.userID = '" . $_SESSION["username"] . "' ORDER BY `registration`.`status` ASC";
      $result = mysqli_query($con, $sql);
      $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
      $row = mysqli_fetch_assoc($result);
      if ($row['status'] != 1) {
        if ($count > 0) {
          echo '<div class="container-fluid">
                    <div class="col-sm-12">
                      <div class="card">
                        <h5 class="card-header">Registration Form</h5>
                        <div class="card-body">
                          <form enctype="multipart/form-data" action="edit/application.php" method="POST">


                    <!--userID-->
                    <div class="form-group">
                      <label for="userID">User ID</label>
                      <input class="form-control" type="text" value="' . $row['userID'] . '" name="userID" readonly>
                    </div>
  
                    <!--name-->
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input class="form-control" type="text" value="' . $row['fullname'] . '" name="name" readonly>
                    </div>
  
                    <!--ic-->
                    <div class="form-group">
                      <label for="ic">Malaysian Identification Card</label>
                      <input type="text" class="form-control" name="ic" placeholder="Enter IC" required>
                    </div>
  
                    <!--year/course-->
                    <div class="form-group">
                      <label for="">Year/Course (UTM STUDENT ONLY)</label>
                      <input type="text" class="form-control" name="year/course" placeholder="Enter Year/Course">
                    </div>
  
                    <!--matric id-->
                    <div class="form-group">
                      <label for="Matric ID">Matric ID (UTM STUDENT ONLY)</label>
                      <input type="text" class="form-control" name="matid" placeholder="Enter Matric ID">
                    </div>
  
                    <!--phone-->
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input class="form-control" type="text" value="' . $row['phone_no'] . '" name="phone" readonly>
                    </div>
  
                    <!--address-->
                    <div class="form-group">
                      <label for="address">Enter Full Address</label>
                      <input class="form-control" type="text" placeholder="Address" name="address">
                    </div>
    
                    <!--religion-->
                    <!--sex-->
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col">
                          <label for="religion">Enter Religion</label>
                          <input type="text" class="form-control" name="religion" placeholder="Religion">
                        </div>
                        <div class="col">
                          <label for="sex">Sex</label>
                          <select class="form-control" name="sex">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Prefer not to say</option>
                          </select>
                        </div>
                      </div>
                    </div>
    
    
                    <!--parentjob-->
                    <div class="form-group">
                      <label for="parentjob">Parent Job</label>
                      <input class="form-control" type="text" placeholder="Parent Job Name" name="parentjob" required>
                    </div>
    
                    <!--payslip-->
                    <label for="name">Pay Slip (PDF Only)</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Pay Slip</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="payslip" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    <small class="form-text text-muted">PDF Files only. Max size 2MB</small><br>
    
    
                    <!--acadslip-->
                    <label for="name">Academic Slip (PMR,SPM, UTM CGPA) (PDF Only)</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon02">Academic Slip</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="acadslip" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02" required>
                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                      </div>
                    </div>
                    <small class="form-text text-muted">PDF Files only. Max size 2MB</small><br>
    
                    <!--merit-->
                    <div class="form-group">
                      <label for="merit">Merit Points</label>
                      <input class="form-control" type="text" value="' . $row['merit'] . '" name="merit" readonly>
                    </div>
    
                    <!--box-->
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    
                    </form>
                    </div>
                  </div>
                  </div>
                  </div>';
        }
      } else {
        echo '
        <div class="container-fluid">
            <div class="col-sm-12">
              <div class="card border-info mb-3">
                  <div class="card-header">
                    Information
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">You currently have an application pending.</h5>
                    <p class="card-text">Kindly wait until your application has been approved.</p>
                    <a href="index.php" class="btn btn-primary">Return to Dashboard</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ';
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

      $('#inputGroupFile01').on('change', function() {
      //get the file name
      var fileName = $(this).val();
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
    })


    $('#inputGroupFile02').on('change', function() {
      //get the file name
      var fileName = $(this).val();
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
    })
    </script>

</body>

</html>


<?php



?>