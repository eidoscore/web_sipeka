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

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newkuis">Add Kuis</a>
            <table class="table table-hover" id="table1">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Kuis</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kuis as $ks) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ks['id']; ?></td>
                            <td><?= $ks['tanggal']; ?></td>
                            <td><?= $ks['keterangan']; ?></td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#editSoal<?= $ks['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?php base_url(); ?>hapuskuis/<?php echo $ks['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin.?');">Delete</a>
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
<div class="modal fade" id="newkuis" tabindex="-1" role="dialog" aria-labelledby="newkuisLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newkuisLabel">Add New Kuis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('soal/kuesioner'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_kuis">Id Kuis</label>
                        <input type="text" class="form-control" value="<?= date('Ydmih'); ?>" id="id_kuis" name="id_kuis" readonly>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Tanggal Kuis</label>
                        <div class="form-row">
                            <div class="form-group col-md-3 m-b-0">
                                <select class="form-control selectpicker show-tick" data-style="btn" name="hari" id="hari" required>
                                    <?php for ($i = 1; $i < 32; $i++) {
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-5 m-b-0">
                                <select class="form-control selectpicker show-tick" data-style="btn" name="bulan" id="bulan" required>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 m-b-0">
                                <select class="form-control selectpicker show-tick" data-style="btn" name="tahun" id="tahun" required>
                                    <?php $x = date('Y');
                                    for ($i = 0; $i < 120; $i++) {
                                        echo '<option value="' . $x . '">' . $x-- . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
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
foreach ($kuis as $ks) : $no++ ?>
    <div class="modal fade" id="editSoal<?= $ks['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editSoalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSoalLabel">Edit Soal</h5>
                    <button type="button" class="close" data-disiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('soal/editkuis'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_kuis">Id Kuis</label>
                            <input type="text" class="form-control" value="<?= $ks['id']; ?>" id="id_kuis" name="id_kuis" readonly>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="tanggal" class="col-form-label">Tanggal Kuis</label>
                                <div class="form-row">
                                    <div class="form-group col-md-3 m-b-0">
                                        <select class="selectpicker show-tick form-control" data-style="btn" name="hari" id="hari" required>
                                            <?php for ($i = 1; $i < 32; $i++) {
                                                if (date('d', strtotime($ks['tanggal'])) == $i) {
                                                    echo '<option value="' . $i . '" selected="selected">' . $i . '</option>';
                                                } else {
                                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5 m-b-0">
                                        <select class="selectpicker show-tick form-control" data-style="btn" name="bulan" id="bulan" required>
                                            <?php $a = '';
                                            $b = '';
                                            $c = '';
                                            $d = '';
                                            $e = '';
                                            $f = '';
                                            $g = '';
                                            $h = '';
                                            $i = '';
                                            $j = '';
                                            $k = '';
                                            $l = '';
                                            $x = date('m', strtotime($ks['tanggal']));

                                            if ($x == 1) {
                                                $a = ' selected="selected" ';
                                            } else if ($x == 2) {
                                                $b = ' selected="selected" ';
                                            } else if ($x == 3) {
                                                $c = ' selected="selected" ';
                                            } else if ($x == 4) {
                                                $d = ' selected="selected" ';
                                            } else if ($x == 5) {
                                                $e = ' selected="selected" ';
                                            } else if ($x == 6) {
                                                $f = ' selected="selected" ';
                                            } else if ($x == 7) {
                                                $g = ' selected="selected" ';
                                            } else if ($x == 8) {
                                                $h = ' selected="selected" ';
                                            } else if ($x == 9) {
                                                $i = ' selected="selected" ';
                                            } else if ($x == 10) {
                                                $j = ' selected="selected" ';
                                            } else if ($x == 11) {
                                                $k = ' selected="selected" ';
                                            } else if ($x == 12) {
                                                $l = ' selected="selected" ';
                                            } ?>
                                            <option value="01" <?= $a ?>>Januari</option>
                                            <option value="02" <?= $b ?>>Februari</option>
                                            <option value="03" <?= $c ?>>Maret</option>
                                            <option value="04" <?= $d ?>>April</option>
                                            <option value="05" <?= $e ?>>Mei</option>
                                            <option value="06" <?= $f ?>>Juni</option>
                                            <option value="07" <?= $g ?>>Juli</option>
                                            <option value="08" <?= $h ?>>Agustus</option>
                                            <option value="09" <?= $i ?>>September</option>
                                            <option value="10" <?= $j ?>>Oktober</option>
                                            <option value="11" <?= $k ?>>November</option>
                                            <option value="12" <?= $l ?>>Desember</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 m-b-0">
                                        <select class="selectpicker show-tick form-control" data-style="btn" name="tahun" id="tahun" required>
                                            <?php $x = date('Y');
                                            for ($i = 0; $i < 120; $i++) {
                                                if (date('Y', strtotime($ks['tanggal'])) == $x) {
                                                    echo '<option value="' . $x . '" selected="selected">' . $x . '</option>';
                                                } else {
                                                    echo '<option value="' . $x . '">' . $x . '</option>';
                                                }
                                                $x--;
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <di class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" value="<?= $ks['keterangan'] ?>" class="form-control mb-3" id="keterangan" name="keterangan">
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