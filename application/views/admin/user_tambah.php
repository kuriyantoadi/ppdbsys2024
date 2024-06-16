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
                            <h4 class="card-title">Tambah User</h4>
                        </div>
                        <div class="card-body">
                        
                        
                        <div class="row">
                            
                            <div class="col-12">

                            <?=
                            form_open('index.php/Admin/user_tambah_up');

                            ?>
                            <form class="m-t-40" novalidate>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Username :</label>
                                <input type="text" class="form-control" placeholder="" id="UserName" name="username" value="" required>
                                <p>tidak boleh ada spasi</p>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Password :</label>
                                <input type="text" class="form-control" placeholder="" name="password" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Status User :</label>
                                
                                <select class="form-control" name="status" required>
                                <option value="">Pilihan</option>
                                <?php foreach ($status as $row_status) { ?>
                                <option value="<?= $row_status->nama_status ?>"><?= $row_status->nama_status ?></option>
                                
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label mt-3" for="email">User Kompetensi :</label>
                                
                                <select class="form-control" name="status_kompetensi" required>
                                <option value="">Pilihan</option>
                                <?php foreach ($user_kompetensi as $row_kompetensi) { ?>
                                <option value="<?= $row_kompetensi->nama_user_kompetensi ?>"><?= $row_kompetensi->nama_user_kompetensi ?></option>
                                
                                <?php } ?>
                                </select>
                            </div>

                                <input type="submit" name="submit" class="btn btn-primary mb-lg-4 mt-lg-4"></input>
                                </div>
                            </center>
                            <?= 
                            form_close();
                            
                            ?>
                            </form>
                        
                        
                        </div>
                        
                        </div>

                        </div> <!-- container -->
                        
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
