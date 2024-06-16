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
                        <h4 class="mb-sm-0 font-size-18">Data Siswa Baru</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jurusan</a></li>
                                <li class="breadcrumb-item active">TKJ</li>
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
                            <h4 class="card-title">Jurusan Teknik Komputer Jaringan</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>NAMA LENGKAP</th>
                                        <th>ASAL SEKOLAH</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>928384523</td>
                                        <td>Edinburgh</td>
                                        <td>SMP UNGGUL SERANG</td>
                                        <td>
                                            <a href="#" class="btn btn-danger waves-effect waves-light">Reset</a>
                                            <a href="op-raport-siswa-edit.php" class="btn btn-primary waves-effect waves-light">Edit</a>
                                            <a href="op-raport-siswa-detail.php" class="btn btn-info waves-effect waves-light">Lihat</a>
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <?php include 'op-layouts/footer.php'; ?>