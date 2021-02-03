<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Rekap Surat</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid">
        <h3><i class="fas fa-edit"></i>EDIT DATA Rekap Surat</h3>

        <?php foreach ($Rp_surat as $rps) : ?>
            <form method="post" action="<?php echo base_url() . 'Rekap_surat/update' ?>" enctype="multipart/form-data">

                <div class="for-group">
                    <label>ID Surat</label>
                    <input type="hidden" name="id_surat_masuk" class="form-control" value="<?php echo $rps->id_surat_masuk ?>">
                    <input type="text" name="id_surat" class="form-control" value="<?php echo $rps->id_surat ?>">
                </div>

                <div class="for-group">
                    <label>ID User</label>
                    <input type="text" name="id_user" class="form-control" value="<?php echo $rps->id_user ?>">
                </div>

                <div class="for-group">
                    <label>ID Warga</label>
                    <input type="text" name="id_warga" class="form-control" value="<?php echo $rps->id_warga ?>">
                </div>

                <div class="form-group">
                    <label>No surat Masuk </label>
                    <input type="text" name="no_surat_masuk" class="form-control" value="<?php echo $rps->no_surat_masuk ?>">
                </div>

                <div class="form-group">
                    <label>Tangal Terima</label>
                    <input type="date" name="tgl_diterima" class="form-control" value="<?php echo $rps->tgl_diterima ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>
            </form>
        <?php endforeach; ?>
    </div>
</div> <br><br>