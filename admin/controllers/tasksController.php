<?php
session_start();
include_once("../../dbCon.php");
$conn = connect();

if (isset($_POST['save'])) {

    $department_id = $_POST['dep_id'];
    $department_idArr = sizeof($department_id);

    for ($i = 0; $i < $department_idArr; $i++) {
        $sql = "INSERT INTO `order_tasks`(`order_id`, `department_id`, `assign_days`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $orderId, $dep_id, $assigned_days);
        $orderId = mysqli_real_escape_string($conn, $_POST['order_id']);
        $dep_id = mysqli_real_escape_string($conn, $_POST['dep_id'][$i]);
        $assigned_days = mysqli_real_escape_string($conn, $_POST['assigned_days'][$i]);
        $stmt->execute();
    }
    $stmt->close();
    $conn->close();
    $_SESSION['msg'] = ['title' => 'Tasks assigned', 'icon' => 'check-circle', 'body' => 'Order id ' . $orderId . ' has been assigned !', 'type' => 'success'];
    header("Location:../order-task?order-id=$orderId&&editable");
}
