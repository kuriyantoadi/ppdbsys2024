<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


        <div class="row">
            <div class="col-lg-10">
                <div class=" mb-0">
                                    
                    <?= form_open_multipart('Op_tambah_siswa/asal_sekolah_tambah_up') ?>
                    <form>
                        <div class="row justify-content-center mt-0">
                           
                                <h4 class="text-uppercase">Input Asak Sekolah</h4>

                                <?= $this->session->flashdata('msg') ?>
                                                            
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nama Asal Sekolah :</label>
                                    <input type="text" class="form-control" placeholder="" name="asal_sekolah" required>
                                </div>                                                                   
                                
                                <div class="d-flex justify-content-center">
                                    <div class="form-group mt-3">
                                        <input style="" type="submit" class="btn btn-primary mt-4">
                                    </div>
                                </div>
                                
                        </div>
                
                        
                    </form>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <!-- end row -->
