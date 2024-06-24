<!-- <?php include 'admin-layouts/header.php'; ?> -->

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
                        <h4 class="mb-sm-0 font-size-18">Data Tes Wawancara</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">  
                        <div class="card-body">
                        <?= $this->session->flashdata('msg') ?>
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th><center>No</th>
                                    <th><center>Nama Lengkap</th>
                                    <th><center>Kompetensi</th>
                                    <th><center>Asal Sekolah</th>
                                    <th><center>Status Tes</th>
                                    <th><center>Rekomendasi</th>
                                    <th><center>Verifikasi Test</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tampil as $row) {
                                ?>
                                <tr>
                                    <td><center><?= $no++ ?></td>
                                    <td><?= $row->nama_siswa ?></td>
                                    <td><center><?= $row->short_kompetensi_1 ?></td>
                                    <td><center><?= $row->asal_sekolah ?></td>
                                    <td><center>
                                        <?php if($row->status_tes_akademik == 'Sudah Tes' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah Tes Akademik</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Belum Tes Akademik</a>
                                        <?php } ?>
                                        <br>

                                        <?php if($row->status_tes_khusus == 'Sudah Tes' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah Tes Khusus</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Belum Tes Khusus</a>
                                        <?php } ?>

                                        <br>

                                        <?php if($row->status_tes_wawancara == 'Sudah Tes' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah Tes Wawancara</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Belum Tes Wawancara</a>
                                        <?php } ?>

                                        <br>
                                        
                                    </td>

                                    <td><center>
                                        <?php if($row->rekomendasi_tes_khusus == 'Rekomendasi' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Rekomendasi Tes Khusus</a>
                                        <?php }elseif($row->rekomendasi_tes_khusus == 'Tidak Rekomendasi'){ ?>
                                            <a class="btn-danger btn-sm btn-rounded">Tidak Rekomendasi Tes Khusus</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Belum Tes Khusus</a>
                                        <?php } ?>
                                        <br>

                                        <?php if($row->rekomendasi_tes_wawancara == 'Rekomendasi' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Rekomendasi Wawancara</a>
                                        <?php }elseif($row->rekomendasi_tes_wawancara == 'Tidak Rekomendasi'){ ?>
                                            <a class="btn-danger btn-sm btn-rounded">Tidak Rekomendasi Wawancara</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Belum Tes Wawancara</a>
                                        <?php } ?>
                                        <br>
                                        
                                    </td>
                                   
                                    <td>                                       
                                        <center>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Akademik <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">                                          
                                                <a class="dropdown-item" href="<?= site_url('Op_wawancara_full/akademik_sudah/'.$row->id_siswa) ?>">Sudah Tes Akademik</a>
                                                <a class="dropdown-item" href="<?= site_url('Op_wawancara_full/akademik_belum/'.$row->id_siswa) ?>">Belum Tes Akademik</a>
                                            </div>
                                        </div>

                                        <a href="<?= site_url('Op_wawancara_full/siswa_detail_tes_khusus/'.$row->id_siswa) ?>" class="btn btn-sm btn-primary">Tes Khusus</a>
                                        <a href="<?= site_url('Op_wawancara_full/siswa_detail_tes_wawancara/'.$row->id_siswa) ?>" class="btn btn-sm btn-primary">Tes Wawancara</a>
                                        </center>
                                    </td>                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                            
                            </table>
                                                

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
