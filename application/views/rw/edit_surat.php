<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <!-- <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Surat Izin Permohonan Penduduk</h1>
                    </div>
                </div>
            </div> -->

            <div class="container-fluid">
                <div class="card">
                    <h5 class="card-header">Edit Surat Permohonan Penduduk</h5>
                    <div class="card-body">
                        <?php foreach ($surat as $s) : ?>
                            <form method="post" action="<?php echo base_url() . 'pageRW/update' ?>">

                                <div class="for-group">
                                    <label>Nik Pemohon</label>
                                    <input type="hidden" name="id_surat_masuk" class="form-control" value="<?php echo $s->id_surat_masuk ?>">
                                    <input type="text" name="nik" class="form-control" value="<?php echo $s->nik ?>" readonly>
                                </div>

                                <div class="for-group">
                                    <label>Tanggal Permohonan Surat</label>
                                    <input type="date" name="tgl_pengajuan" class="form-control" value="<?php echo $s->tgl_pengajuan ?>">
                                </div>

                                <div class="for-group">
                                    <label>Jenis Surat</label>
                                    <input type="text" name="jenis_surat" class="form-control" value="<?php echo $s->jenis_surat ?>">
                                </div>

                                <div class="for-group">
                                    <label>Tujuan</label>
                                    <input type="text" name="perihal" class="form-control" value="<?php echo $s->perihal ?>">
                                </div>

                                <div class="for-group">
                                    <label>Status Izin RW</label>
                                    <select class="form-control" name="status_izin_rw" id="status_izin_rw" value="<?= $s->status_izin_rw; ?>">
                                        <option value="<?= $s->status_izin_rw; ?>"><?= $s->status_izin_rw; ?></option>
                                        <?php if ($s->status_izin_rw == 'Belum disetujui') { ?>
                                            <option value="disetujui">disetujui</option>
                                        <?php  } else { ?>
                                            <option value="Belum disetujui">Belum disetujui</option>
                                        <?php  } ?>
                                    </select>
                                </div>
                                <div class="for-group">
                                    <label>Tanggal Persetujuan</label>
                                    <input type="date" name="tgl_persetujuan_rw" class="form-control" value="<?php echo $s->tgl_persetujuan_rw ?>">
                                </div>
                                <div class="for-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan_rw" class="form-control" value="<?php echo $s->keterangan_rw ?>">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                                <a href="<?= base_url(); ?>pageRW/" class="btn btn-primary btn-sm mt-3">Kembali</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>