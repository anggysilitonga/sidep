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
            <form class="form-horizontal form-label-left" action="<?= base_url() ?>/Deposito/getFo" method="post" target="_blank">
                <div class="form-group row">
                    <label class="control-label col-md-3" for="last-name">Pilih Cabang Terdekat</label>
                    <div class="col-md-3">
                        <select name="id_cab" id="heard" class="form-control" required  >
                            <?php foreach ($cabang as $key): ?>
                                <option value="<?= $key->id_cabang?>"><?= $key->nama_cabang ?></option>    
                            <?php endforeach; ?>    
                        <!-- <option value="100" >Kantor Cabang Utama</option>
                            <option value="160" >Cabang Yogyakarta</option>
                            <option value="103" >Cabang Sarmi</option> -->
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit">Pilih</button>
                    </div>
                </div>
            </form>
        <?php endif; ?>
<?= $this->endSection() ?>
