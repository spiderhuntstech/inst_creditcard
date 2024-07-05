<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Dashboard"]; ?> |  Project - Admin</title>

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
                $sql = "SELECT * FROM `users`";
                $payments = mysqli_query($link,$sql);
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
                                    <table class="table table-striped table-centered align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                            while($payment = mysqli_fetch_assoc($payments)){
                                            ?>
                                            <tr>
                                                <td><?=$count?></td>
                                                <td>
                                                <?=$payment['username']?>
                                                </td>
                                                <td>
                                                <?=$payment['useremail']?>
                                                </td>
                                                <td>
                                                <?php if($payment['role'] == 1){ echo "Admin"; }else{ echo "User"; }?>
                                                </td>
                                                <td>
                                                <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edituser<?=$payment['id'] ?>">Edit</a>
                                                            <div class="modal fade" id="edituser<?=$payment['id'] ?>" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" style="margin:3.75rem auto;">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="userModalLabel">Edit Data</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                        <form action="php/editadmin.php" method="post" >
                                                                        <div class="form-group">
                                                                            <label for="name">Name</label>
                                                                            <input type="text" class="form-control"  name="name" value="<?=$payment['username'] ?>">
                                                                            <input type="hidden" class="form-control"  name="adminuser_id" value="<?=$payment['id'] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Email</label>
                                                                            <input type="email" class="form-control"  name="email" value="<?=$payment['useremail'] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="name">Password</label>
                                                                            <input type="password" class="form-control"  name="password" value="">
                                                                        </div>
                                                                        <div class="mt-3">
                                                                            <button type="submit" name="uploaddata" class="btn btn-primary">Update data</button>
                                                                        </div>
                                                                    </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </td>
                                            </tr>
                                            <?php
                                            $count++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php
                                }else{
                                    ?>
                                    <form action="php/edituser.php" method="post" >
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control"  name="name" value="<?=$status['username'] ?>">
                                            <input type="hidden" class="form-control"  name="status_id" value="<?=$status['id'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="email" class="form-control"  name="email" value="<?=$status['useremail'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Password</label>
                                            <input type="password" class="form-control"  name="password" value="">
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