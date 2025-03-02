<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>


    <div class="row">
        <div class="col-lg">

            <?= form_error('menu', '<div class="alert alert-warning" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="<?= base_url('karyawan/tambah') ?>" class="btn btn-primary mb-3">Tambah Karyawan</a>
            <table class="table table-hover" id="table1">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Tahun Masuk</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($karyawan as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k->name; ?></td>
                            <td><?= $k->email; ?></td>
                            <td><?= $k->nip; ?></td>
                            <td><?= $k->no_hp; ?></td>
                            <td><?= $k->jabatan; ?></td>
                            <td><?= $k->tahun_masuk; ?></td>
                            <td><?= $k->alamat; ?></td>
                            <td>
                                <a href="<?= base_url('karyawan/edit/') . $k->id; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('karyawan/hapus/') . $k->id; ?>" class="badge badge-danger" onclick="return confirm('Yakin.?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->