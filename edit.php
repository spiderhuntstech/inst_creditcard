<?php
session_start();
require_once "layouts/config.php";
include 'layouts/head-main.php'; ?>
<head>

    <title>|  Instagram</title>

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
                $id = $_GET['id'];
                $sql = "SELECT * FROM `instagram_influnces` WHERE `id`='$id'";
                $instagram_influnces = mysqli_query($link,$sql);
                $instagram_influnce = mysqli_fetch_assoc($instagram_influnces);
                $user_id = $_SESSION['id'];
                $status = mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM `users` WHERE id = $user_id"));
                $instagram_influnces = mysqli_query($link,$sql);
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
                                                                            <form action="php/editdata.php" method="post" >
                                                                                <div class="form-group">
                                                                                    <label for="name">Username</label>
                                                                                    <input type="text" class="form-control"  name="username" value="<?=$instagram_influnce['username'] ?>">
                                                                                    <input type="hidden" class="form-control"  name="id" value="<?=$instagram_influnce['id'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Full Name</label>
                                                                                    <input type="text" class="form-control"  name="fullname" value="<?=$instagram_influnce['fullname'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Instagram Link</label>
                                                                                    <input type="text" class="form-control"  name="ig_link" value="<?=$instagram_influnce['ig_link'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Country</label>
                                                                                    <input type="text" class="form-control"  name="country" value="<?=$instagram_influnce['country'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">City</label>
                                                                                    <input type="text" class="form-control"  name="city" value="<?=$instagram_influnce['city'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Languages</label>
                                                                                    <input type="text" class="form-control"  name="languages" value="<?=$instagram_influnce['languages'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Biography</label>
                                                                                    <textarea class="form-control"  name="biography"><?=$instagram_influnce['biography'] ?></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Follower Count</label>
                                                                                    <input type="text" class="form-control"  name="follower_count" value="<?=$instagram_influnce['follower_count'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Following Count</label>
                                                                                    <input type="text" class="form-control"  name="following_count" value="<?=$instagram_influnce['following_count'] ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Media Count</label>
                                                                                    <input type="text" class="form-control"  name="media_count" value="<?=$instagram_influnce['media_count'] ?>">
                                                                                </div>
                                                                                <div class="mt-3">
                                                                                    <button type="submit" name="uploaddata" class="btn btn-primary">Update data</button>
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