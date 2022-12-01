<?= $this->extend('template2'); ?>
<?= $this->section('content'); ?>
<!-- /page content -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Formulir Pemasok</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Formulir Pemasok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listpemasok"><i class="bx bx-data me-1"></i>Data Pemasok</a>
                    </li>
                </ul>
                <div class="card m b-4">

                    <hr class="my-0" />
                    <div class="card-body">
                        <form action="<?= base_url('/Pcreate') ?>" method="post">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="Kode_pemasok" class="form-label">Kode Pemasok</label>
                                    <input class="form-control" type="text" id="kodep" name="kodep" placeholder="Ex: 35OD1" autofocus maxlength="6" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="PT_pemasok" class="form-label">PT. Pemasok</label>
                                    <input class="form-control" type="text" name="ptp" id="ptp" placeholder="Ex: PT sinar jaya" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="nama_pemasok" class="form-label">Narahubung Pemasok</label>
                                    <input class="form-control" type="text" name="namap" id="namap" placeholder="Ex: Alinda Rahma" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email" placeholder="Ex: john.doe@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">no. Telpon</label>
                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Ex: 0827125****" maxlength="12" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="web" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="web" name="web" placeholder="Ex: https://github.com/Regita-99/2017051017-Tugas1-WebLanjut" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <!-- <input class="form-control" type="text" id="id_provinsi" name="id_provinsi" placeholder="Ex: Lampung" /> -->
                                    <select name="id_provinsi" id="id_provinsi" class="select2 form-select">
                                        <option id="country" class="select2 form-select" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </option>
                                        <?php foreach ($provinsi as $pro) : ?>
                                            <option value="<?= $pro['id_provinsi'] ?>"><?= $pro['provinsip'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="kodepos" class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" id="kodepos" name="kodepos" placeholder="Ex: 231465" maxlength="6" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="kota" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Ex: Natar"  />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="alamat" class="form-label">alamat lengkap</label>
                                    <input type="text" class="form-control" id="alamatp" name="alamatp" placeholder="Ex: jl.An** No.24" />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </form>
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
<!-- /page content -->
<?= $this->endSection('content'); ?>