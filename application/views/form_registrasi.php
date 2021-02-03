<!DOCTYPE html>

<body style="background-color: #B38E32;">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun Kelurahan</h1>
                                        <img src="<?php echo base_url() ?>assets/dist/img/logo_pemda_r.jpg">
                                    </div>

                                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="<?= set_value('nik'); ?>" required>
                                            <!-- membuat kode tulisan error pada nama  di register-->
                                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= set_value('name'); ?>" required>
                                            <!-- membuat kode tulisan error pada nama  di register-->
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?= set_value('username'); ?>" required>
                                            <!-- membuat kode tulisan error pada nama  di register-->
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?= set_value('email'); ?>" required>
                                            <!-- membuat kode tulisan error pada no_telp di register -->
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required>
                                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>

                                            <div class="col-sm-6">
                                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password" required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Mari Buat Akun
                                        </button>

                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/login'); ?>">Sudah Punya Akun? Langsung Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    </html>