<!DOCTYPE html>

<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;

        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }
    </style>

</head>

<body>
    <div id=halaman>
        <?php foreach ($surat as $s) : ?>
            <h2 id="judul">RUKUN TETANGGA (RT)<?php echo $s->rt ?> RW.22</h2>
            <h3 id="judul">DUSUN III DESA MANGUNJAYA</h3>
            <h3 id="judul">KEC.TAMBUN SELATAN KAB.BEKASI</h3>
            <h2 id="judul">PERUMAHAN TAMAN RAYA BEKASI</h2>
            <hr>
            <h3 id="judul">SURAT PENGANTAR</h3>
            <p id="judul">Nomor:SP-122/.../022-III/.../TRB/.....</p>
            <p>Yang bertanda tangan di bawah ini Pengurus RT <?php echo $s->rt ?>/RW022 Desa Mangunjaya, Kecamatan Tambun Selatan Kabupaten Bekasi, dengan ini menerangkan bahwa:</p>
            <table>
                <tr>
                    <td style="width: 30%;">Nama</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $s->nama ?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat & Tanggal lahir</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $s->tempat_lahir ?>,<?php echo $s->tgl_lahir ?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Jenis Kelamin</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $s->jenis_kelamin ?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Pekerjaan</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $s->pekerjaan ?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nomor KTP/KK</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $s->nik ?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Kewarga Negaraan</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;">Indonesia</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Agama</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $s->agama ?></td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">Alamat</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;"><?php echo $s->alamat ?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Maksud/Keperluan</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?php echo $s->perihal ?></td>
                </tr>
            </table>

            <p>Demikian Surat Pengantar Keterangan ini di buat untuk dapat dipergunakan sebagaimana mestinya.</p>
            <div style="width: 40%; text-align: left; float: left;">Mengetahui</div><br>
            <div style="width: 40%; text-align: left; float: left;">Ketua RW 022</div><br>
            <div style="width: 40%; text-align: left; float: left;">Nomor : SP-.../022-III/TRB/...</div><br>
            <div style="width: 40%; text-align: left; float: left;">Tanggal : ...........</div><br><br>
            <div style="width: 40%; text-align: left; float: left;"><?= $this->session->userdata('username'); ?></div><br><br>
            <!-- <div style="width: 40%; text-align: left; float: left;">Keterangan :-Putih Untuk Ybs</div><br>
        <div style="width: 40%; text-align: left; float: left;">-Kuning Untuk RT</div><br>
        <div style="width: 40%; text-align: left; float: left;">-Merah Untuk RW</div> -->


            <div style="width: 30%; text-align: left; float: right;">Bekasi, 20 Januari 2020</div><br>
            <div style="width: 30%; text-align: left; float: right;">Ketua RT <?php echo $s->rt ?></div><br><br><br><br><br>
            <div style="width: 30%; text-align: left; float: right;">zafran</div>
        <?php endforeach; ?>
    </div>
</body>

</html>