<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-navy">
    <!-- Brand Logo -->
    <a class="brand-link text-center">
        <span class="brand-text font-weight-dark"><b>INDUSTRUS</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Marchant Menu -->
                <?php if ((isset($_SESSION['isLoggedIn'])) && ($_SESSION['admin-role'] == 1 || $_SESSION['admin-role'] == 0)) { ?>
                    <label class="text-secondary mb-3 text-center text-sm">MARCHANT NAVIGATION</label>
                    <li class="nav-item has-treeview ">
                        <a href="marchant-dashboard" class="nav-link <?= ($activePage == 'marchant-dashboard') ? 'active' : ''; ?> ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="sample-requests" class="nav-link <?= ($activePage == 'sample-requests' || $activePage == 'view-sample-details') ? 'active' : ''; ?> ">
                            <i class="nav-icon fab fa-buromobelexperte"></i>
                            <p>
                                All Sample Requests
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="detailed-orders" class="nav-link <?= ($activePage == 'detailed-orders' || $activePage == 'view-order-details') ? 'active' : ''; ?> ">
                            <i class="nav-icon fas fa-info-circle"></i>
                            <p>
                                Detailed orders
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview ">
                        <a href="task-allocate" class="nav-link <?= ($activePage == 'task-allocate' || $activePage == 'order-task') ? 'active' : ''; ?> ">
                            <i class="nav-icon fas fa-info-circle"></i>
                            <p>
                                Allocate Tasks
                            </p>
                        </a>
                    </li>
                <?php } ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">