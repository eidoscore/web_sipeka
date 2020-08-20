<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSoal">Add New Soal</a>
            <table class="table table-hover" id="table1">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Jawaban</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Soal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kuesioner as $ka) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ka->id ?></td>
                            <td><?= $ka->tanggal ?></td>
                            <td><?= $ka->keterangan ?></td>
                            <td>Belum di Nilai</td>
                            <td>
                                <a href="<?= site_url('penilaian/TampilJawaban/') . $ka->id; ?>" class="badge badge-success">Nilai</a>
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