<?php include 'op-layouts/header.php'; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Data Siswa</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="op-raport-siswa.php" class="btn btn-dark waves-effect waves-light">Kembali</a>
                            <a href="#" class="btn btn-danger waves-effect waves-light">Reset</a>
                            <a href="op-raport-siswa-edit.php" class="btn btn-primary waves-effect waves-light">Edit</a>
                        </div>
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" class="text-center"><h4>Data Lengkap Siswa Baru</h4></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>NISN</th>
                                                    <td>34573734345</td>
                                                </tr>
                                                <tr>
                                                    <th>NAMA LENGKAP</th>
                                                    <td>Thornton</td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat, Tanggal Lahir</th>
                                                    <td>Serang, 30 Februari 2007</td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td>Perempuan</td>
                                                </tr>
                                                <tr>
                                                    <th>Asal Sekolah</th>
                                                    <td>34573734345</td>
                                                </tr>
                                                <tr>
                                                    <th>Orag Tua / Wali</th>
                                                    <td>34573734345</td>
                                                </tr>
                                                <tr>
                                                    <th>No. Telepon</th>
                                                    <td>34573734345</td>
                                                </tr>
                                                <tr>
                                                    <th>Jurusan Yang Dipilih</th>
                                                    <td>34573734345</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <?php include 'op-layouts/footer.php'; ?>