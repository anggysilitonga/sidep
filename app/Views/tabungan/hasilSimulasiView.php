<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
    <div class="x_title">
        <h2>Hasil Simulasi <?=$simpanan ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <form class="form-horizontal form-label-left">
            <div class="form-group row">
                <label class="control-label col-md-3" for="first-name">Setoran Awal</label>
                <div class="col-md-7">
                    <input type="text" id="" class="form-control col-md-7" disabled value="<?=$nominal?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3" for="last-name">Total Bunga yang Didapatkan</label>
                <div class="col-md-7">
                    <input type="text" id="" class="form-control col-md-7" disabled value="<?=$profit?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3" for="last-name">Jangka Waktu</label>
                <div class="col-md-7">
                    <input type="text" id="" class="form-control col-md-7" disabled value="<?=$jangka?> bulan">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-md-3" for="last-name" style="font-size: 2em;">Total Saldo Akhir</label>
                <div class="col-md-7">
                    <p style="font-weight: bold; font-size: 4em; color: #2a3f54"><?=$total ?></p>
                    <!-- <input type="text" id="" class="form-control col-md-7 total" disabled value="<?=$total?>"> -->
                </div>
            </div>
        </form>
        <?php if ($simpanan == 'Deposito') : ?>
            <p>Silahkan Hubungi Funding Officer di Kantor Cabang Bank Papua Terdekat</p>
            <form class="form-horizontal form-label-left" action="" method="post">
                <div class="form-group row">
                    <label class="control-label col-md-3" for="last-name">Pilih Cabang Terdekat</label>
                    <div class="col-md-3">
                        <select name="jns_dep" id="heard" class="form-control" required  >
                            <option value="100" >Kantor Cabang Utama</option>
                            <option value="160" >Cabang Yogyakarta</option>
                            <option value="103" >Cabang Sarmi</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit">Pilih</button>
                    </div>
                </div>
            </form>
        <?php endif; ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Text in a modal</h4>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>

    </div>
  </div>
</div>
    </div>
</div>
<?= $this->endSection() ?>
