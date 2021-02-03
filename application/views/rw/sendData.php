<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<h3>Update Surat Masuk</h3>

			<!-- <form action="<?php echo base_url() . 'jasa/kurir/proses_update/' . $tb_surat['id_surat']; ?>" enctype="multipart/form-data" method="post">
				<div class="form-group">
					<label>No.AWB</label>
					<input type="text" name="no_awb" id="no_awb" class="form-control" value="<?= $tb_surat['no_awb']; ?>" readonly>
				</div>
				<div class="form-group">
					<label>Upload Foto Penerima </label>
					<input type="file" class="form-control" id="foto_penerima" name="foto_penerima" placeholder="Foto Penerima">
				</div>
				<div class="form-group">
					<label>Upload Foto Lokasi </label>
					<input type="file" class="form-control" id="foto_lokasi" name="foto_lokasi" placeholder="Foto Lokasi">
				</div>

				<button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
				<a href="<?php echo base_url('jasa/kurir/pesanan_t/') ?>" class="btn btn-danger btn-sm mt-3">Batal</a>
			</form> -->

			<?= form_open_multipart('jasa/kurir/proses_update/' . $tb_surat['id_surat']); ?>
			<div class="form-group">
				<label>No.AWB</label>
				<input type="text" name="no_awb" id="no_awb" class="form-control" value="<?= $tb_surat['no_awb']; ?>" readonly>
			</div>
			<div class="form-group">
				<label>Upload Foto Penerima </label>
				<input type="file" class="form-control" id="foto_penerima" name="foto_penerima" placeholder="Foto Penerima">
			</div>
			<div class="form-group">
				<label>Upload Foto Lokasi </label>
				<input type="file" class="form-control" id="foto_lokasi" name="foto_lokasi" placeholder="Foto Lokasi">
			</div>
			<div class="form-group">
				<label>Upload Foto Gedung </label>
				<input type="file" class="form-control" id="foto_gedung" name="foto_gedung" placeholder="Foto Gedung">
			</div>
			<div class="form-group">
				<label>Upload Foto Share Lokasi </label>
				<input type="file" class="form-control" id="foto_shareloc" name="foto_shareloc" placeholder="Foto Share Lokasi">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Update</button>
			<a href="<?php echo base_url('jasa/kurir/pesanan_t/') ?>" class="btn btn-danger btn-sm mt-3">Batal</a>

		</div>

		<div class="col-md-2"></div>
	</div>
</div>