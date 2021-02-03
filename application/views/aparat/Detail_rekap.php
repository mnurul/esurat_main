<div class="content-wrapper">
    <div class="card">
        <!-- <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Surat Permohonan Penduduk</h1>
                </div>
            </div>
        </div> -->
        <div class="card-body">
            <div class="container-fluid">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="card">
                    <h5 class="card-header">Detail Surat Permohonan Penduduk</h5>
                    <div class="card-body">

                        <?php foreach ($rekapData as $s) : ?>
                            <div class="row">


                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td>NIK</td>
                                            <td><strong><?php echo $s->nik ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Nama</td>
                                            <td><strong><?php echo $s->nama ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>RT</td>
                                            <td><strong><?php echo $s->rt ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>RW</td>
                                            <td><strong><?php echo $s->rw ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>File Excel</td>
                                            <td><strong><?php echo $s->file_excel ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Upload</td>
                                            <td><strong><?php echo $s->tgl_upload ?></strong></td>
                                        </tr>
                                    </table>

                                    <?php echo anchor('pageAparat/rekapData', '<div class="btn btn-primary btn-sm">Kembali</div>') ?>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>