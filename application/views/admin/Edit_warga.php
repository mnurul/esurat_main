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
                <h5 class="card-header">Edit Warga</h5>
                <div class="card-body">
                    <?php foreach ($warga as $wg) : ?>
                        <form method="post" action="<?php echo base_url() . 'Warga/update' ?>" enctype="multipart/form-data">

                            <div class="for-group">
                                <label>NIK</label>
                                <input type="hidden" name="id_warga" class="form-control" value="<?php echo $wg->id_warga ?>">
                                <input type="text" name="nik" class="form-control" value="<?php echo $wg->nik ?>">
                            </div>

                            <div class="for-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $wg->nama ?>">
                            </div>

                            <div class="for-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $wg->tempat_lahir ?>">
                            </div>

                            <div class="for-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $wg->tgl_lahir ?>">
                            </div>


                            <div class="for-group">
                                <label>alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $wg->alamat ?></textarea>
                            </div>

                            <div class="for-group">
                                <label for="agama">Agama</label>
                                <select class="form-control" name="agama" value="<?php echo $wg->agama ?>">
                                    <option value="<?php echo $wg->agama ?>"><?php echo $wg->agama ?></option>

                                    <option value="Islam" class="<?= ($wg->agama == "Islam" ? "option-condition" : null) ?>">Islam</option>
                                    <option value="Katolik" class="<?= ($wg->agama == "Katolik" ? "option-condition" : null) ?>">Katolik</option>
                                    <option value="Protestan" class="<?= ($wg->agama == "Protestan" ? "option-condition" : null) ?>">Protestan</option>
                                    <option value="Hindu" class="<?= ($wg->agama == "Hindu" ? "option-condition" : null) ?>">Hindu</option>
                                    <option value="Budha" class="<?= ($wg->agama == "Budha" ? "option-condition" : null) ?>">Budha</option>
                                </select>
                            </div>

                            <div class="for-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" value="<?php echo $wg->jenis_kelamin ?>">
                                    <option value="<?php echo $wg->jenis_kelamin ?>"><?= ($wg->jenis_kelamin == "L" ? "Laki Laki" : "Perempuan") ?></option>
                                    <option value="L" class="<?= ($wg->jenis_kelamin == "L" ? "option-condition" : null) ?>">Laki Laki</option>
                                    <option value="P" class="<?= ($wg->jenis_kelamin == "P" ? "option-condition" : null) ?>">Perempuan</option>
                                </select>
                            </div>

                            <div class="for-group">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan" class="form-control" value="<?php echo $wg->pendidikan ?>">
                            </div>

                            <div class="for-group">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" value="<?php echo $wg->pekerjaan ?>">
                            </div>

                            <div class="for-group">
                                <label>RT</label>
                                <input type="text" name="rt" class="form-control" value="<?php echo $wg->rt ?>">
                            </div>

                            <div class="for-group">
                                <label>RW</label>
                                <input type="text" name="rw" class="form-control" value="<?php echo $wg->rw ?>">
                            </div>

                            <div class="for-group">
                                <label>Kelurahan</label>
                                <input type="text" name="kelurahan" class="form-control" value="<?php echo $wg->kelurahan ?>">
                            </div>


                            <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>