<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Pendataan Baju</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form action="<?= base_url('/create') ?>" method="post" novalidate>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kode Baju<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" id="kodeb" name="kodeb" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Merk Baju<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="merkb" id="merkb" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Size<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="sizeb" id="sizeb" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Masuk<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="jumlahb" id="jumlahb" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga per satuan<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="hargab" id="hargab" required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kode Penjual<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <!-- <input class="form-control" name="kodep" id="kodep" required="required" /> -->
                            <select name="kodep" id="kodep" class="form-control">
                                <?php foreach ($kumppemasok as $kmp) : ?>
                                    <option value="<?= $kmp['kodep'] ?>"><?= $kmp['kodep'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Id Pembeli<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="id_pembeli" id="id_pembeli" required="required" />
                        </div>
                    </div>

                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                                <button type='submit' class="btn btn-round btn-info">Submit</button>
                                <button type='reset' class="btn btn-round btn-success">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /page content -->

<?= $this->endSection('content'); ?>