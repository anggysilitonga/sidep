<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Informasi Tabungan</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">

		<!-- Konten tabunganmu seyeng -->
        <form action="<?= base_url() ?>/Tabungan/getInfo" method="post" id="demo-form">
            <label for="heard">Pilih Jenis Tabungan:</label>
            <div class="select-row">
				<select name="id_tab" id="heard" class="form-control" required style="width : 90%">
					<option disabled >Pilih jenis tabungan</option>
					<?php foreach ($res as $key ):?>
						<option value="<?= $key['id_tab'] ?>"><?= $key['jenis_tab']?></option>
					<?php endforeach;?>
				</select>
                <button type="submit" class="btn btn-success">Pilih</button>
            </div>
        </form>
		<!-- end form for validations -->
        <?php if (!empty($desc)):?>
            <div class="deskripsi">
                <h6>Deskripsi Produk : </h6>
                <div class="isi-deskripsi">
                    <p><?= $desc->deskripsi?></p>
                </div>
            </div>
        <?php endif;?>
	</div>
</div>

<?= $this->endSection() ?>