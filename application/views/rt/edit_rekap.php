<div class="content-wrapper">
    <div class="card">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">Warga</h1> -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card">
                <h5 class="card-header">Edit Rekap Data</h5>
                <div class="card-body">
                    <?php foreach ($rekap as $wg) : ?>
                        <form method="post" action="<?php echo base_url() . 'pageRT/update_rekap/' . $wg->id_rekap_data ?>" enctype="multipart/form-data">

                            <div class="for-group">
                                <label>NIK</label>
                                <input type="hidden" name="id_warga" class="form-control" value="<?php echo $wg->nik ?>">
                                <input type="text" name="nik" class="form-control" value="<?php echo $wg->nik ?>">
                            </div>
                            <div class="for-group">
                                <label>Keterangan</label>
                                <textarea name="keterangan" id="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $wg->keterangan ?></textarea>
                            </div>
                            <div class="for-group">
                                <label>Status Rumah</label>
                                <input type="text" name="status_rumah" class="form-control" value="<?php echo $wg->status_rumah ?>">
                            </div>
                            <div class="for-group">
                                <label>Status Keluarga</label>
                                <input type="text" name="status_keluarga" class="form-control" value="<?php echo $wg->status_keluarga ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Edit</button>

                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>