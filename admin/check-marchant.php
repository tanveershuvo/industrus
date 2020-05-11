<?php
if ((!isset($_SESSION['isLoggedIn'])) || (!$_SESSION['admin-role'] == 0) || (!$_SESSION['admin-role'] == 1)) {
    header('Location:logout');
}
