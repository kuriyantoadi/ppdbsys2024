<!-- <?php include 'admin-layouts/header.php'; ?> -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">  
                        
                        <div class="card-header">
                            <h3 class="card-title">Halaman Operator Tes Wawancara</h3>
                            <p>
                                Selamat Datang di System PPDB SMKN 1 Kragilan, anda sedang login pada akun Operator Tes Wawancara. 
                                Akun sangat sensitif, jika ada kesulitan untuk menggunakan akun ini, silahkan hubungi admin.
                            </p>
                            
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">
                                                        Semua Pendaftar Jurusan <?= $ses_kompetensi ?>
                                                    </span>
                                                    <h4 class="mb-1">
                                                        <p><span class="counter-value" data-target="<?= $count ?>"> </span> Siswa
                                                    </p>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col --> 

                                <div class="col-xl-4 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">
                                                        Sudah Wawancara
                                                    </span>
                                                    <h4 class="mb-1">
                                                        <p><span class="counter-value" data-target="<?= $count_wawancara ?>"></span> Siswa</p>
                                                    </h4>
                                                </div>

                                            </div>
                                        
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-4 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Belum Wawancara</span>
                                                    <h4 class="mb-1">
                                                        <p><span class="counter-value" data-target="<?= $count_belum_wawancara ?>"></span> Siswa</p>
                                                    </h4>
                                                </div>

                                            </div>
                                        
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                            </div><!-- end row -->



                        </div>
                            
                        
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
