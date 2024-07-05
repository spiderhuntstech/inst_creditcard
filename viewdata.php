<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Dashboard"]; ?> | Instagram - Admin</title>

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
                $title = 'Welcome !';
                ?>
                <?php 
                include 'layouts/breadcrumb.php'; 
                require_once "layouts/config.php";
                $id= $_GET['data_id'];
                $sql = "SELECT * FROM `data` WHERE `id`='$id'";
                $datas = mysqli_query($link,$sql);
                ?>
                <div class="row">
                <div class="card">
                            <div class="card-body pt-xl-1">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered cell-border">
                                            <tbody>
                                                <?php
                                                while($data = mysqli_fetch_assoc($datas)){
                                                ?>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>
                                                            <?=$data['Name'] ?>
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td>Company Name</td>
                                                        <td>
                                                            <?=$data['CompanyName'] ?>
                                                        </td>
                                                        </tr>
                                                <tr>
                                                    <td>Net Cash from / (used in) Operating Activities</td>
                                                        <td>
                                                        <?=$data['OperatingActivities'] ?>
                                                        </td>
                                                        </tr>
                                                <tr>
                                                    <td>Net Cash from / (used in) Investing Activities</td>
                                                        <td>
                                                        <?=$data['InvestingActivities'] ?>
                                                        </td>
                                                        </tr>
                                                <tr>
                                                    <td>Net Cash from / (used in) Financing Activities</td>
                                                        <td>
                                                        <?=$data['FinancingActivities'] ?>
                                                        </td>
                                                        </tr>
                                                <tr>
                                                    <td>Cash and Cash Equivalents at End of Period</td>
                                                        <td>
                                                        <?=$data['Cash'] ?>
                                                        </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                </table>
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