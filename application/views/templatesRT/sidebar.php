<aside class="main-sidebar sidebar-primary elevation-4" style="background-color: #2F4F4F;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link ">
        <img src="<?php echo base_url() ?>assets/dist/img/logoPemda1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-8" style="opacity: .8">
        <span class="logo-md" style="font-size: 16px;"><b>Sistem Pengajuan Surat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #2F4F4F;">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('pageRT/index') ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <span class="menu-sidebar" style="font-size: 13px;">Profile Kelurahan<span>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('pageRT/surat') ?>">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <span class="menu-sidebar" style="font-size: 13px;">Permohonan Surat<span>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('pageRT/dataPenduduk') ?>">
                        <i class="nav-icon far fa-file-alt"></i>
                        <span class="menu-sidebar" style="font-size: 13px;">Data Penduduk<span>
                    </a>
                </li>

                <!-- <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('pageWarga/profile') ?>">
                        <i class="fas fa-address-card"></i>
                        <span>My Profile</span>
                    </a>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a class="nav-link active" href="<?php echo base_url('Warga/') ?>">
                        <i class="fas fa-user"></i>
                        <span>Edit Profile</span>
                    </a>
                </li> -->

                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url()   ?>auth/logout" class="nav-link active">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span class="menu-sidebar" style="font-size: 13px;">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>