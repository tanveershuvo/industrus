<?php
if ((!isset($_SESSION['isLoggedIn'])) || (!$_SESSION['admin-role'] == 5) || (!isset($_SESSION['isLoggedIn'])) &&  (!$_SESSION['admin-role'] == 0)) {
    header('Location:logout');
}
