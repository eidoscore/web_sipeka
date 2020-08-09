<!-- Begin Page Content -->
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
                        <th scope="col">Soal</th>
                        <th scope="col">Tanggal Buat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($soal as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['id_soal']; ?></td>
                            <td><?= $s['soal']; ?></td>
                            <td><?= $s['date_created']; ?></td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#editSubMenuModal<?= $s['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?php base_url(); ?>hapusSubMenu/<?php echo $s['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin.?');">Delete</a>
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

<!-- Modal -->
<div class="modal fade" id="newSoal" tabindex="-1" role="dialog" aria-labelledby="newSoalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSoalLabel">Add New Soal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('soal'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_soal">Id Soal</label>
                        <input type="text" class="form-control" value="<?= date('YmdHis'); ?>" id="id_soal" name="id_soal" readonly>
                    </div>

                    <div class="form-group">
                        <label for="soal">Soal</label>
                        <textarea type="text" class="form-control mb-3" id="soal" name="soal" placeholder="Input soal"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" value="<?= date('Ymd'); ?>" id="date" name="date" placeholder="Submenu icon">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- End ADD Menu-->