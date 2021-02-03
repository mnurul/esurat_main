<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark">Warga</h1> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <nav class="navbar navbar">
                    <span class="navbar-brand mb-0 h1" style="font-size: 25px;">Rekap Data Penduduk</span>
                    <!-- <span class="navbar-brand mb-0 h1" style="font-size: 25px;"><?= $this->session->userdata('rt'); ?></span> -->
                </nav>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- <button class="btn btn-sm btn-primary mb-3 btn-small" data-toggle="modal" data-target="#tambah_warga"><i class="fas fa-plus fa-sm"></i> Tambah Data Rekap </button> -->
                    <a href="<?= base_url(); ?>pageRW/export" class="btn btn-sm btn-primary mb-3 btn-small" style="float: right;">Export Data</a>
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th>NO</th>
                            <th>NIK</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th colspan="1">AKSI</th>
                        </tr>

                        <?php
                        $no = 1;
                        foreach ($rekap as $wg) :
                        ?>
                            <tr style="text-align: center;">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $wg->nik ?></td>
                                <td><?php echo $wg->rt ?></td>
                                <td><?php echo $wg->rw ?></td>

                                <td> <?php echo anchor('pageRW/detail_rekap/' . $wg->id_rekap_data, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?> </td>
                                <!-- <td> <?php echo anchor('pageRW/edit_rekap/' . $wg->id_rekap_data, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
                                <td> <?php echo anchor('pageRW/hapus_rekap/' . $wg->id_rekap_data, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> </td> -->
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- link button tambah -->
    <!-- Modal -->
    <div class="modal fade" id="tambah_warga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Data Rekap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo base_url() . 'pageRT/tambah_rekap'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control">
                        </div>
                        <div class="form-group">
                            <!-- <label>rt</label> -->
                            <input type="text" name="rt" value="<?= $this->session->userdata('rt'); ?>" hidden class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea type="text" name="keterangan" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Status Rumah</label>
                            <input type="text" name="status_rumah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status Keluarga</label>
                            <input type="text" name="status_keluarga" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>