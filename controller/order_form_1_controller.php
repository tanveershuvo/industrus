<?php
session_start();
include_once("../dbCon.php");

$conn =connect();

if(isset($_POST['orderForm1'])){

	header('Location:../order_form_2');

}
