
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
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Siswa</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dashboard Siswa</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <!-- <div class="row justify-content-center"> -->

                                <div class="row justify-content-right">
                                    <div class="col-xl-10">
                                        <div class="timeline">
                                            <div class="timeline-container">
                                                <div class="timeline-end">
                                                    <p>Start</p>
                                                </div>

                                                
                                                <div class="timeline-continue">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($tampil as $row) {
                                                    ?>
                                                    <div class="row timeline-right">
                                                        <div class="col-md-6">
                                                            <!-- <div class="timeline-icon">
                                                                <i class="bx bx-briefcase-alt-2 text-primary h2 mb-0"></i>
                                                            </div> -->
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="timeline-box">
                                                                <div class="timeline-date bg-primary text-center rounded">
                                                                    <h3 class="text-white mb-0"><?= $row->tgl_timeline ?></h3>
                                                                    <p class="mb-0 text-white-50"><?= $row->bln_timeline ?></p>
                                                                </div>
                                                                <div class="event-content">
                                                                    <div class="timeline-text">
                                                                        <h3 class="font-size-18"><?= $row->judul_timeline ?></h3>
                                                                        <p class="mb-0 mt-2 pt-1 text-muted"><?= $row->isi_timeline ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   
                                                    </div>   
                                                 <?php } ?>
                                         
                                                </div>
                                                <div class="timeline-start">
                                                    <p>End</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->