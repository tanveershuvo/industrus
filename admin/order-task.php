<?php
$title = "Industrus | Allocate Tasks orders";
include 'includes/admin-header.php';
include 'includes/admin-navbar.php';
include 'includes/admin-sidebar.php';
include_once("../dbCon.php");
$conn = connect();
if (isset($_GET['order-id'])) {
    $sql = "SELECT * FROM order_details WHERE orderId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $id = $_GET['order-id'];
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $sql = "SELECT SUM(total) as 'total' FROM `order_colors_quantity` WHERE order_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $sum = $result->fetch_assoc();
    $stmt->close();
}
$conn->close();
?>

<!-- Main content -->
<section class="content py-2">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-mitten"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Knitting</span>
                        <span class="info-box-number">
                            500
                            <small>kg per day</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-cut"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Cutting</span>
                        <span class="info-box-number">
                            2000
                            <small>pcs per day</small>
                        </span>
                    </div>
                </div>
            </div>

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-align-justify"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sewing</span>
                        <span class="info-box-number">
                            1000
                            <small>pcs per day</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-boxes"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Packaging</span>
                        <span class="info-box-number">
                            1500
                            <small>pcs per day</small>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>

<section class="content py-1">
    <div class="card card-primary card-outline">
        <div class="card-header row" style="font-weight:bold;">
            <div class="col-4">
                Order Date : <?= $row['detailOrderDate'] ?>
            </div>
            <div class="col-4">
                Shipment Date : <?= $row['shipmentDate'] ?>
            </div>
            <div class="col-4">
                <?php
                $date = date('m/d/Y');
                $startTimeStamp = strtotime($date);
                $endTimeStamp = strtotime($row['shipmentDate']);
                $timeDiff = abs($endTimeStamp - $startTimeStamp);
                $numberDays = $timeDiff / 86400;
                $numberDays = intval($numberDays);
                echo $numberDays;
                ?> days left before shipment
            </div>

        </div>
        <form id="form" action="" method="POST">
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-striped text-center">
                    <thead>
                        <tr class="">
                            <th width="33%">Department</th>
                            <th width="33%">Amount</th>
                            <th width="33%">Time to complete(In days)</th>
                        </tr>
                    </thead>
                    <tbody style="font-weight:bold;font-size:15px;">
                        <tr>
                            <td>Knitting</td>
                            <td>Total fabric : Kg</td>
                            <td><input type="text" class="form-control" name="knitting_time"></td>
                        </tr>
                        <tr>
                            <td>Cutting</td>
                            <td>Total pcs : <?= $sum['total'] ?></td>
                            <td>
                                <input type="text" class="form-control" name="cutting_time">
                            </td>
                        </tr>
                        <tr>
                            <td>Sewing</td>
                            <td>Total pcs : <?= $sum['total'] ?></td>
                            <td><input type="text" class="form-control" name="sewing_time"></td>
                        </tr>
                        <tr>
                            <td>Packaging
                            </td>
                            <td>Total packages : <?php $package = $sum['total'] / $row['pcs_per_box'];
                                                    $package = intval($package);
                                                    echo $package; ?></td>
                            <td><input type="text" class="form-control" name="packaging_time"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <button class="btn btn-primary col-sm-4">Done</button>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->

<?php include 'includes/admin-footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {

        $('#form').validate({
            rules: {
                knitting_time: {
                    required: true,
                    digits: true
                },
                cutting_time: {
                    required: true,
                    digits: true
                },
                sewing_time: {
                    required: true,
                    digits: true
                },
                packaging_time: {
                    required: true,
                    digits: true
                },
            },
            messages: {
                knitting_time: {
                    required: "Pllease enter days needed to complete the task",
                    digits: "Please enter vaild days"
                },
                cutting_time: {
                    required: "Pllease enter days needed to complete the task",
                    digits: "Please enter vaild days"
                },
                sewing_time: {
                    required: "Pllease enter days needed to complete the task",
                    digits: "Please enter vaild days"
                },
                packaging_time: {
                    required: "Pllease enter days needed to complete the task",
                    digits: "Please enter vaild days"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-control').after(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
</body>

</html>