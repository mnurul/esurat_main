<div class="content-wrapper">
    <div class="card">
        <!-- <div class="card-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Surat Permohonan Penduduk</h1>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar">
                <span class="navbar-brand mb-0 h1" style="font-size: 25px;">Surat Permohonan Penduduk</span>
            </nav>
        </div> -->
        <div class="card-body">
            <div class="container-fluid">
                <?php echo $this->session->flashdata('pesan') ?>

                <div class="card">
                    <h5 class="card-header">Detail Surat Permohonan Penduduk</h5>
                    <div class="card-body">

                        <?php foreach ($surat as $s) : ?>
                            <div class="row">


                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td>No Surat</td>
                                            <td><strong><?php echo $s->no_surat_masuk ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Nik Pemohon</td>
                                            <td><strong><?php echo $s->nik ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Permohonan Surat</td>
                                            <td><strong><?php echo $s->tgl_pengajuan ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Jenis Surat</td>
                                            <td><strong><?php echo $s->jenis_surat ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tujuan</td>
                                            <td><strong><?php echo $s->perihal ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Statuz Izin RT</td>
                                            <td><strong><?php echo $s->status_izin_rt ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Persetujuan RT</td>
                                            <td><strong><?php echo $s->tgl_persetujuan ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Keterangan</td>
                                            <td><strong><?php echo $s->keterangan ?></strong></td>
                                        </tr>

                                    </table>

                                    <?php echo anchor('pageRT/index', '<div class="btn btn-primary btn-sm">Kembali</div>') ?>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>