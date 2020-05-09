<?php
$title = 'Indutrus| Order Details';
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
    $query = "SELECT * FROM measurement_pattern WHERE order_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result2 = $stmt->get_result();
    while ($data = $result2->fetch_assoc()) {
        $measurements[] = $data;
    }
    //

    $stmt->close();
    //
    $conn->close();
} else {
    return;
}

?>

<!-- Main content -->
<section class="content py-3" id="printableArea">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-4">
                    <h5> Order ID :&nbsp;<?= $row['orderId'] ?></h5>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <button class=" btn btn-outline-dark col-sm-4  float-right print" onclick="printDiv('printableArea')"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card-text mt-3 mb-3">
                <div class="row text-center">
                    <div class="col-sm-4 ">
                        <label for="examples" class="mb-3"><b>Front Measurement Sketch :</b></label>
                        <a href="../../img/samples/<?= $row['frontMeasurementSketch'] ?>" data-toggle="lightbox" data-title="Front Measurement Sketch" data-gallery="gallery">
                            <img src="../../img/samples/<?= $row['frontMeasurementSketch'] ?>" class="img-fluid mb-2 border border-secondary" alt="Front Measurement Sketch" />
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <label for="examples" class="mb-3"><b>Back Measurement Sketch :</b></label>
                        <a href="../../img/samples/<?= $row['backMeasurementSketch'] ?>" data-toggle="lightbox" data-title="Back Measurement Sketch" data-gallery="gallery">
                            <img src="../../img/samples/<?= $row['backMeasurementSketch'] ?>" class="img-fluid mb-2 border border-secondary" alt="Back Measurement Sketch" />
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <label for="examples" class="mb-3"><b>Collar Measurement Sketch :</b></label>
                        <a href="../../img/samples/<?= $row['collarMeasurementSketch'] ?>" data-toggle="lightbox" data-title="Collar Measurement Sketch " data-gallery="gallery">
                            <img src="../../img/samples/<?= $row['collarMeasurementSketch'] ?>" class="img-fluid mb-2 border border-secondary" alt="Collar Measurement Sketch" />
                        </a>
                    </div>
                </div>
            </div>
            <h5 class="mb-3"><strong>Pattern/Chart of</strong> Measurement : </h5>
            <table class="table table-head-fixed text-nowrap table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Reference </th>
                        <th width="25%" scope="col">Description</th>
                        <th scope="col">Tol(-+) (in Inch)</th>
                        <th scope="col" class="s">S (in Inch)</th>
                        <th scope="col" class="m">M (in Inch)</th>
                        <th scope="col" class="l">L (in Inch)</th>
                        <th scope="col" class="xl">XL (in Inch)</th>
                        <th scope="col" class="xxl">XXL (in Inch)</th>
                        <th scope="col" class="xxxl">XXXL (in Inch)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($measurements as $measurement) { ?>
                        <tr>
                            <td><?= $measurement['reference'] ?></td>
                            <td><?= $measurement['description'] ?></td>
                            <td><?= $measurement['tolerance'] ?></td>
                            <td><?= $measurement['s_size'] ?></td>
                            <td><?= $measurement['m_size'] ?></td>
                            <td><?= $measurement['l_size'] ?></td>
                            <td><?= $measurement['xl_size'] ?></td>
                            <td><?= $measurement['xxl_size'] ?></td>
                            <td><?= $measurement['xxl_size'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- /.card -->


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
<script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    })
</script>
</body>

</html>