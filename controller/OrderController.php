<?php
include_once("../dbCon.php");
include_once("../imageUpload.php");
$conn = connect();
if (isset($_POST['samplesubmit'])) {
    $query = "INSERT INTO `sample_order`(`orderId`, `buyerName`, `companyName`, `productName`, `productPrice`, `composition`, `fabricsWeight`, `samplePcs`, `fabricConstruction`, `febricDescription`,`productSketch`, `yarnDescription`)
              VALUES (?, ?, ?,?,?,?, ?, ?,?,?,?,?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssssssss", $id, $buyerName, $companyName, $productName, $productPrice, $composition, $fabricsWeight, $samplePcs, $fabricConstruction, $febricDescription, $uploadInstance, $yarnDescription);

    $id = uniqid();
    $uploadInstance = uploadImageChosen($_FILES['productSketch']);
    $buyerName = mysqli_real_escape_string($conn, $_POST['buyerName']);
    $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productPrice =  mysqli_real_escape_string($conn, $_POST['productPrice']);
    $composition = mysqli_real_escape_string($conn, $_POST['composition']);
    $fabricsWeight = mysqli_real_escape_string($conn, $_POST['fabricsWeight']);
    $samplePcs = mysqli_real_escape_string($conn, $_POST['samplePcs']);
    $fabricConstruction = mysqli_real_escape_string($conn, $_POST['fabricConstruction']);
    $febricDescription = mysqli_real_escape_string($conn, $_POST['febricDescription']);
    $yarnDescription = mysqli_real_escape_string($conn, $_POST['yarnDescription']);

    $result = $stmt->execute();

    $colors = $_POST['colors'];
    $arr = sizeof($colors);

    for ($i = 0; $i < $arr; $i++) {

        $query = "INSERT INTO `sample_colors_quantity`(`order_id`, `color`, `sQuantity`, `mQuantity`, `lQuantity`, `xlQuantity`, `xxlQuantity`, `xxxlQuantity`,`total`) VALUES (?, ?, ?,?,?,?,?,?,?)";
        $clmt = $conn->prepare($query);
        $clmt->bind_param("ssssssssi", $id, $colors, $mQuantity, $sQuantity, $lQuantity, $xlQuantity, $xxlQuantity, $xxxlQuantity, $total);

        $colors = mysqli_real_escape_string($conn, $_POST['colors'][$i]);
        $mQuantity = mysqli_real_escape_string($conn, $_POST['mQuantity'][$i]);
        $sQuantity = mysqli_real_escape_string($conn, $_POST['sQuantity'][$i]);
        $lQuantity = mysqli_real_escape_string($conn, $_POST['lQuantity'][$i]);
        $xlQuantity = mysqli_real_escape_string($conn, $_POST['xlQuantity'][$i]);
        $xxlQuantity = mysqli_real_escape_string($conn, $_POST['xxlQuantity'][$i]);
        $xxxlQuantity = mysqli_real_escape_string($conn, $_POST['xxxlQuantity'][$i]);

        $total = ($_POST['sQuantity'][$i] + $_POST['mQuantity'][$i] + $_POST['lQuantity'][$i] + $_POST['xlQuantity'][$i] + $_POST['xxlQuantity'][$i] + $_POST['xxxlQuantity'][$i]);
        $clmt->execute();
    }



    $stmt->close();
    $clmt->close();
    $conn->close();
}
