<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark">Profile Warga</h1> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <nav class="navbar navbar">
                    <span class="navbar-brand mb-0 h1" style="font-size: 25px;">Lacak Surat Anda</span>
                </nav>
            </div>
            <div class="card-body">
                <div class="container">
                    <?php foreach ($surat as $u) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 style="display: inline;"><?= $u->jenis_surat; ?></h4>
                                <h6 style="display: inline; float:right;"><?= $u->tgl_pengajuan; ?></h6>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6"></div>
                                <blockquote class="blockquote mb-0">

                                    <p>Perihal : <?= $u->perihal; ?></p>
                                    <footer class="blockquote-footer">Status RT : <cite title="Source Title"><?= $u->status_izin_rt; ?></cite></footer>
                                    <footer class="blockquote-footer">Disetujuin RT : <cite title="Source Title"><?= $u->tgl_persetujuan; ?></cite></footer>
                                    <footer class="blockquote-footer">Status RW : <cite title="Source Title"><?= $u->status_izin_rw; ?></cite></footer>
                                    <footer class="blockquote-footer">Disetujuin RW : <cite title="Source Title"><?= $u->tgl_persetujuan_rw; ?></cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>


</div>