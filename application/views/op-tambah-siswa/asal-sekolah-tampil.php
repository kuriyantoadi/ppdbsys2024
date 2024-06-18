<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Data Sekolah SMP</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">  
                        <div class="card-body">
                        
                        <a href="<?= base_url() ?>Op_tambah_siswa/asal_sekolah_tambah" class="btn btn-sm btn-primary mb-2">Tambah Asal Sekolah</a>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th><center>No</th>
                                    <th><center>Asal Sekolah</th>                                  
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
                                    <td><?= $row->asal_sekolah ?></td>                                                                   
                                    
                                    <td><center>
                                        <a type="button" class="btn btn-danger waves-effect waves-light btn-sm" title="hapus"
                                        href="<?= site_url('index.php/Op_tambah_siswa/asal_sekolah_hapus/'.$row->id_asal_sekolah) ?>" onclick="return confirm('Anda yakin menghapus data siswa <?= $row->asal_sekolah ?> ?')">
                                          <i class="bx bx-trash"></i>
                                        </a>
                                        <a type="button" class="btn btn-primary waves-effect waves-light btn-sm" title="Edit"
                                        href="<?= site_url('index.php/Op_tambah_siswa/asal_sekolah_edit/'.$row->id_asal_sekolah) ?>">
                                          <i class="bx bx-pencil"></i>
                                        </a>
                                        <a type="button" class="btn btn-info waves-effect waves-light btn-sm" title="Lihat"
                                        href="<?= site_url('index.php/Op_tambah_siswa/asal_sekolah_detail/'.$row->id_asal_sekolah) ?>" >
                                          <i class="bx bx-search"></i>
                                        </a>
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
