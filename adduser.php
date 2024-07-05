<?php
session_start();
require_once "layouts/config.php";

$useremail = $username =  $password = $confirm_password = "";
$useremail_err = $username_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["useremail"]))) {
        $useremail_err = "Please enter a useremail.";
    } elseif (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)) {
        $useremail_err = "Invalid email format";
    } else {
        $sql = "SELECT id FROM users WHERE useremail = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);

            $param_useremail = trim($_POST["useremail"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $useremail_err = "This useremail is already taken.";
                } else {
                    $useremail = trim($_POST["useremail"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
            
        }
    }

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 2) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please enter a confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($useremail_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (useremail, username, password, token, role) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
// Assigning the role value to a variable
$role = 0;

// Then, bind this variable by reference
mysqli_stmt_bind_param($stmt, "sssss", $param_useremail, $param_username, $param_password, $param_token, $role);

            // Set parameters
            $param_useremail = $useremail;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_token = bin2hex(random_bytes(50)); // generate unique token

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: index.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<?php include 'layouts/head-main.php'; ?>
<head>

    <title>|  Project - Admin</title>

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = " Project";
                $title = 'Welcome !';
                include 'layouts/breadcrumb.php'; 
                require_once "layouts/config.php";
                $user_id = $_SESSION['id'];
                $status = mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM `users` WHERE id = $user_id"));
                ?>
                <!-- end page title -->
                <a href="adduser.php" class="btn btn-primary">Add New User</a>
                <br /><br />
                <div class="row">
                <div class="card">
                            <div class="card-body pt-xl-1">
                                <div class="table-responsive">
                                <?php 
                                if($status['role'] == 1){
                                    ?>
                                    <form class="needs-validation custom-form mt-4 pt-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
                                        <div class="mb-3 <?php echo (!empty($useremail_err)) ? 'has-error' : ''; ?>">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" name="useremail" id="useremail" placeholder="Enter email">  
                                            <span class="text-danger"><?php echo $useremail_err; ?></span>      
                                        </div>

                                        <div class="mb-3 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                            <span class="text-danger"><?php echo $username_err; ?></span>
                                        </div>

                                        <div class="mb-3 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                                            <span class="text-danger"><?php echo $password_err; ?></span>        
                                        </div>

                                        <div class="mb-3 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                            <label class="form-label" for="userpassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password" value="<?php echo $confirm_password; ?>">
                                            <span class="text-danger"><?php echo $confirm_password_err; ?></span>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                                            <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                        
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                    </form>
                                    <?php
                                }
                                    ?>
                                </div>
                            </div>
                        </div>
                </div>


            </div> 
        </div>


        <?php include 'layouts/footer.php'; ?>
    </div>

</div>

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>

<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/chartjs.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>