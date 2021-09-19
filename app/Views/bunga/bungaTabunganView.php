<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>List Bunga Tabungan</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">

		<!-- Konten tabunganmu seyeng -->
		<form id="demo-form" data-parsley-validate>
			<label for="heard">Pilih Jenis Tabungan:</label>
				<select id="heard" class="form-control" required>
					<option disabled >Pilih jenis tabungan</option>
					<!--  -->
					
				</select>
			<label for="fullname">Nominal * :</label>
			<input type="text" id="fullname" class="form-control" name="fullname" required />

			<label for="email">Jangka Waktu * :</label>
			<input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

			<label>Bunga *:</label>
			<p>
				5%:<input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> 
				4%: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
				3%: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
				2%: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
				1%: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
			</p>
			

			<label for="message">Message (20 chars min, 100 max) :</label>
			<textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

			<br />
			<span class="btn btn-primary">Validate form</span>

		</form>
		<!-- end form for validations -->
	</div>
	
</div>




<?= $this->endSection() ?>