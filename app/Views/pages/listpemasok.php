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
            <a class="nav-link " href="/home"><i class="bx bx-user me-1"></i>Formulir Pemasok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/listpemasok"><i class="bx bx-data me-1"></i>Data Pemasok</a>
          </li>

        </ul>
        <div class="card m b-4">

          <hr class="my-0" />
          <div class="card-body">
            <div class="card">
              <h5 class="card-header">Responsive Table</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr class="text-nowrap">
                      <th>No</th>
                      <th>Kode Pemasok</th>
                      <th>PT. Pemasok</th>
                      <th>Narahubung Pemasok</th>
                      <th>E-mail</th>
                      <th>No. Telpon</th>
                      <th>Website</th>
                      <th>Provinsi</th>
                      <th>Kode Pos</th>
                      <th>Kota</th>
                      <th>Alamat Lengkap</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($pbaju as $p) : ?>
                      <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $p['kodep'] ?></td>
                        <td><?= $p['ptp'] ?></td>
                        <td><?= $p['namap'] ?></td>
                        <td><?= $p['email'] ?></td>
                        <td><?= $p['telp'] ?></td>
                        <td><?= $p['web'] ?></td>
                        <td><?= $p['id_provinsi'] ?></td>
                        <td><?= $p['kodepos'] ?></td>
                        <td><?= $p['kota'] ?></td>
                        <td><?= $p['alamatp'] ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/edit/<?= $p['kodep'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="<?= base_url('/delete/' . $p['kodep']) ?>"> <i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php $no++;
                    endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Responsive Table -->
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

<?= $this->endSection('content'); ?>