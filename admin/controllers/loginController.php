<?php
session_start();
include_once("../../dbCon.php");
$conn = connect();
if (isset($_POST["login"])) {

	$sql = "SELECT * FROM admin_login where email =? AND password=?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ss", $email, $password);

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, sha1($_POST['password']));

	$stmt->execute();
	$result = $stmt->get_result();
	$stmt->close();
	$conn->close();
	if ($result->num_rows > 0) {
		$_SESSION['isLoggedIn'] = TRUE;
		while ($row = $result->fetch_assoc()) {
			$_SESSION['admin-id'] = $row['id'];
			$_SESSION['admin-email'] = $row['email'];
			$_SESSION['admin-name'] = $row['name'];
			$_SESSION['admin-role'] = $row['role'];
			if ($row['role'] == 1) {
				header('Location:../marchandiser/marchant-dashboard');
			} else if ($row['role'] == 2) {
				header('Location:../knitting-master/knitting-master-dashboard');
			}
		}
	} else {
		header('Location:../index');
		$_SESSION['error'] = 'invalid';
	}
}
