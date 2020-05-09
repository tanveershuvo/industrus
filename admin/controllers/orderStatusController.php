<?php
session_start();
include_once("../../dbCon.php");
$conn = connect();

if (isset($_POST['finished'])) {
    $sql = "UPDATE `order_details` SET `finishedDate`= ? ,`status` = 7 WHERE orderId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $ddate = date('m/d/Y');
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['msg'] = ['title' => 'Order Finished!', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been Finished !', 'type' => 'success'];
    header("Location:../marchandiser/finished-orders");
}

if (isset($_POST['knitting_done'])) {
    $sql = "UPDATE `order_tasks` SET `finished_at`= ? ,`status` = 2 WHERE order_id = ? AND department_id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $ddate = date('m/d/Y');
    $stmt->execute();
    $sql = "UPDATE `order_tasks` SET `started_at`= ? ,`status` = 1 WHERE order_id = ? AND department_id = 2";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $date = date('m/d/Y');
    $ddate = date('m/d/Y', strtotime($date . ' + 1 days'));
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['msg'] = ['title' => 'Knitting Finished!', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been Finished Knitting !', 'type' => 'success'];
    header("Location:../knitting-master/knitting-finished-orders");
}
