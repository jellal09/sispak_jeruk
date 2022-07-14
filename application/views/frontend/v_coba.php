<?php $this->load->view('frontend/template/meta'); ?>
<div class="wrapper">

    <?php $this->load->view('frontend/template/navbar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <!-- /.col-md-6 -->
                    <div class="col-sm-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="5b" data-toggle="pill"
                                            href="#custom-tabs-four-home" role="tab"
                                            aria-controls="custom-tabs-four-home" aria-selected="true">Kategori
                                            Batang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-four-profile" role="tab"
                                            aria-controls="custom-tabs-four-profile" aria-selected="false">Kategori
                                            Buah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                                            href="#custom-tabs-four-settings" role="tab"
                                            aria-controls="custom-tabs-four-settings" aria-selected="false">Kategori
                                            Daun</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Pesanan Masuk -->
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">
                                        <form action="<?php echo base_url('user/Main/hasil') ?> " method="POST">
                                            <div class="card card-primary card-outline">
                                                <?= $this->session->flashdata('message'); ?>
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <td width=50>No. </td>
                                                            <td>Gejala</td>
                                                            <td width=160>Kondisi</td>
                                                        </tr>
                                                    </thead>

                                                    <?php $no = 1;
                                                        foreach ($databatang as $dt) { ?>
                                                    <!-- <input type="text" class="text" name="kd_gejala[]" value="<?= $dt->kd_gejala; ?>"> -->
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $dt->nama_gejala ?></td>

                                                            <td>
                                                                <select class="form-control text-center"
                                                                    name="kondisi[]">
                                                                    <option value="">Pilih Kondisi</option>
                                                                    <option value="<?= $dt->kd_gejala . '_' . 1; ?>">
                                                                        Sangat Yakin
                                                                    </option>
                                                                    <option value="<?= $dt->kd_gejala . '_' . 2; ?>">
                                                                        Cukup Yakin
                                                                    </option>
                                                                    <option value="<?= $dt->kd_gejala . '_' . 3; ?>">
                                                                        Yakin</option>
                                                                    <option value="<?= $dt->kd_gejala . '_' . 4; ?>">
                                                                        Kurang Yakin
                                                                    </option>
                                                                    <option value="<?= $dt->kd_gejala . '_' . 5; ?>">
                                                                        Tidak Yakin
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <?php } ?>
                                                </table>
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-primary btn-sm float-right mb-3 mr-5">Selanjutnya</button>
                                                </div>
                                            </div>
                                    </div>

                                    <!-- Pesanan Dikemas -->
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="card card-primary card-outline">

                                            <?= $this->session->flashdata('message'); ?>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <td width=50>No. </td>
                                                        <td>Gejala</td>
                                                        <td width=160>Kondisi</td>
                                                    </tr>
                                                </thead>

                                                <?php $no = 1;
                                                        foreach ($databuah as $dt) { ?>
                                                <!-- <input type="text" class="text" name="kd_gejala[]" value="<?= $dt->kd_gejala; ?>"> -->
                                                <tbody>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $dt->nama_gejala ?></td>

                                                        <td>
                                                            <select class="form-control text-center" name="kondisi[]">
                                                                <option value="">Pilih Kondisi</option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 1; ?>">
                                                                    Sangat Yakin
                                                                </option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 2; ?>">
                                                                    Cukup Yakin
                                                                </option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 3; ?>">
                                                                    Yakin</option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 4; ?>">
                                                                    Kurang Yakin
                                                                </option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 5; ?>">
                                                                    Tidak Yakin
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php } ?>
                                            </table>
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary btn-sm float-right mb-3 mr-5">Selanjutnya</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pesanan Selesai -->
                                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-settings-tab">
                                        <div class="card card-primary card-outline">

                                            <?= $this->session->flashdata('message'); ?>
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <td width=50>No. </td>
                                                        <td>Gejala</td>
                                                        <td width=160>Kondisi</td>
                                                    </tr>
                                                </thead>

                                                <?php $no = 1;
                                                    foreach ($datadaun as $dt) { ?>
                                                <!-- <input type="text" class="text" name="kd_gejala[]" value="<?= $dt->kd_gejala; ?>"> -->
                                                <tbody>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $dt->nama_gejala ?></td>

                                                        <td>
                                                            <select class="form-control text-center" name="kondisi[]">
                                                                <option value="">Pilih Kondisi</option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 1; ?>">
                                                                    Sangat Yakin
                                                                </option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 2; ?>">
                                                                    Cukup Yakin
                                                                </option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 3; ?>">
                                                                    Yakin</option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 4; ?>">
                                                                    Kurang Yakin
                                                                </option>
                                                                <option value="<?= $dt->kd_gejala . '_' . 5; ?>">
                                                                    Tidak Yakin
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php } ?>
                                            </table>
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary btn-sm float-right mb-3 mr-5">Selanjutnya</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php $this->load->view('frontend/template/footer'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('frontend/template/js'); ?>
</body>

</html>