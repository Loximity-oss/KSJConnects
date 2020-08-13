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

  <title>KSJConnects - Guest Profile</title>

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
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="newapplication.php" class="list-group-item list-group-item-action bg-light">New Application</a>
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
        <h1 class="mt-4">Profile</h1>
        <p>Welcome to KSJConnects Application System for Guests.</p>
        <p>This section contains your profile. You can modify your password here.</p>
      </div>

      <div class="container-fluid">
        <div class="row">
          <?php
          $sql = "SELECT * FROM users,merit where users.userID = '" . $_SESSION['username'] . "' and merit.userID = '" . $_SESSION['username'] . "'";
          $result = mysqli_query($con, $sql);
          $count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
          $list = mysqli_fetch_assoc($result);
        
          if ($count == 1) {
            echo '
          <div class="col-sm-3">
            <div class="card mb-3">';
            if ($list['picture'] == "0x0") {
              echo '<img class="card-img-top" src="https://freepikpsd.com/wp-content/uploads/2019/10/default-profile-image-png-1-Transparent-Images.png" alt="Card image cap">';
            } else {
              echo '<img class="card-img-top" src="imageView.php?username=' . $_SESSION['username'] . '" alt="Card image cap">';
            }
            echo ' <div class="card-body">
                <h5 class="card-title">' . $_SESSION['username'] . '</h5>

                  
                <p class="card-text">' . $list['bio'] . '</p>
                <p class="card-text"><small class="text-muted">KSJConnects Guest Account</small></p>
              </div>
            </div>
          </div>

          <div class="col-sm-9">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#usrinfo" role="tab" aria-controls="description" aria-selected="true">User Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#modify" role="tab" aria-controls="history" aria-selected="false">Modify profile attributes</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content mt-3">
                  <div class="tab-pane active" id="usrinfo" role="tabpanel">
                    <h6 class="card-subtitle mb-2">User Profile</h6>
                    <p class="card-text">Here you can see more about yourself</p>';


            echo '                    
                        <!--userID-->
                        <div class="form-group row">
                          <label for="staticuserID" class="col-sm-2 col-form-label">User ID</label>
                          <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticuserID" value="' . $_SESSION['username'] . '">
                          </div>
                        </div>';

            echo '                    
                        <!--full name-->
                        <div class="form-group row">
                          <label for="staticFullname" class="col-sm-2 col-form-label">Full Name</label>
                          <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticFullname" value="' . $list['fullname'] . '">
                          </div>
                        </div>';

            echo '                   
                        <!--email-->
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="' . $list['email'] . '">
                          </div>
                        </div>';

            echo '
                        <!--phone_no-->
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Phone No</label>
                          <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="' . $list['phone_no'] . '">
                          </div>
                        </div>';

            echo '
                        <!--merit-->
                        <div class="form-group row">
                          <label for="staticMerit" class="col-sm-2 col-form-label">Merit</label>
                          <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticMerit" value="' . $list['merit'] . '">
                          </div>
                        </div>
                      </div>';
          }
          ?>
    
          <div class="tab-pane" id="modify" role="tabpanel" aria-labelledby="history-tab">
            <h6 class="card-subtitle mb-2">Change Password</h6>
            <p class="card-text">Here you can change password.</p>
            <form action="edit/edit.php" method="POST">
              <div class="form-group">
                <label for="oldpass">Old Password</label>
                <input type="password" name="oldpass" class="form-control" id="oldpass" placeholder="Enter Old Password">
              </div>
              <div class="form-group">
                <label for="newpass">New Password</label>
                <input type="password" name="newpass" class="form-control" id="newpass" placeholder="Enter New Password">
              </div>
              <div class="form-group">
                <label for="confirmnewpass">Confirm new Password</label>
                <input type="password" name="confirmnewpass" class="form-control" id="confirmnewpass" placeholder="Confirm New Password">
              </div>
              <button type="submit" name="passwordedit" class="btn btn-primary">Submit</button>
            </form>

            <form action="edit/edit.php" method="POST">
              <div class="form-group">
                <br>
                <br>
                <h6 class="card-subtitle mb-2">Change Bio</h6>
                <p class="card-text">Here you can change bio.</p>
                <textarea class="form-control" name="bio" maxlength="100" placeholder="Enter your new bio (max 100)" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" name="bioedit" class="btn btn-primary">Submit</button>
            </form>

            <form enctype="multipart/form-data" action="edit/edit.php" method="POST">
              <div class="form-group">
                <br>
                <br>
                <h6 class="card-subtitle mb-2">Change Image</h6>
                <p class="card-text">Here you can your profile picture</p>
                <div class="custom-file">
                  <input type="file" name="userImage" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <button type="submit" name="editImage" class="btn btn-primary">Submit</button>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
  




  <!-- /#page-content-wrapper -->

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

    $('#bologna-list a').on('click', function(e) {
      e.preventDefault()
      $(this).tab('show')
    })

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


    $('#customFile').on('change', function() {
      //get the file name
      var fileName = $(this).val();
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
    })
  </script>

</body>

</html>