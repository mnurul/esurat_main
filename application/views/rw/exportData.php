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

                </nav>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th>NO</th>
                            <th>NIK</th>
                            <th>STATUS RUMAH</th>
                            <th>STATUS KELUARGA</th>
                            <th>KETERANGAN</th>
                            <th>RT</th>
                            <th>RW</th>
                        </tr>

                        <?php
                        $no = 1;
                        foreach ($rekap as $wg) :
                        ?>
                            <tr style="text-align: center;">
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $wg->nik ?></td>
                                <td><?php echo $wg->status_rumah ?></td>
                                <td><?php echo $wg->status_keluarga ?></td>
                                <td><?php echo $wg->keterangan ?></td>
                                <td><?php echo $wg->rt ?></td>
                                <td><?php echo $wg->rw ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>