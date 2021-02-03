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
                    <span class="navbar-brand mb-0 h1" style="font-size: 25px;">Upload File Rekap</span>
                    <!-- <span class="navbar-brand mb-0 h1" style="font-size: 25px;"><?= $this->session->userdata('rt'); ?></span> -->
                </nav>
            </div>
            <div class="card-body">
                <div class="col-6">
                    <?= form_open_multipart('pageRW/prosesSend'); ?>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" value="<?= $this->session->userdata('nik'); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Upload File Excel </label>
                        <input type="file" class="form-control" id="file_excel" name="file_excel">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-3">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>