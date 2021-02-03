<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark">Profile Warga</h1> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar">
                        <span class="navbar-brand mb-0 h1" style="font-size: 25px;">Pengajuan Surat Kelurahan</span>
                    </nav>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('pesan') ?>

                    <blockquote class="blockquote mb-0">
                        <div class="col-md-6">
                            <form method="post" action="<?= base_url(); ?>pageWarga/prosesSurat/<?= $nik; ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIK</label>
                                    <input type="text" class="form-control" name="nik" placeholder="Harap isi NIK sesuai dengan Kartu Identitas">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Harap isi Nama sesuai dengan Kartu identitas">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select class="form-control" id="jkel" name="jkel">
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Agama</label>
                                    <select class="form-control" id="agama" name="agama">
                                        <option value="islam">Islam</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="protestan">Protestan</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Surat</label>
                                    <select class="form-control" id="jenis_surat" name="jenis_surat">
                                        <option value="surat keterangan">Surat Keterangan</option>
                                        <option value="surat pengantar">Surat Pengantar</option>
                                        <option value="dukcapil">Dukcapil</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Maksud / Keperluan</label>
                                    <textarea class="form-control" id="maksud_keperluan" name="maksud_keperluan" rows="3"></textarea>
                                    <input type="hidden" name="status_izin_rt" value="Belum disetujui">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Proses Sekarang</button>
                            </form>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>


</div>