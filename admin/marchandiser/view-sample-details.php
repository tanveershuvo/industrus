<?php
$title = 'Indutrus| Sample Details';
include '../includes/admin-header.php';
include '../includes/admin-navbar.php';
include '../includes/admin-sidebar.php';
include_once("../../dbCon.php");
$conn = connect();
if (isset($_GET['order-id'])) {
    $sql = "SELECT * FROM order_details WHERE orderId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $id = $_GET['order-id'];
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $row = $result->fetch_assoc();
    //
    $query = "SELECT * FROM order_colors_quantity WHERE order_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $order_id);
    $order_id = $_GET['order-id'];
    $stmt->execute();
    $result2 = $stmt->get_result();
    while ($data = $result2->fetch_assoc()) {
        $colors[] = $data;
    }
    $stmt->close();
    //
    $conn->close();
} else {
    return;
}

?>

<!-- Main content -->
<section class="content py-3" id="printableArea">
    <div class="card card-primary card-outline bg-light">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-4">
                    <h4> Order ID :&nbsp;<?= $row['orderId'] ?></h4>
                </div>
                <div class="col-sm-4">
                    <h4>Sample Order Date : <?= $row['sampleOrderDate'] ?></h4>
                </div>
                <?php if ($row['status'] == 1) {
                ?>
                    <div class="col-sm-4 row">
                        <div class="col-sm-4">
                            <button class="btn btn-outline-dark btn-block print" onclick="printDiv('printableArea')"><i class="fas fa-print"></i> Print</button>
                        </div>
                    </div>
                <?php } else if ($row['status'] == 0) {
                    echo '<h5 style="color:blue;font:bold;" >To calculate, Accept order First! </h5>';
                } ?>
            </div>
        </div>
        <div class="card-body mt-3">
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="buyerName" class="control-label"><b>Buyer Name :</b></label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="buyerName" name="buyerName" value="<?= $row['buyerName'] ?>" disabled>
                </div>

                <div class="col-sm-2">
                    <label for="companyName" class="control-label"><b>Company Name :</b></label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $row['companyName'] ?>" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="productName" class="control-label"><b>Product Name :</b></label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $row['productName'] ?>" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="productName" class="control-label"><b>Product Price Per Peice <span class="error">*</span> :</b></label>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control num" aria-label="Amount (to the nearest dollar)" value="<?= $row['productPrice'] ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="composition" class="control-label"><b>Composition :</b></label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $row['composition'] ?>" disabled>
                </div>
                <div class="col-sm-2">
                    <label for="fabricsWeight" class="control-label"><b>Fabrics weight
                            :</b></label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" value="<?= $row['fabricsWeight'] ?>" disabled>
                </div>
            </div>
            <?php
            foreach ($colors as $key => $value) {
                //print_r($value['color']);
            ?>
                <div class="card border-success">
                    <div class="card-body text-success">
                        <div class="mb-2 row">
                            <div class="col-sm-2">
                                <label for="colors" class="control-label"><b>Colors :</b></label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="<?= $value['color'] ?>" disabled>
                            </div>
                        </div>
                        <hr>
                        <div class="card-subtitle mb-1 text-muted"><b>Quantity in pieces by Size & Color :</b></div>
                        <div class="row">
                            <div class="col-sm-2">
                                <label for="mQuantity" class="control-label">M :</label>
                                <input type="text" class="form-control" value="<?= $value['mQuantity'] ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <label for="sQuantity" class="">S :</label>

                                <input type="text" class="form-control" value="<?= $value['sQuantity'] ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <label for="lQuantity" class="">L :</label>
                                <input type="text" class="form-control" value="<?= $value['lQuantity'] ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <label for="xlQuantity" class="control-label">XL :</label>
                                <input type="text" class="form-control" value="<?= $value['xlQuantity'] ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <label for="xxlQuantity" class="">XXL :</label>
                                <input type="text" class="form-control" value="<?= $value['xxlQuantity'] ?>" disabled>
                            </div>
                            <div class="col-sm-2">
                                <label for="xxxlQuantity" class="">XXXL :</label>
                                <input type="text" class="form-control" value="<?= $value['xxxlQuantity'] ?>" disabled>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
            </br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="febricDescription"><b>Fabrics Description <span class="error">*</span> :</b></label>
                        <textarea class="form-control" rows="2" disabled><?= $row['febricDescription'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fabricConstruction" class="control-label"><b>Main Fabric Construction <span class="error">*</span> :</b></label>
                        <textarea class="form-control" rows="2" disabled><?= $row['fabricConstruction'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="yarnDescription" class="control-label"><b>Yarn Construction <span class="error">*</span> :</b></label>
                        <textarea class="form-control" rows="2" disabled><?= $row['yarnDescription'] ?></textarea>
                    </div>
                </div>
                <div class="row col-sm-6">
                    <div class="col-sm-4">
                        <label for="myImg" class="control-label"><b>Product Sketch:</b></label>
                    </div>
                    <div class="col-sm-8">
                        <img src="../../img/samples/<?= $row['productSketch'] ?>" data-action="zoom" alt="example" style="width:100%;max-width:300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../includes/admin-footer.php'; ?>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

    // function demoFromHTML() {
    //     var pdf = new jsPDF('p', 'pt', 'letter');

    //     // source can be HTML-formatted string, or a reference
    //     // to an actual DOM element from which the text will be scraped.
    //     source = $('#printableArea')[0];

    //     // we support special element handlers. Register them with jQuery-style 
    //     // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    //     // There is no support for any other type of selectors 
    //     // (class, of compound) at this time.
    //     specialElementHandlers = {
    //         // element with id of "bypass" - jQuery style selector
    //         '#bypassme': function(element, renderer) {
    //             // true = "handled elsewhere, bypass text extraction"
    //             return true
    //         }
    //     };
    //     margins = {
    //         top: 50,
    //         bottom: 60,
    //         left: 40,
    //         width: 500
    //     };
    //     // all coords and widths are in jsPDF instance's declared units
    //     // 'inches' in this case
    //     pdf.fromHTML(
    //         source, // HTML string or DOM elem ref.
    //         margins.left, // x coord
    //         margins.top, { // y coord
    //             'width': margins.width, // max width of content on PDF
    //             'elementHandlers': specialElementHandlers
    //         },

    //         function(dispose) {
    //             // dispose: object with X, Y of the last line add to the PDF 
    //             //          this allow the insertion of new lines after html
    //             window.open(pdf.output('bloburl'), '_blank');
    //             // pdf.save('Test.pdf');
    //         }, margins
    //     );
    // }
</script>
</body>

</html>