<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Data User</h4>
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
                                <?= $this->session->flashdata('msg') ?>
                               <a href="<?= site_url('index.php/Admin/user_tambah') ?>" type="button" class="btn btn-info btn-sm mb-1">Tambah</a>
                                
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th><center>No</th>
                                    <th><center>Username</th>
                                    <th><center>Status</th>
                                    <th><center>Kompetensi</th>
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
                                    <td><?= $row->username ?></td>
                                    <td><center><?= $row->status ?></td>
                                    <td><center><?= $row->status_kompetensi ?></td>
                                    
                                    <td><center>
                                        <a type="button" class="btn btn-danger waves-effect waves-light btn-sm" title="hapus"
                                        href="<?= site_url('index.php/Admin/user_hapus/'.$row->id_user) ?>" onclick="return confirm('Anda yakin menghapus data siswa <?= $row->username ?> ?')">
                                          <i class="bx bx-trash"></i>
                                        </a>
                                        <a type="button" class="btn btn-primary waves-effect waves-light btn-sm" title="Edit"
                                        href="<?= site_url('index.php/Admin/user_edit/'.$row->id_user) ?>">
                                          <i class="bx bx-pencil"></i>
                                        </a>
                                        <a type="button" class="btn btn-info waves-effect waves-light btn-sm" title="Lihat"
                                        href="<?= site_url('index.php/Admin/user_detail/'.$row->id_user) ?>" >
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
