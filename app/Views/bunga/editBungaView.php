<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="x_panel">
	<div class="x_title">
		<h2>Form Edit Bunga</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
        <div class="col-md-3 col-sm-6">
            <form action="<?= base_url() ?>/Bunga/updateBunga/<?=$res[0]['id_bunga'] ?>" method="post" id="demo-form" data-parsley-validate>
                <?php if($res[0]['id_bunga'] == 8): ?>
                    <label for="fullname">Rp100.000.000 &lt; :</label> 
                    <input type="text" id="kat_1" class="form-control" name="kat_1" required value="<?=$res[0]['kat_1']*100?>"/>
                    <br />
        
                    <label for="email">Rp100.000.000 - Rp1.000.000.000  :</label>
                    <input type="text" id="kat_2" class="form-control" name="kat_2" data-parsley-trigger="change" required value="<?=$res[0]['kat_2']*100?>" />
                    <br />
    
                    <label for="email">&gt; Rp1.000.000.000  :</label>
                
                    <input type="text" id="kat_3" class="form-control" name="kat_3" data-parsley-trigger="change" required value="<?=$res[0]['kat_3']*100?>"/>
                    <br />
                <?php elseif($res[0]['id_bunga'] == 9): ?>
                    <label for="fullname">Rp50.000.000 &lt; :</label> 
                    <input type="text" id="kat_1" class="form-control" name="kat_1" required value="<?=$res[0]['kat_1']*100?>"/>
                    <br />
        
                    <label for="email">Rp50.000.000 - Rp500.000.000  :</label>
                    <input type="text" id="kat_2" class="form-control" name="kat_2" data-parsley-trigger="change" required value="<?=$res[0]['kat_2']*100?>" />
                    <br />
    
                    <label for="email">Rp500.000.000 - Rp1.000.000.000  :</label>
                
                    <input type="text" id="kat_3" class="form-control" name="kat_3" data-parsley-trigger="change" required value="<?=$res[0]['kat_3']*100?>"/>
                    <br />
    
                    <label for="email">Rp1.000.000.000 - Rp50.000.000.000 :</label>
                    <input type="text" id="kat_4" class="form-control" name="kat_4" data-parsley-trigger="change" required value="<?=$res[0]['kat_4']*100?>"/>
                    <br />
    
                    <label for="email"> &gt; Rp50.000.000.000  :</label>
                    <input type="text" id="kat_5" class="form-control" name="kat_5" data-parsley-trigger="change" required value="<?=$res[0]['kat_5']*100?>"/>
                <?php else: ?>
                    <label for="fullname">Rp100.000 &lt; :</label> 
                    <input type="text" id="kat_1" class="form-control" name="kat_1" required value="<?=$res[0]['kat_1']*100?>"/>
                    <br />
        
                    <label for="email">Rp1.000.000 - Rp100.000.000  :</label>
                    <input type="text" id="kat_2" class="form-control" name="kat_2" data-parsley-trigger="change" required value="<?=$res[0]['kat_2']*100?>" />
                    <br />
    
                    <label for="email">Rp100.000.000 - Rp500.000.000  :</label>
                
                    <input type="text" id="kat_3" class="form-control" name="kat_3" data-parsley-trigger="change" required value="<?=$res[0]['kat_3']*100?>"/>
                    <br />
    
                    <label for="email">Rp500.000.000 - Rp1.000.000.000 :</label>
                    <input type="text" id="kat_4" class="form-control" name="kat_4" data-parsley-trigger="change" required value="<?=$res[0]['kat_4']*100?>"/>
                    <br />
    
                    <label for="email"> &gt; Rp1.000.000.000  :</label>
                    <input type="text" id="kat_5" class="form-control" name="kat_5" data-parsley-trigger="change" required value="<?=$res[0]['kat_5']*100?>"/>
                <?php endif ?>
    
                <br />

                <button type="submit" class="btn btn-primary">Update</span>
    
            </form>
        </div>
		<!-- end form for validations -->
	</div>
	
</div>




<?= $this->endSection() ?>