<?php
session_start();
include_once("../../dbCon.php");
$conn = connect();

if (isset($_POST['done'])) {

    $department_name = $_POST['department_name'];
    $department_nameArr = sizeof($department_name);

    for ($i = 0; $i < $department_nameArr; $i++) {
        $sql = "INSERT INTO `deaprtments`(`id`, `department_name`, `production_per_day`) VALUES ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $orderId);
        $orderId = mysqli_real_escape_string($conn, $_POST['orderId']);
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            $_SESSION['msg'] = ['title' => 'Sample request accepted', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been accepted !', 'type' => 'success'];
            header('Location:../sample-requests');
        }
    }
}
