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
                        <h4 class="mb-sm-0 font-size-18">Data Verifikasi</h4>
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
                                    <a href="<?= site_url('index.php/Admin/ver_semua') ?>" type="button" class="btn btn-primary btn-sm">Semua Jurusan</a>
                                    <a href="<?= site_url('index.php/Admin/ver_akl') ?>" type="button" class="btn btn-primary btn-sm">AKL</a>
                                    <a href="<?= site_url('index.php/Admin/ver_mplb') ?>" type="button" class="btn btn-primary btn-sm">MPLB</a>
                                    <a href="<?= site_url('index.php/Admin/ver_tjkt') ?>" type="button" class="btn btn-primary btn-sm">TJKT</a>
                                    <a href="<?= site_url('index.php/Admin/ver_pplg') ?>" type="button" class="btn btn-primary btn-sm">PPLG</a>
                                    <a href="<?= site_url('index.php/Admin/ver_to') ?>" type="button" class="btn btn-primary btn-sm">TO</a>
                                    <a href="<?= site_url('index.php/Admin/ver_tm') ?>" type="button" class="btn btn-primary btn-sm">TM</a>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th><center>No</th>
                                    <th><center>Tgl Upload</th>
                                    <th><center>Nama Lengkap</th>
                                    <th><center>Asal Sekolah</th>
                                    <th><center>Kompetensi</th>
                                    <th><center>Verifikasi</th>
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
                                    <td><center><?= $row->tgl_upload ?></td>
                                    <td><?= $row->nama_siswa ?></td>
                                    <td><center><?= $row->asal_sekolah ?></td>
                                    <td><center><?= $row->short_kompetensi_1 ?></td>
                                    <td><center>
                                    <?php if($row->status_verifikasi == 'Data Sesuai' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sesuai</a>
                                        <?php }elseif($row->status_verifikasi == 'Proses'){ ?>
                                             <a class="btn-info waves-effect waves-light btn-sm btn-sm btn-rounded">Proses</a>
                                        <?php }elseif($row->status_verifikasi == 'Tidak Sesuai'){ ?>
                                            <a class="btn-danger waves-effect waves-light btn-sm btn-sm btn-rounded">Tidak Sesuai</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Menunggu</a>
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
                                                <a class="dropdown-item" href="<?= site_url('index.php/Admin/note_verifikasi/'.$row->id_siswa) ?>">Catatan</a>
                                                <a class="dropdown-item" href="<?= site_url('index.php/Admin/ver_tidak_sesuai/'.$row->id_siswa) ?>">Tidak Sesuai</a>
                                                <a class="dropdown-item" href="<?= site_url('index.php/Admin/ver_proses/'.$row->id_siswa) ?>">Proses</a>
                                                <a class="dropdown-item" href="<?= site_url('index.php/Admin/ver_data_sesuai/'.$row->id_siswa) ?>">Data Sesuai</a>
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
