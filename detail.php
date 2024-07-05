<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Profile"]; ?> | Instagram</title>

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
                $maintitle = "Instagram";
                $title = 'Details';
                ?>
                <?php
                 include 'layouts/breadcrumb.php';
                 require_once "layouts/config.php";

                 $id = $_GET['id'];
                 $sql = "SELECT * FROM `instagram_influnces` WHERE `id`='$id'";
                 $instagram_influnces = mysqli_query($link,$sql);
                 $instagram_influnce = mysqli_fetch_assoc($instagram_influnces);
                 ?>
                <!-- end page title -->

                <div class="row mb-4">
                    <div class="col-xl-8">
                        <div class="card mb-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                                        <i class="bx bx-user-circle font-size-20"></i>
                                        <span class="d-none d-sm-block">About</span>
                                    </a>
                                </li>

                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content p-4">
                                <div class="tab-pane active" id="about" role="tabpanel">
                                    <div>
                                        <div>
                                            <h5 class="font-size-16 mb-4">Information</h5>
                                            <div class="table-responsive" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-radius:10px;padding:1rem;">
                                                <table class="table border">
                                                    <thead>
                                                        <tr>
                                                            <th>Follower of <?=$instagram_influnce['fullname']?></th>
                                                            <td><?=$instagram_influnce['follower_count']?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Following of <?=$instagram_influnce['fullname']?></th>
                                                            <td><?=$instagram_influnce['following_count']?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Country of <?=$instagram_influnce['fullname']?></th>
                                                            <td><?=$instagram_influnce['country']?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>City of <?=$instagram_influnce['fullname']?></th>
                                                            <td><?=$instagram_influnce['city']?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Category of <?=$instagram_influnce['fullname']?></th>
                                                            <td><?=$instagram_influnce['category']?></td>
                                                        </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="profile-user"></div>
                            <div class="card-body" style="min-height:234px;">
                                <div class="profile-content text-center">
                                    <div class="profile-user-img">
                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="mt-3 mb-1"><?=$instagram_influnce['fullname']?></h5>
                                    <p class="text-muted"><?=$instagram_influnce['username']?></p>


                                    <p class="text-muted mb-1">
                                    <?=$instagram_influnce['biography']?>
                                    </p>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>

<script src="assets/js/app.js"></script>

</body>

</html>