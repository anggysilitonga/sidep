<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
	<div class="x_title">
		<h2>Detail Bunga</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">

		<!-- Konten tabunganmu seyeng -->
		<div class="row" style="display: block;">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Range Saldo :</th>
                        <th>Rp100.000 &lt; </th>
                        <th>Rp1.000.000 - Rp100.000.000 </th>
                        <th>Rp100.000.000 - Rp500.000.000 </th>
                        <th>Rp500.000.000 - Rp1.000.000.000 </th>
                        <th> &gt; Rp1.000.000.000 </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($res as $key):?>
                        <?php $per = "%"; ?>
                        <tr>
                            <td></td>
                            <td><?=$key['kat_1']*100; echo $per?></td>
                            <td><?=$key['kat_2']*100; echo $per?></td>
                            <td><?=$key['kat_3']*100; echo $per?></td>
                            <td><?=$key['kat_4']*100; echo $per?></td>
                            <td><?=$key['kat_5']*100; echo $per?></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="d-flex justify-content-end">
                <a href="<?= base_url()?>/Bunga/editBunga/<?=$id_bunga?>" class="btn btn-primary">Edit</a>
              </div>
        </div>
		<!-- end form for validations -->
	</div>
	
</div>




<?= $this->endSection() ?>