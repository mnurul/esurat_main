<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="container-fluid">
                <!-- <h3><i class="fas fa-edit"></i>Edit Data Surat Permohonan</h3> -->
                <div class="card">
                    <h5 class="card-header">Detail Surat Permohonan Penduduk</h5>
                    <div class="card-body">
                        <?php foreach ($surat as $s) : ?>
                            <form method="post" action="<?php echo base_url() . 'pageRT/update' ?>">
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
                                    <label>Status Izin RT</label>
                                    <select class="form-control" name="status_izin_rt" id="status_izin_rt" value="<?= $s->status_izin_rt ?>">
                                        <option value="<?= $s->status_izin_rt ?>"><?= $s->status_izin_rt ?></option>
                                        <?php if ($s->status_izin_rt == 'Belum disetujui') { ?>
                                            <option value="disetujui">disetujui</option>
                                            <input type="hidden" name="status_izin_rw" value="Belum disetujui">
                                        <?php  } else { ?>
                                            <option value="Belum disetujui">Belum disetujui</option>
                                        <?php  } ?>
                                    </select>
                                </div>
                                <div class="for-group">
                                    <label>Tanggal Persetujuan</label>
                                    <input type="date" name="tgl_persetujuan" class="form-control" value="<?php echo $s->tgl_persetujuan ?>">
                                </div>
                                <div class="for-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" value="<?php echo $s->keterangan ?>">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
                                <a href="<?= base_url(); ?>pageRT/" class="btn btn-primary btn-sm mt-3">Kembali</a>
                            </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>