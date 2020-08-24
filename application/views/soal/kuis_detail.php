<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="form-group row">
        <div class="col-4">
            <label for=""> Id Kuesioner</label>
            <input type="text" class="form-control" value="<?= $kuesioner['id']; ?>" readonly>
        </div>
        <div class="col-4">
            <label for="">Keterangan</label>
            <input type="email" class="form-control" value="<?= $kuesioner['keterangan']; ?>" readonly>
        </div>
        <div class="col-4">
            <label for="">Tanggal Kuis</label>
            <input type="email" class="form-control" value="<?= $kuesioner['tanggal']; ?>" readonly>
        </div>
    </div>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <?php $no = 1;
            foreach ($list_kuis as $lk) :
                $no++;
            endforeach; ?>
            <?php if ($no <= 5) { ?>
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newkuis">Add Soal</a>
            <?php } ?>
            <table class="table table-hover" id="table1">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id Kuis</th>
                        <th scope="col">Id Soal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($list_kuis as $lk) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $lk->id_kuis; ?></td>
                            <td><?= $lk->soal; ?></td>
                            <td>
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
<!-- Modal -->
<div class="modal fade" id="newkuis" tabindex="-1" role="dialog" aria-labelledby="newkuisLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newkuisLabel">Add Soal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('soal/detail_kuis/' . $kuesioner['id']); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="<?= date('Ydmhis') ?>">
                    <input type="hidden" name="id_kuis" id="id_kuis" value="<?= $kuesioner['id']; ?>">

                    <div class="form-group">
                        <select name="id_soal" id="id_soal" class="form-control">
                            <label for="">Pilih Soal</label>
                            <option value="">Select Soal</option>
                            <?php foreach ($soal as $s) : ?>
                                <option value="<?= $s['id_soal']; ?>"><?= $s['soal']; ?></option>
                            <?php endforeach; ?>
                        </select>
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

<!-- Modal Edit -->
<?php $no = 0;
foreach ($list_kuis as $lk) : $no++ ?>
    <div class="modal fade" id="editSoal<?= $lk->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editSoalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSoalLabel">Edit Soal</h5>
                    <button type="button" class="close" data-disiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('soal/detail_kuis'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_kuis">Id Kuis</label>
                            <input type="text" class="form-control" value="<?= $lk->id; ?>" id="id_kuis" name="id_kuis" readonly>
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" value="<?= $lk->keterangan ?>" class="form-control mb-3" id="keterangan" name="keterangan">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- End Edit Menu--> */