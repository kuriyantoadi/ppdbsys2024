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

                        <div class="row g-4 mb-2">

                            <div class="col-md-6 ">
                             <br><?= $this->session->flashdata('msg') ?>
                               <!-- <a href="<?= site_url('index.php/Admin/siswa_tambah') ?>" type="button" class="btn btn-info btn-sm mb-1">Tambah</a> -->
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?= site_url('index.php/Admin/wan_semua') ?>" type="button" class="btn btn-primary btn-sm">Semua Jurusan</a>
                                    <a href="<?= site_url('index.php/Admin/wan_akl') ?>" type="button" class="btn btn-primary btn-sm">AKL</a>
                                    <a href="<?= site_url('index.php/Admin/wan_mplb') ?>" type="button" class="btn btn-primary btn-sm">MPLB</a>
                                    <a href="<?= site_url('index.php/Admin/wan_tjkt') ?>" type="button" class="btn btn-primary btn-sm">TJKT</a>
                                    <a href="<?= site_url('index.php/Admin/wan_pplg') ?>" type="button" class="btn btn-primary btn-sm">PPLG</a>
                                    <a href="<?= site_url('index.php/Admin/wan_to') ?>" type="button" class="btn btn-primary btn-sm">TO</a>
                                    <a href="<?= site_url('index.php/Admin/wan_tm') ?>" type="button" class="btn btn-primary btn-sm">TM</a>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th><center>No</th>
                                    <th><center>Nama Lengkap</th>
                                    <th><center>Kompetensi</th>
                                    <th><center>Asal Sekolah</th>
                                    <th><center>Seleksi Administrasi</th>
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
                                    <?php if($row->status_tes_wawancara == 'Selesai' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Selesai</a>
                                        <?php }elseif($row->status_tes_wawancara == 'Belum'){ ?>
                                             <a class="btn-danger waves-effect waves-light btn-sm btn-sm btn-rounded">Belum</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Kosong</a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <center>
                                        <div class="btn-group" role="group">
                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                            <a class="dropdown-item" href="<?= site_url('index.php/Admin/siswa_detail/'.$row->id_siswa) ?>">Detail</a>
                                            <a class="dropdown-item" href="<?= site_url('index.php/Admin/wan_belum/'.$row->id_siswa) ?>">Belum Wawancara</a>
                                            <a class="dropdown-item" href="<?= site_url('index.php/Admin/wan_selesai/'.$row->id_siswa) ?>">Selesai Wawancara</a>
                                        </div>
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
