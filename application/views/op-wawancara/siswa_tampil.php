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
                                    <th><center>Tes Wawancara</th>
                                    <th><center>Opsi</th>
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
                                    <?php if($row->status_tes_wawancara == 'Sudah Tes' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah Tes</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Belum Tes</a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <center>
                                        <!-- <a href="<?= site_url('index.php/Op_wawancara/siswa_detail/'.$row->id_siswa) ?>" class="btn btn-sm btn-primary">Detail</a> -->
                                        <a href="<?= site_url('index.php/Op_wawancara/wawancara_sudah/'.$row->id_siswa) ?>"  class="btn btn-sm btn-success"
                                        onclick="return confirm('Anda yakin Siswa Tersebut <b>Sudah Tes</b> Wawancara <?= $row->nama_siswa ?> ?')">Sudah</a>

                                        <a href="<?= site_url('index.php/Op_wawancara/wawancara_belum/'.$row->id_siswa) ?>" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Anda yakin Siswa Tersebut <b>Belum Tes</b> Wawancara <?= $row->nama_siswa ?> ?')">Belum</a> 
                                    </div>
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
