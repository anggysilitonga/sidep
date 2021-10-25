<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Pilih Jenis Giro</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">

		<!-- Konten tabunganmu seyeng -->
		<form id="demo-form" data-parsley-validate action="<?= base_url()?>/Bunga/getBungaGiro" method="post">
			<label for="heard">Pilih Jenis Giro: 	</label>
				<select id="heard" class="form-control" required name="id_giro">
					<option disabled selected>Pilih jenis Giro</option>
					<?php foreach ($res as $key):?>
						<option value="<?=$key['id_giro']?>"><?=$key['jenis_giro']?></option>
					<?php endforeach;?>
				</select>
			<br />
			<div class="d-flex justify-content-end">
				<button class="btn btn-primary">Pilih</button>
			</div>
		</form>
		<!-- end form for validations -->
	</div>
	
</div>




<?= $this->endSection() ?>