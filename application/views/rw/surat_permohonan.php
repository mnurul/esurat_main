<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark">Surat Permohonan Penduduk</h1>
                 -->
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
            <div class="card-body">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nik Pemohon</th>
                            <th>Jenis Surat</th>
                            <th>Perihal</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($surat as $s) :
                        ?>
                            <tr style="text-align: center;">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $s->nik ?></td>
                                <td><?php echo $s->jenis_surat ?></td>
                                <td><?php echo $s->perihal ?></td>

                                <td> <?php echo anchor('pageRW/detail_surat/' . $s->id_surat_masuk, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?> </td>
                                <td> <?php echo anchor('pageRW/edit_surat/' . $s->id_surat_masuk, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
                                <td> <?php echo anchor('pageRW/hapus_surat/' . $s->id_surat_masuk, '<div class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></div>') ?> </td>
                                <!-- <td> <?php echo anchor('pageRW/printPdf/' . $s->id_surat_masuk, '<div class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i></div>') ?> </td> -->
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