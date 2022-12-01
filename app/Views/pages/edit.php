<?= $this->extend('template2'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Barang Masuk</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link " href="javascript:void(0);"><i class="bx bx-user me-1"></i>Formulir Barang Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/listB"><i class="bx bx-data me-1"></i> Data Barang Masuk</a>
                    </li>
                </ul>
                <div class="card m b-4">

                    <hr class="my-0" />
                    <div class="card-body">
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
                                        <form action="/update/<?= $kumpbaju['id'] ?>" method="post">
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Kode Baju<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" id="kodeb" name="kodeb" required="required" value="<?= $kumpbaju['kodeb'] ?>" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Merk Baju<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="merkb" id="merkb" required="required" value="<?= $kumpbaju['merkb'] ?>" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Size<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="sizeb" id="sizeb" required="required" value="<?= $kumpbaju['sizeb'] ?>" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Masuk<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="jumlahb" id="jumlahb" required="required" value="<?= $kumpbaju['jumlahb'] ?>" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Harga per satuan<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="hargab" id="hargab" required="required" value="<?= $kumpbaju['hargab'] ?>" />
                                                </div>
                                            </div>
                                            <div class="field item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3  label-align">Kode Pemasok<span class="required">*</span></label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="kodep" id="kodep" class="form-control" value="<?= $kumpbaju['kodep'] ?>">
                                                        <?php foreach ($kumppemasok as $kmp) : ?>
                                                            <option value="<?= $kmp['kodep'] ?>"><?= $kmp['kodep'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ln_solid">
                                                <div class="form-group">
                                                    <div class="col-md-6 offset-md-3">
                                                        <button type='submit' class="btn btn-primary">Submit</button>
                                                        <button type='reset' class="btn btn-success">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Account -->
                </div>

            </div>
        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->

    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>
</div>
</div>
</div>

<?= $this->endSection('content'); ?>