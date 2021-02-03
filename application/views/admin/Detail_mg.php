<div class="content-wrapper">
    <div class="card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">User</h1> -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="card-body">
            <div class="container-fluid">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="card">
                    <h5 class="card-header">Detail Manage</h5>
                    <div class="card-body">

                        <?php foreach ($Mg_profile as $mgp) : ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo base_url() . '/uploads/' . $mgp->foto ?>" class="card-img-top">
                                </div>


                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td>No</td>
                                            <td><strong><?php echo $mgp->id_user ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Nama</td>
                                            <td><strong><?php echo $mgp->nama ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Alamat</td>
                                            <td><strong><?php echo $mgp->alamat ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Jabatan</td>
                                            <td><strong><?php echo $mgp->username ?></strong></td>
                                        </tr>

                                    </table>

                                    <?php echo anchor('Manage_profile/index', '<div class="btn btn-primary btn-sm">Kembali</div>') ?>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>