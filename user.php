<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Dashboard"]; ?> | Symox - Admin & Dashboard Template</title>

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
                $maintitle = "Symox";
                $title = 'Welcome !';
                ?>
                <?php 
                include 'layouts/breadcrumb.php'; 
                require_once "layouts/config.php";
                $id=$_GET['id'];
                $sql = "SELECT * FROM `user_information` WHERE `user_information`.`id`='$id'";
                $users = mysqli_query($link,$sql);
                $user = mysqli_fetch_assoc($users)
                ?>
                <!-- end page title -->

                <div class="row">
                <div class="card">
                            <div class="card-body pt-xl-1">
                                <div class="table-responsive">
                                    <table class="table table-striped table-centered align-middle table-nowrap mb-0">

                                        <tbody>
                                            <tr>
                                                <td><a href="#" class="text-body" style="font-weight:bold;font-color:black;">Name</a> </td>
                                                <td><a href="javascript: void(0);" class="text-body"><?=$user['name']?></a> </td>

                                            </tr>
                                            <br>
                                            <tr>

                                                <td><a href="#" class="text-body" style="font-weight:bold;font-color:black;">Last Name</a> </td>
                                                <td><a href="javascript: void(0);" class="text-body"><?=$user['lastname']?></a> </td>

                                            </tr>
                                            <tr>
                                            <td><a href="#" class="text-body" style="font-weight:bold;font-color:black;">Email</a> </td>
                                            <td><a href="javascript: void(0);" class="text-body"><?=$user['email']?></a> </td>

                                            </tr>
                                            <tr>
                                            <td><a href="#" class="text-body" style="font-weight:bold;font-color:black;">Phone</a> </td>
                                            <td><a href="javascript: void(0);" class="text-body"><?=$user['phone']?></a> </td>

                                            </tr>
                                            <tr>
                                            <td><a href="#" class="text-body" style="font-weight:bold;font-color:black;">Design</a> </td>
                                            <td><a href="javascript: void(0);" class="text-body"><?=$user['design_build']?></a> </td>

                                            </tr>
                                            <tr>
                                            <td><a href="#" class="text-body" style="font-weight:bold;font-color:black;">Energy</a> </td>
                                            <td><a href="javascript: void(0);" class="text-body"><?=$user['energy']?></a> </td>

                                            </tr>
                                            <tr>
                                            <td><a href="#" class="text-body" style="font-weight:bold;font-color:black;">Zipcode</a> </td>
                                            <td><a href="javascript: void(0);" class="text-body"><?=$user['zipcode']?></a> </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>



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

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Chart JS -->
<script src="assets/js/pages/chartjs.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>