<aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #F4F6F9;">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('Admin/index') ?>" class="brand-link ">
        <img src="<?php echo base_url() ?>assets/dist/img/logoPemda1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-8" style="opacity: .8">
        <span class="logo-md" style="font-size: 16px;"><b>Sistem Pengajuan Surat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #F4F6F9;">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('Admin/') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <span>Dashboard<span>
                    </a>
                </li> -->

                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('Manage_profile/user') ?>">
                        <!-- <i class="fas fa-address-card"></i> -->
                        <span class="menu-sidebar" style="font-size: 13px;">Manage User</span>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('Warga/') ?>">
                        <!-- <i class="fas fa-user"></i> -->
                        <span class="menu-sidebar" style="font-size: 13px;">Manage Warga</span>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('Rekap_surat/') ?>">
                        <!-- <i class="fas fa-file-alt"></i> -->
                        <span class="menu-sidebar" style="font-size: 13px;">Rekap Surat</span>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url()   ?>auth/logout" class="nav-link active">
                        <!-- <i class="fas fa-fw fa-sign-out-alt"></i> -->
                        <span class="menu-sidebar" style="font-size: 13px;">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>