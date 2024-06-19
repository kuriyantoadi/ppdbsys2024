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
                            <h4 class="card-title">Edit Asal Sekolah</h4>
                        </div>
                        <div class="card-body">
                        
                        
                        <div class="row">
                            
                            <div class="col-12">

                            <?=
                            form_open('Op_tambah_siswa/asal_sekolah_edit_up');

                            ?>
                            <form class="m-t-40" novalidate>

                            <h5>A. DATA ASAL SEKOLAH</h5>  
                            <?= 
                            form_open('Op_tambah_siswa/asal_sekolah_edit_up');
                            foreach ($tampil as $row) {
                            ?>                                                                   

                             <div class="form-group mt-3">
                                <label class="control-label" for="email">Nama Sekolah Asal :</label>
                                <input type="hidden" name="id_asal_sekolah" value="<?= $row->id_asal_sekolah ?>">
                                <input type="text" name="asal_sekolah" value="<?= $row->asal_sekolah ?>" class="form-control">
                            </div>                                                                            
                           
                            <div class="d-flex justify-content-center">
                                <div class="form-group mt-3">
                                    <input style="" type="submit" class="btn btn-primary mt-4">
                                </div>
                            </div>
 
                            <?php } ?>
                            <?=  form_close();
                            
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
