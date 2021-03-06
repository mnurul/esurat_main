<!DOCTYPE html>

<head>
    <title>Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;

        }

        #ttd {
            display: flex;
            justify-content: space-between;
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
        <?php foreach ($domisili as $s) : ?>
            <div style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                <img src="<?php echo base_url() ?>assets/dist/img/logo_pemda.jpg" alt="" height="100px" width="100px">
                <div>
                    <h3 id="judul">PEMERINTAH KABUPATEN BEKASI</h3>
                    <h3 id="judul">KECAMATAN TAMBUN SELATAN</h3>
                    <h2 id="judul">DESA MANGUNJAYA</h2>
                    <p>Jl.Pendidikan No.1 No.Telp.(021)89523439 Email,Mangunjaya29@gmail.com Kode Pos 17517</p>
                    <hr>
                    <h3 id="judul">SURAT KETERANGAN PERMOHONAN SKCK</h3>
                    <p id="judul">Nomor:140/10/1/2021</p>
                    <p>Kepala Desa Mangunjaya Kecamatan Tambun Selatan Kabupaten Bekasi, dengan ini menerangkan bahwa:</p>
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
                            <td style="width: 30%;">Kewarganegaraan</td>
                            <td style="width: 5%;">:</td>
                            <td style="width: 65%;">Indonesia</td>
                        </tr>
                        <tr>
                            <td style="width: 30%;">Agama</td>
                            <td style="width: 5%;">:</td>
                            <td style="width: 65%;"><?php echo $s->agama ?></td>
                        </tr>
                        <tr>
                            <td style="width: 30%;">Nomor KTP</td>
                            <td style="width: 5%;">:</td>
                            <td style="width: 65%;"><?php echo $s->nik ?></td>
                        </tr>
                        <tr>
                            <td style="width: 30%; vertical-align: top;">Alamat Lengkap</td>
                            <td style="width: 5%; vertical-align: top;">:</td>
                            <td style="width: 65%;"><?php echo $s->alamat ?></td>
                        </tr>
                    </table>

                    <p style="text-indent: 45px;">Bahwa nama tersebut diatas adalah seorang warga kami dan berdasarkan surat
                        keterangan dari ketua RT/RW setempat Nomor : bahwa yang bersangkutan :</p>
                    <table>
                        <tr>
                            <td>1.</td>
                            <td>Berkelakuan baik, tidak pernah berurusan dengan pihak kepolisian dalam tindak kejahatan</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Tidak pernah minum minuman keras yang sifatnya memabukan.</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Tidak pernah membuat keonaran baik dilingkungan maupun diwilayahnya.</td>
                        </tr>
                    </table>
                    <p style="text-indent: 45px;">Surat keterangan permohonan SKCK ini kami berikan kepadanya untuk dipergunakan
                        untuk keperluan : </p>
                    <p style="text-indent: 45px;">Demikian surat keterangan permohonan SKCK ini dibuat agar dapat dipergunakan
                        sesuai keperluan. Kepada pihak yang berkepentingan agar dapat mengetahui dan maklum.</p>


                    <div id="ttd">
                        <!--Kasih div untuk pembungkus tanda tangan nya-->
                        <div>
                            <!--Kasih div untuk pembungkus bagian tanda tangan pemohon sebelah kiri-->
                            <div>Tandatangan Pemohon,</div><br><br><br>
                            <!--Hapus style nya-->
                            <div><?php echo $s->nama ?></div>
                            <!--Hapus style nya-->
                        </div>
                        <!-- <div style="width: 40%; text-align: left; float: left;">Keterangan :-Putih Untuk Ybs</div><br>
        <div style="width: 40%; text-align: left; float: left;">-Kuning Untuk RT</div><br>
        <div style="width: 40%; text-align: left; float: left;">-Merah Untuk RW</div> -->

                        <div>
                            <!--Kasih div untuk pembungkus bagian jadwal sebelah kanan-->
                            <div style="width: 40%; text-align: left; float: right;">Mangunjaya, 04 Januari 2020</div><br>
                            <!--Hapus style nya-->
                            <div style="width: 40%; text-align: left; float: right;">KEPALA DESA MANGUNJAYA</div><br><br><br>
                            <!--Hapus style nya-->
                            <div style="width: 40%; text-align: left; float: right;">JAYADI SAID</div>
                            <!--Hapus style nya-->
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>