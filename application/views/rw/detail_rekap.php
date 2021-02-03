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
                    <h5 class="card-header">Detail Rekap Data</h5>
                    <div class="card-body">

                        <?php foreach ($rekap as $wg) : ?>
                            <div class="row">


                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td>NIK</td>
                                            <td><strong><?php echo $wg->nik ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>RT</td>
                                            <td><strong><?php echo $wg->rt ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td><strong><?php echo $wg->keterangan ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Status Rumah</td>
                                            <td><strong><?php echo $wg->status_rumah ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Status Keluarga</td>
                                            <td><strong><?php echo $wg->status_keluarga ?></strong></td>
                                        </tr>
                                    </table>

                                    <?php echo anchor('pageRW/dataPenduduk', '<div class="btn btn-primary btn-sm">Kembali</div>') ?>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>