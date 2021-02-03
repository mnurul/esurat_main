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
                    Profile Warga
                </div>
                <div class="card-body">
                    <div class="col-md-6"></div>
                    <blockquote class="blockquote mb-0">
                        <?php foreach ($user as $u) : ?>
                            <p>NIK : <?= $u->nik; ?></p>
                            <footer class="blockquote-footer">Username : <cite title="Source Title"><?= $u->username; ?></cite></footer>
                            <footer class="blockquote-footer">Email : <cite title="Source Title"><?= $u->email; ?></cite></footer>
                        <?php endforeach ?>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>


</div>