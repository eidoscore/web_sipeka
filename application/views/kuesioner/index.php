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
                        <th scope="col">Id Soal</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Soal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($list_kuesioner as $ka) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ka->id ?></td>
                            <td><?= $ka->tanggal ?></td>
                            <td><?= $ka->keterangan ?></td>
                            <?php if ($kuesioner_terjawab == null) { ?>
                                <td>Belum di Jawab</td>
                                <td>
                                    <a href="<?= site_url('kuis_karyawan/jawab/') . $ka->id; ?>" class="badge badge-success">Jawab</a>
                                </td>
                            <?php }; ?>
                            <?php foreach ($kuesioner_terjawab as $kt) : ?>
                                <?php if ($ka->id == $kt->id_kuesioner) { ?>
                                    <?php if ($kt->email == $this->session->userdata('email')) { ?>
                                        <td>Sudah di Jawab</td>
                                        <td></td>
                                    <?php } else { ?>
                                        <td>Belum di Jawab</td>
                                        <td>
                                            <a href="<?= site_url('kuis_karyawan/jawab/') . $ka->id; ?>" class="badge badge-success">Jawab</a>
                                        </td>
                                    <?php } ?>
                                <?php } ?>
                            <?php endforeach; ?>
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