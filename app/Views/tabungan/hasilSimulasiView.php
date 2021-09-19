<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
    <div class="x_title">
        <h2>Hasil Simulasi Tabungan</h2>
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
            //perubahan
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
    </div>
</div>
<?= $this->endSection() ?>
