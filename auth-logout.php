<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php session_destroy();?>

    <head>
        
        <title><?php echo $language["Log_Out"]; ?> | Instagram - Admin</title>

        <?php include 'layouts/head.php'; ?>

        <?php include 'layouts/head-style.php'; ?>

    </head>

    <?php include 'layouts/body.php'; ?>

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="text-center mb-4">
                            <a href="index.php">
                                <img src="../images/logo.png" alt="" height="22"> <span class="logo-txt"></span>
                            </a>
                       </div>

                        <div class="card">
                            <div class="card-body p-4"> 
                                <div class="text-center mt-3">
                                    <div class="avatar-xl mx-auto">
                                        <div class="avatar-title bg-light text-primary h1 rounded-circle">
                                            <i class="bx bxs-user"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <h5>You are Logged Out</h5>
                                        <p class="text-muted font-size-15">Thank you for using <span class="fw-semibold text-dark">Instagram</span></p>
                                        <div class="mt-4">
                                            <a href="auth-login.php" class="btn btn-primary w-100 waves-effect waves-light">Sign In</a>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

        <?php include 'layouts/vendor-scripts.php'; ?>

    </body>
</html>
