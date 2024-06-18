<div class="my-5 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-0">
                                    
                    <?= form_open_multipart('index.php/Daftar/sekolah_tambah_up') ?>
                    <form>
                        <div class="row justify-content-center mt-0">
                            <div class="col-md-8">
                                <h4 class="text-uppercase">Tambah Data Sekolah</h4>                                                                                                                                                       

                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nama Sekolah Asal :</label>
                                    <input type="text" class="form-control" placeholder="" name="nama_sekolah" required>
                                </div>                                                                       

                                <div class="d-flex justify-content-center">
                                    <div class="form-group mt-3">
                                        <input style="" type="submit" class="btn btn-primary mt-4">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                
                        
                    </form>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end content -->