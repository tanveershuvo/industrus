<?php
if (isset($_POST['submit'])) {

    foreach ($_POST as $param_name => $param_val) {
        echo "$param_name =  $param_val<br />\n";
    }
    $sql = "SELECT * FROM sample_order WHERE orderId = ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $id = mysqli_real_escape_string($conn, $_POST['order_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $row = $result->fetch_assoc();
    //

    $query = "INSERT INTO `order_details`(`orderId`, `buyerName`, `companyName`, `productName`, `productPrice`, `composition`, `fabricsWeight`, `samplePcs`, `fabricConstruction`, `febricDescription`,`productSketch`, `yarnDescription`,`user_id`)
    VALUES (?, ?, ?,?,?,?, ?, ?,?,?,?,?,?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssssss", $id, $buyerName, $companyName, $productName, $productPrice, $composition, $fabricsWeight, $samplePcs, $fabricConstruction, $febricDescription, $uploadInstance, $yarnDescription, $userID);

    $id = uniqid();
    $userID = $_SESSION['id'];
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

    $stmt->execute();
}
