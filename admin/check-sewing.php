<?php
if ((!isset($_SESSION['isLoggedIn'])) || (!$_SESSION['admin-role'] == 0) || (!$_SESSION['admin-role'] == 4)) {
    header('Location:logout');
}
