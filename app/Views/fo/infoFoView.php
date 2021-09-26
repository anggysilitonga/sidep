<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="x_panel">
    <div class="x_title">
        <h2>Daftar nama FO <?= $cabang['nama_cabang'] ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <?php $num = 1; ?>
        <?php foreach ($nama as $key) :?>
            <form class="form-horizontal form-label-left">
                <div class="form-group row">
                    <label class="control-label col-md-3" for="first-name">Nama FO <?=$num?></label>
                    <div class="col-md-7">
                        <input type="text" id="" class="form-control col-md-7" disabled value="<?=$key['nama_fo']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3" for="last-name">Kontak FO <?=$num?></label>
                    <div class="col-md-7">
                        <input type="text" id="" class="form-control col-md-7" disabled value="<?=$key['kontak_fo']?>">
                    </div>
                </div>
                <br>
            <?php $num++; ?>
            </form>
        <?php endforeach; ?>
    </div>
</div>

<script type="text/javascript">
    $('.modal').modal('show');
</script>
<?= $this->endSection() ?>
