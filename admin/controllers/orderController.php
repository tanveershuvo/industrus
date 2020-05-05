<?php
session_start();
include_once("../../dbCon.php");
$conn = connect();

if (isset($_POST['accept-sample'])) {
    $sql = "UPDATE `order_details` SET status=1 WHERE orderId=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['orderId']);
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        $_SESSION['msg'] = ['title' => 'Sample request accepted', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been accepted !', 'type' => 'success'];
        header('Location:../sample-requests');
    }
} else if (isset($_POST['decline-sample'])) {
    $sql = "UPDATE `order_details` SET status=2 WHERE orderId=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['orderId']);
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        $_SESSION['msg'] = ['title' => 'Sample request declined', 'icon' => 'exclamation-triangle',  'body' => 'Order id ' . $orderId . ' has been declined !', 'type' => 'warning'];
        header('Location:../sample-requests');
    }
}
if (isset($_POST['accept-order'])) {
    $sql = "UPDATE `order_details` SET status=5 WHERE orderId=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['orderId']);
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        $_SESSION['msg'] = ['title' => 'Order is accepted', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been accepted !', 'type' => 'success'];
        header('Location:../detailed-orders');
    }
} else if (isset($_POST['decline-order'])) {
    $sql = "UPDATE `order_details` SET status=6 WHERE orderId=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $orderId);
    $orderId = mysqli_real_escape_string($conn, $_POST['orderId']);
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        $_SESSION['msg'] = ['title' => 'Order is declined', 'icon' => 'exclamation-triangle',  'body' => 'Order id ' . $orderId . ' has been declined !', 'type' => 'warning'];
        header('Location:../detailed-orders');
    }
}
