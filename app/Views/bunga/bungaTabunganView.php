<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Pilih Jenis Tabungan</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">

		<!-- Konten tabunganmu seyeng -->
		<form id="demo-form" data-parsley-validate action="<?= base_url()?>/Bunga/getBunga" method="post">
			<label for="heard">Pilih Jenis Tabungan: 	</label>
				<select id="heard" class="form-control" required name="id_tab">
					<option disabled >Pilih jenis tabungan</option>
					<?php foreach ($res as $key):?>
						<option value="<?=$key['id_tab']?>"><?=$key['jenis_tab']?></option>
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