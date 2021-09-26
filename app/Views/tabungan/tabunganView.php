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
			<input type="text" id="rupiah" class="form-control" name="nominal" required />

			<label for="email">Jangka Waktu * :</label>
			<input type="text" id="email" class="form-control" name="jangka" data-parsley-trigger="change" required />

			<br />
			<button type="submit" class="btn btn-primary">Submit</span>

		</form>
		<!-- end form for validations -->
	</div>
	
</div>
<script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>



<?= $this->endSection() ?>