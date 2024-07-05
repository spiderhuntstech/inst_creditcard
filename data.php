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
                ?>
                <?php 
                include 'layouts/breadcrumb.php'; 
                require_once "layouts/config.php";
                $sql = "SELECT * FROM `instagram_influnces`";
                $user_id = $_SESSION['id'];
                $status = mysqli_fetch_assoc(mysqli_query($link,"SELECT role FROM `users`WHERE id = $user_id"));
                $instagram_influnces = mysqli_query($link,$sql);
                ?>
                <!-- end page title -->
                <?php 
                if($status['role'] == 1){
                ?>
                <button class="btn btn-danger" style="float:right;" id="dropData">Delete All Records</button>
                <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#userModal">Upload Your CSV File</a>
                <?php
                }
                ?>

                <!-- Modal -->
                <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="margin:3.75rem auto;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="userModalLabel">Please Choose Your CSV File</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="php/datacsv.php" method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="customFileInput" name="file" required>
                                        <label class="input-group-text" for="customFileInput"></label>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" name="uploadcsv" class="btn btn-primary">Upload CSV File</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br/><br/>
                <div class="row">
                <div class="card">
                            <div class="card-body pt-xl-1">
                                <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered cell-border" style="width:100% !important;">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Followers Count</th>
                                                    <th>Following Count</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while($instagram_influnce = mysqli_fetch_assoc($instagram_influnces)){
                                                ?>
                                                <tr>
                                                    <td><?=$instagram_influnce['username']?></td>
                                                    <td><?=$instagram_influnce['follower_count']?></td>
                                                    <td><?=$instagram_influnce['following_count']?></td>
                                                    <td>
                                                    <a href="edit.php?id=<?=$instagram_influnce['id']?>" class="btn btn-info" >Edit</a>
                                                        <a href="detail.php?id=<?=$instagram_influnce['id']?>" class="btn btn-success">View</a>
                                                        <a href="php/deletedata.php?id=<?=$instagram_influnce['id']?>" class="btn btn-danger">Delete</a>
                                                </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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
<script src="https://code.jquery.com/jquery-3.7.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#example').DataTable({
            "pageLength": 100,
            scrollX: true
        });
        $(document).ready(function () {
            // When the button is clicked
            $('#dropData').on('click', function () {
                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This action will delete all records!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete all records!'
                }).then((result) => {
                    // If user confirms deletion
                    if (result.isConfirmed) {
                        var dataToSend = {
                                            table: 'data'
                                        };

                                        // AJAX request
                                        $.ajax({
                                            url: 'php/deletData.php', 
                                            type: 'POST',
                                            contentType: 'application/json',
                                            data: JSON.stringify(dataToSend),
                                            success: function (response) {
                                                if(response == '1'){
                                                    Swal.fire({
                                                            title: "Congratulations",
                                                            text: "Your Data Has been removed successfully",
                                                            icon: "success"
                                                            });
                                                            
                                                }
                                                location.reload(true);
                                            },
                                            error: function (xhr, status, error) {
                                                console.error('Error:', error);
                                            }
                                        });
                    }
                });
            });

        });
    </script>

</body>

</html>