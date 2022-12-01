<?= $this->extend('template2'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Barang Masuk</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                        <a class="nav-link" href="/home"><i class="bx bx-user me-1"></i>Formulir Barang Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/listB"><i class="bx bx-data me-1"></i>Data Barang Masuk</a>
                    </li>
                    
                </ul>
                <div class="card m b-4">

                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <div class="p-4">
                                    <a href="/store" type="button" class="btn btn-primary mb-3">Tambah</a>
                                    <table class="table table-bordered" border="2">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <center>No</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Kode Barang</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Merk Barang</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Size Barang</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Jumlah Barang</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Harga Barang</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Kode Penjual</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Keterangan Masuk</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Update</center>
                                                </th>
                                                <th scope="col">
                                                    <center>Action</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($kumpbaju as $kmp) : ?>
                                                <tr>
                                                    <th scope="row"><?= $no ?></th>
                                                    <td><?= $kmp['kodeb'] ?></td>
                                                    <td><?= $kmp['merkb'] ?></td>
                                                    <td><?= $kmp['sizeb'] ?></td>
                                                    <td><?= $kmp['jumlahb'] ?></td>
                                                    <td><?= $kmp['hargab'] ?></td>
                                                    <td><?= $kmp['kodep'] ?></td>
                                                    <td><?= $kmp['created_at'] ?></td>
                                                    <td><?= $kmp['update_at'] ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a class="btn btn-warning me-3" href="/edit/<?= $kmp['id'] ?>">Edit</a>
                                                            <form action="/delete/<?= $kmp['id'] ?>" method="post">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php $no++;
                                            endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Account -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>