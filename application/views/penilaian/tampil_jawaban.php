<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
        <div class="card-body p-0">

            <!-- Page Heading -->
            <h1 class="h3 mt-4 mb-4 text-gray-800 col-12"><?= $title ?></h1>
            <hr>
            <?= $this->session->flashdata('message'); ?>
            <div class="col-12">
                <form action="" method="post">
                    <input type="hidden" name="id_penilaian" id="id_penilaian" value="<?= date('Ymdhis'); ?>">
                    <?php $no = 0;
                    foreach ($soal as $s) : $no++; ?>
                        <div class="form-group row">
                            <div class="col-5">
                                <input type="hidden" value="<?= $s->id ?>" name="id_detail_soal<?= $no; ?>" id="id_detail_soal<?= $no; ?>">
                                <label for="soal<?= $no; ?>">Soal <?= $no; ?></label>
                                <textarea type="text" class="form-control" id="soal<?= $no; ?>" name="soal<?= $no; ?>" readonly><?= $s->soal; ?></textarea>
                            </div>
                            <div class="col-5">
                                <label for="jawaban<?= $no; ?>">Jawaban <?= $no; ?></label>
                                <?php foreach ($jawaban as $j) : ?>
                                    <?php if ($j->id_detail_soal == $s->id_soal2) { ?>

                                        <textarea type="text" class="form-control" id="jawaban<?= $no; ?>" name="jawaban<?= $no; ?>" required readonly><?= $j->jawaban; ?></textarea>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-2">
                                <label for="nilai">Nilai</label>
                                <select class="form-control" id="nilai<?= $no; ?>" name="nilai<?= $no; ?>" onchange="GetSelectedValue()">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    <div class="form-group row mt-5">
                        <div class="col-6">

                            <label for="nilai"> Nilai <strong>Range (1-25)</strong></label>
                            <input type="text" class="form-control" id="nilai" name="nilai" readonly>
                        </div>
                    </div>

                    <input type="hidden" name="id_jawaban" id="id_jawaban" value="<?= $this->uri->segment(3); ?>">
                    <button type="submit" class="btn btn-primary mt-4 mb-4 mr-3">Submit</button>
                    <button type="button" class="btn btn-danger mt-4 mb-4">Cancel</button>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- End of Main Content -->
<script>
    function GetSelectedValue() {
        var nilai1 = document.getElementById("nilai1").value;
        var nilai2 = document.getElementById("nilai2").value;
        var nilai3 = document.getElementById("nilai3").value;
        var nilai4 = document.getElementById("nilai4").value;
        var nilai5 = document.getElementById("nilai5").value;
        var result = (parseInt(nilai1) + parseInt(nilai2) + parseInt(nilai3) + parseInt(nilai4) + parseInt(nilai5))
        document.getElementById("nilai").value = result;
    }
</script>