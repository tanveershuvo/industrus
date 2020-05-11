<?php
session_start();
include_once("../dbCon.php");
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
    header("Location:../finished-orders");
}
if (isset($_POST['movetoAllocation'])) {
    $sql = "UPDATE `order_details` SET`status` = 3 WHERE orderId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",  $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['msg'] = ['title' => 'Negotiation Complete!', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been in Pre-order !', 'type' => 'success'];
    header("Location:../detailed-orders");
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
    header("Location:../knitting-finished-orders");
}

if (isset($_POST['cutting_done'])) {
    $sql = "UPDATE `order_tasks` SET `finished_at`= ? ,`status` = 2 WHERE order_id = ? AND department_id = 2";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $ddate = date('m/d/Y');
    $stmt->execute();
    $sql = "UPDATE `order_tasks` SET `started_at`= ? ,`status` = 1 WHERE order_id = ? AND department_id = 3";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $date = date('m/d/Y');
    $ddate = date('m/d/Y', strtotime($date . ' + 1 days'));
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['msg'] = ['title' => 'Cutting Finished!', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been Finished Knitting !', 'type' => 'success'];
    header("Location:../cutting-finished-orders");
}
if (isset($_POST['sewing_done'])) {
    $sql = "UPDATE `order_tasks` SET `finished_at`= ? ,`status` = 2 WHERE order_id = ? AND department_id = 3";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $ddate = date('m/d/Y');
    $stmt->execute();
    $sql = "UPDATE `order_tasks` SET `started_at`= ? ,`status` = 1 WHERE order_id = ? AND department_id = 4";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $date = date('m/d/Y');
    $ddate = date('m/d/Y', strtotime($date . ' + 1 days'));
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['msg'] = ['title' => 'Sewing Finished!', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been Finished Knitting !', 'type' => 'success'];
    header("Location:../sewing-finished-orders");
}
if (isset($_POST['package_done'])) {
    $sql = "UPDATE `order_tasks` SET `finished_at`= ? ,`status` = 2 WHERE order_id = ? AND department_id = 4";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ddate, $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
    $ddate = date('m/d/Y');
    $stmt->execute();
    $sql = "UPDATE `order_details` SET `status` = 8 WHERE orderId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $orderId);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    $_SESSION['msg'] = ['title' => 'Packaging Finished!', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been Finished Knitting !', 'type' => 'success'];
    header("Location:../package-finished-orders");
}
