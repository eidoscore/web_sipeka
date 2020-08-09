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
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="id">Id Soal</label>
                            <input type="text" value="<?= date('YmdHis'); ?>" class="form-control" id="id" name="id" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Tanggal</label>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <select class="form-control selectpicker show-tick" data-style="btn" name="hari" id="hari" required>
                                        <?php for ($i = 1; $i < 32; $i++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
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
                    </div>

                    <div class="form-group">
                        <label for="soal">Pertanyaan</label>
                        <textarea type="text" class="form-control" id="soal" name="soal"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 mb-4 mr-3">Submit</button>
                    <button type="submit" class="btn btn-danger mt-4 mb-4">Cancel</button>

                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- End of Main Content -->