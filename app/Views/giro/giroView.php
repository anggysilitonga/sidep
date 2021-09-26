<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Form Giro</h2>
		
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form id="demo-form" data-parsley-validate action="<?= base_url()?>/Giro/simulasiGiro" method="post">
			<label for="heard">Pilih Jenis Giro:</label>
				<select id="heard" class="form-control" required name="id_giro">
					<option disabled >Pilih Jenis Giro</option>
					<?php foreach ($res as $key ):?>
						<option value="<?= $key['id_giro'] ?>"><?= $key['jenis_giro']?></option>
					<?php endforeach;?>
				</select>
			<label for="fullname">Nominal* :</label>
			<input type="text" id="fullname" class="form-control" name="nominal" required />

			<label for="jangka">Jangka Waktu * :</label>
			<select name="jangka" id="heard" class="form-control" required>
					<option disabled selected>Pilih jangka waktu</option>
					<option value ="1" >1 Bulan</option>
					<option value ="3" >3 Bulan</option>
					<option value ="6" >6 Bulan</option>
					<option value ="12" >12 Bulan</option>
					<option value ="24" >24 Bulan</option>
					
				</select>
			<br />
		<button type="submit" class="btn btn-primary">Submit</button>
		</form>
    </div>
</div>

<?= $this->endSection() ?>
