<!DOCTYPE html>

<body style="background-color: #4E73DF;">
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
                                        <h1 class="h4 text-gray-900 mb-4">Create Akun Kurir</h1>
                                    </div>

                                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= set_value('name'); ?>" required>
                                            <!-- membuat kode tulisan error pada nama  di register-->
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Tanggal Lahir</label>
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="" value="<?= set_value('tempat_lahir'); ?>" required>
                                            <!-- membuat kode tulisan error pada nama  di register-->
                                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="" value="<?= set_value('tgl_lahir'); ?>" required>
                                            <!-- membuat kode tulisan error pada nama  di register-->
                                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="5" id="alamat" name="alamat" rows="3" placeholder=""><?= set_value('alamat'); ?></textarea>
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="" value="<?= set_value('no_telp'); ?>" required>
                                            <!-- membuat kode tulisan error pada no_telp di register -->
                                            <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?= set_value('email'); ?>" required>
                                            <!-- membuat kode tulisan error pada no_telp di register -->
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select class="form-control" name="agama" placeholder="Agama" required>
                                                <option value="">Pilih</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                            </select>
                                            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="jk">Jenis Kelamin</label>
                                            <select class="form-control" name="jkel" placeholder="jkel" required>
                                                <option value="">Pilih</option>
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                            </select>
                                            <?= form_error('jkel', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                            Register Account
                                        </button>

                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/login'); ?>">Already have an account? Login!</a>
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