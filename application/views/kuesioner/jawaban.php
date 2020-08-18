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
                    <?php $no = 0;
                    foreach ($soal as $s) : $no++; ?>
                        <div class="form-group row">
                            <div class="col-6">
                                <input type="hidden" value="<?= $s->id ?>" name="id_detail_soal<?= $no; ?>" id="id_detail_soal<?= $no; ?>">
                                <label for="soal<?= $no; ?>">Soal <?= $no; ?></label>
                                <textarea type="text" class="form-control" id="soal<?= $no; ?>" name="soal<?= $no; ?>" readonly><?= $s->soal; ?></textarea>
                            </div>
                            <div class="col-6">
                                <label for="jawaban<?= $no; ?>">Jawaban <?= $no; ?></label>
                                <textarea type="text" class="form-control" id="jawaban<?= $no; ?>" name="jawaban<?= $no; ?>" required></textarea>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <input type="hidden" value="<?= date('YmdHis'); ?>" id="id" name="id">
                    <input type="hidden" value="<?= $this->uri->segment(3); ?>" id="id_kuis" name="id_kuis">

                    <input type="hidden" value="<?= $no; ?>" id="total_soal" name="total_soal">

                    <button type="submit" class="btn btn-primary mt-4 mb-4 mr-3">Submit</button>
                    <button type="button" class="btn btn-danger mt-4 mb-4">Cancel</button>

                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- End of Main Content -->