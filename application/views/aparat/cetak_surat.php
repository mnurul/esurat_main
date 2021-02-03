<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark">Surat Permohonan Penduduk</h1> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <nav class="navbar navbar">
                    <span class="navbar-brand mb-0 h1" style="font-size: 25px;">Pengajuan Surat Kelurahan</span>
                </nav>
            </div>

            <div class="card card-info">
                <form method="get" action="<?php echo base_url('pageAparat/cetakSurat/') ?>">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                            <div class="card-body">
                                <label for="">Pilih Jenis Surat</label>
                                <div class="input-group input-group-sm">
                                    <select class="form-control" name="jenis_surat">
                                        <option>Pilih Jenis Surat</option>
                                        <option value="surat keterangan">Surat Keterangan</option>
                                        <option value="surat pengantar">Surat Pengantar</option>
                                        <option value="dukcapil">Surat Dukcapil</option>
                                    </select>
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-info btn-flat">Cari</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nik Pemohon</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Jenis Surat</th>
                            <th>Keperluan</th>
                            <th>keterangan</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($surat as $s) :
                        ?>
                            <tr style="text-align: justify;">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $s->nama ?></td>
                                <td><?php echo $s->nik ?></td>
                                <td><?php echo $s->jenis_kelamin ?></td>
                                <td><?php echo $s->agama ?></td>
                                <td><?php echo $s->alamat ?></td>
                                <td><?php echo $s->jenis_surat ?></td>
                                <td><?php echo $s->perihal ?></td>
                                <td><?php echo $s->keterangan ?></td>
                                <td> <?php echo anchor('pageAparat/printPdf/' . $s->id_surat_masuk, '<div class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i></div>') ?> </td>
                            </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- link button tambah -->
    <!-- Modal -->

    <!-- Modal -->
</div>