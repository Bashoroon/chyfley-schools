<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
         <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> CHYFLEY STUDENT PORTAL - Poised to Making Giant Strides </title>
    <meta name="Description" content="Poised to Making Giant Strides">
    <meta name="Author" content="CHYFLEY SCHOOLS">
	<meta name="keywords" content="CHYFLEY SCHOOLS - Poised to Making Giant Strides">
    
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">
    
       

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body style="background-image: url(assets/images/assembly.jpeg); background-repeat: no-repeat; background-size: cover;">

        <!-- Begin page -->
        <div class="accounstbg" ></div>
        <div class="home-btn d-none d-sm-block">
                <a href="#" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="login.php" class="logo logo-admin"><img src="../assets/img/favicon.png" alt="" height="60"></a>
                        </div>
                        <h5 class="font-18 text-center">Sign in to continue Student Portal.</h5>
                        <center style="color: red;"><?php if (isset($_GET['e'])) {
                           echo "<p>incorrect username or password</p>";
                        }?></center>
    
                        <form class="form-horizontal m-t-30" action="logger-student.php" method="post" autocomplete="off">
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Username</label>
                                    <input class="form-control" type="text" name="surname" required="required" placeholder="Input your surname" autocomplete="off">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" type="password" name="password" required="required" placeholder="Input your pin here" autocomplete="off">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                                  </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit" style="color: red;">Log In</button>
                                </div>
                            </div>
    
                                                        </div>
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>