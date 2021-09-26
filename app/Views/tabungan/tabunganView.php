<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Form Simulasi Tabungan</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">

		<!-- Konten tabunganmu seyeng -->
		<form action="<?= base_url() ?>/Tabungan/simulasiTabungan" method="post" id="demo-form" data-parsley-validate>
			<label for="heard">Pilih Jenis Tabungan:</label>
				<select id="heard" class="form-control" name="jns_tab">
					<option disabled >Pilih jenis tabungan</option>
					<?php foreach ($res as $key ):?>
						<option value="<?= $key['id_tab'] ?>"><?= $key['jenis_tab']?></option>
					<?php endforeach;?>
					
				</select>
			<label for="fullname">Nominal * :</label>
			<input type="number" id="fullname" class="form-control" name="nominal" required />

			<label for="email">Jangka Waktu * :</label>
			<input type="text" id="email" class="form-control" name="jangka" data-parsley-trigger="change" required />

			<br />
			<button type="submit" class="btn btn-primary">Submit</span>

		</form>
		<!-- end form for validations -->
	</div>
	
</div>




<?= $this->endSection() ?>