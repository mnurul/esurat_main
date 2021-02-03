<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Rekap Surat</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid">

        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_rp_surat"><i class="fas fa-plus fa-sm"></i> Tambah Data Rekap </button>


        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr class="text-center">
                    <th>No</th>
                    <th>ID Surat</th>
                    <th>ID User</th>
                    <th>ID Warga</th>
                    <th>No surat Masuk</th>
                    <th>Tangal Terima</th>
                    <th colspan="3">AKSI</th>
                </tr>

                <?php
                $no = 1;
                foreach ($Rp_surat as $rps) :
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $rps->id_surat ?></td>
                        <td><?php echo $rps->id_user ?></td>
                        <td><?php echo $rps->id_warga ?></td>
                        <td><?php echo $rps->no_surat_masuk ?></td>
                        <td><?php echo $rps->tgl_diterima ?></td>

                        <td> <?php echo anchor('Rekap_surat/Detail_rp_surat/' . $rps->id_surat_masuk, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?> </td>
                        <td> <?php echo anchor('Rekap_surat/edit_rp_surat/' . $rps->id_surat_masuk, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
                        <td> <?php echo anchor('Rekap_surat/hapus_rp_surat/' . $rps->id_surat_masuk, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> </td>

                    </tr>

                <?php endforeach; ?>

            </table><br><br><br><br><br><br>
        </div>
    </div>

    <!-- link button tambah -->
    <!-- Modal -->
    <div class="modal fade" id="tambah_rp_surat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Rekap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo base_url() . 'Rekap_surat/tambah_rekap'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>ID Surat</label>
                            <input type="hidden" name="id_surat_masuk" class="form-control" value="<?php echo $rps->id_surat_masuk ?>">
                            <input type="text" name="id_surat" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>ID User</label>
                            <input type="text" name="id_user" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>ID Warga</label>
                            <input type="text" name="id_warga" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>No surat Masuk</label>
                            <input type="text" name="no_surat_masuk" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>tangal Terima</label>
                            <input type="date" name="tgl_diterima" class="form-control"></input>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>