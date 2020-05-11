<?php
if ((!isset($_SESSION['isLoggedIn'])) || (!$_SESSION['admin-role'] == 0) || (!$_SESSION['admin-role'] == 2)) {
    header('Location:logout');
}
