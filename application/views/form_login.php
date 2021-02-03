<!DOCTYPE html>

<body style="background-color: #B38E32;">
  <div class="container" style="margin-top: 100px;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h2 class="h4 text-gray-900 mb-2">Kelurahan Mangun Jaya</h2>
                    <img class="mb-2" src="<?php echo base_url() ?>assets/dist/img/logo_pemda_r.jpg">
                  </div>

                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">

                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Email Anda" name="email" autofocus="">
                      <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>');  ?>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Masukan Password Anda " name="password">
                      <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary form-control">
                      Masuk
                    </button>

                  </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/registration'); ?>">Buat Akun!</a>
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