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
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Shorting Bulan</label>
                        <div class="form-row">
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
                            <div>
                                <input type="submit" class="form-control btn btn-primary" value="Search">
                            </div>
                        </div>

                    </div>
                    <?php if (isset($karyawan_terbaik)) { ?>
                        <?php foreach ($karyawan_terbaik as $ktb) : ?>
                            <div class="container" align="center">
                                <div class="card m-10 align-right mb-5 border-3" style="width: 720px;">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <img src="<?= base_url('assets/img/profile/') . $ktb->image ?>" class="rounded-square mt-5 mb-5" style="widht: 100px; height:150px">

                                            <div class="col-8" align="left">
                                            <div class="card-body">                                                
                                                <label>EMAIL        : <?= $ktb->email ?></label><br>
                                                <label>NAMA         : <?= $ktb->name ?></label><br>
                                                <label>NIK          : <?= $ktb->nip ?></label><br>
                                                <label>JABATAN      : <?= $ktb->jabatan ?></label><br>
                                                <label>TAHUN MASUK  : <?= $ktb->tahun_masuk ?></label><br>
                                                <label>NO TELEPON   : <?= $ktb->no_hp ?></label><br>

                                            </div>
                                        </div>
                                        </div>
                                        <div class=""><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php }; ?>
            </div>




            </form>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->