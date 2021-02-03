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
            <div class="card-body">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nik</th>
                            <th>File Rekap Data</th>
                            <th>Tanggal</th>
                            <th colspan="4">Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($rekapData as $s) :
                        ?>
                            <tr style="text-align: center;">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $s->nik ?></td>
                                <td><?php echo $s->file_excel ?></td>
                                <td><?php echo $s->tgl_upload ?></td>

                                <td> <?php echo anchor('pageAparat/detail_rekap/' . $s->id, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?> </td>
                                <!-- <td> <?php echo anchor('pageAparat/edit_surat/' . $s->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
                                <td> <?php echo anchor('pageAparat/hapus_surat/' . $s->id, '<div class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></div>') ?> </td> -->
                                <td> <?php echo anchor('pageAparat/downloadExcel/' . $s->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i></div>') ?> </td>
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