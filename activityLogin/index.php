<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KSJConnects Login</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">
                        <img src="assets/images/logo.png" alt="logo" class="logo">
                    </div>
                    <div class="login-wrapper my-auto">
                        <h1 class="login-title">Log in - Program Registration</h1>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="enter your username" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="pass" id="password" class="form-control" placeholder="enter your passsword" required>
                                
                            </div>
                            <?php if(isset($_SESSION['error'])) echo ' <span style="color:red"> Your username/password is incorrect. </span>  <br>'; session_destroy();?>
                            <?php echo '<input type="hidden" name="program" value="'.$_GET['program'].'" ' ?>
                            <br>
                            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
                        </form>
                        <a href="../login/forgetpass/index.php" class="forgot-password-link">Forgot password?</a>
                        <p class="login-wrapper-footer-text">Don't have an account? <a href="../register/index.php" class="text-reset">Register here</a></p>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="assets/images/login.jpg" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>