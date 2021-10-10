<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Form Deposito</h2>
		
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form id="demo-form" data-parsley-validate action="<?= base_url() ?>/Deposito/simulasiDeposito" method="post" >
			<label for="heard">Pilih Jenis Deposito:</label>
				<select name="jns_dep" id="heard" class="form-control" required  >
					<option disabled >Pilih Jenis Deposito</option>
					<?php foreach ($res as $key ):?>
						<option value="<?= $key['id_dep'] ?>"><?= $key['jenis_dep']?></option>
					<?php endforeach;?>
				</select>
			<label for="nominal">Nominal * :</label>
			<input type="text" id="rupiah" class="form-control" name="nominal" required />

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

<script type="text/javascript">
		var rupiah = document.getElementById('rupiah');
		let temp = '';
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			// rupiah.value = formatRupiah(this.value, 'Rp. ');
			rupiah.value = formatRupiah(this.value, 'Rp. ');
			console.log(rupiah.value);
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
