<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Rekap Surat</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Detail Rekap Surat</h5>
            <div class="card-body">

                <?php foreach ($Rp_surat as $rps) : ?>
                    <div class="row">

                        <div class="col-md-8">
                            <table class="table">
                                <tr>
                                    <td>ID Surat MAsuk</td>
                                    <td><strong><?php echo $rps->id_surat_masuk ?></strong></td>
                                </tr>

                                <tr>
                                    <td>ID Surat</td>
                                    <td><strong><?php echo $rps->id_surat ?></strong></td>
                                </tr>

                                <tr>
                                    <td>ID User</td>
                                    <td><strong><?php echo $rps->id_user ?></strong></td>
                                </tr>

                                <tr>
                                    <td>ID Warga</td>
                                    <td><strong><?php echo $rps->id_warga ?></strong></td>
                                </tr>

                                <tr>
                                    <td>No surat Masuk</td>
                                    <td><strong><?php echo $rps->no_surat_masuk ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Tangal Terima</td>
                                    <td><strong><?php echo $rps->tgl_diterima ?></strong></td>
                                </tr>

                            </table>

                            <?php echo anchor('Rekap_surat/index', '<div class="btn btn-primary btn-sm">Kembali</div>') ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>