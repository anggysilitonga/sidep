<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Menu Simulasi</h2>
		
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		
		<!-- Konten tabunganmu seyeng -->
		<div class="menu-dash">
			<a href="<?= base_url()?>/tabungan">
				<div class="btn-menu menu-tabungan">
					<i class="fa fa-archive"></i>
					<span class="menuTitle">Tabungan</span>
				</div>
			</a>
			<a href="<?= base_url()?>/deposito">
				<div class="btn-menu menu-deposito">
					<i class="fa fa-line-chart"></i>
					<span class="menuTitle">Deposito</span>
				</div>
			</a>
			<a href="<?= base_url()?>/giro">
				<div class="btn-menu menu-giro">
					<i class="fa fa-building"></i>
					<span class="menuTitle">Giro</span>
				</div>
			</a>
		</div>
		<!-- end form for validations -->

	</div>
</div>	

<?= $this->endSection() ?>
