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
                    <span class="navbar-brand mb-0 h1" style="font-size: 25px;">Profil Warga</span>
                </nav>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_warga"><i class="fas fa-plus fa-sm"></i> Tambah Data Jasa </button>
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th>NO</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>Jenis Kelamin</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>KELURAHAN</th>
                            <th colspan="3">AKSI</th>
                        </tr>

                        <?php
                        $no = 1;
                        foreach ($warga as $wg) :
                        ?>
                            <tr style="text-align: center;">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $wg->nik ?></td>
                                <td><?php echo $wg->nama ?></td>
                                <td><?php echo $wg->alamat ?></td>
                                <td><?php echo $wg->jenis_kelamin ?></td>
                                <td><?php echo $wg->rt ?></td>
                                <td><?php echo $wg->rw ?></td>
                                <td><?php echo $wg->kelurahan ?></td>

                                <td> <?php echo anchor('Warga/detail_warga/' . $wg->id_warga, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?> </td>
                                <td> <?php echo anchor('Warga/edit_warga/' . $wg->id_warga, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
                                <td> <?php echo anchor('Warga/hapus_warga/' . $wg->id_warga, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> </td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Warga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- <form action="<?php echo base_url() . 'admin/Data_warga/tambah_warga'; ?>" method="post" enctype="multipart/form-data">
                 -->
                    <form action="<?php echo base_url() . 'Warga/tambah_warga'; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="hidden" name="id_warga" class="form-control" value="<?php echo $wg->id_warga ?>">
                            <input type="text" name="nik" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Nama warga</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" name="alamat" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" value="<?php echo $wg->jenis_kelamin ?>">
                                <option value="">Pilih</option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>RT</label>
                            <input type="text" name="rt" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>RW</label>
                            <input type="text" name="rw" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control">
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