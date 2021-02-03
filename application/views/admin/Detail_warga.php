<div class="content-wrapper">
    <div class="card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">Warga</h1> -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="card-body">
            <div class="container-fluid">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="card">
                    <h5 class="card-header">Detail Warga</h5>
                    <div class="card-body">

                        <?php foreach ($warga as $wg) : ?>
                            <div class="row">


                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td>NIK</td>
                                            <td><strong><?php echo $wg->nik ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Nama Warga</td>
                                            <td><strong><?php echo $wg->nama ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td><strong><?php echo $wg->tempat_lahir ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><strong><?php echo $wg->tgl_lahir ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Alamat</td>
                                            <td><strong><?php echo $wg->alamat ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td><strong><?php echo $wg->agama ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><strong><?php ($wg->jenis_kelamin == "L" ? "Laki Laki" : "Perempuan")  ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan</td>
                                            <td><strong><?php echo $wg->pendidikan ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Pekerjaan</td>
                                            <td><strong><?php echo $wg->pekerjaan ?></strong></td>
                                        </tr>
                                        <tr>
                                            <div class="col-4">
                                                <td>RT</td>
                                                <td><strong><?php echo $wg->rt ?></strong></td>
                                            </div>
                                            <div class="col-4">
                                                <td>RW</td>
                                                <td><strong><?php echo $wg->rw ?></strong></td>
                                            </div>
                                        </tr>
                                        <tr>
                                            <td>Kelurahan</td>
                                            <td><strong><?php echo $wg->kelurahan ?></strong></td>
                                        </tr>

                                    </table>

                                    <?php echo anchor('Warga/index', '<div class="btn btn-primary btn-sm">Kembali</div>') ?>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>