<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


        <div class="row">
            <div class="col-lg-10">
                <div class=" mb-0">
                                    
                    <?= form_open_multipart('index.php/Daftar/daftar_up') ?>
                    <form>
                        <div class="row justify-content-center mt-0">
                           
                                <h4 class="text-uppercase">Input data PPDB Prov ke PPDBSYS</h4>

                                <?= $this->session->flashdata('msg') ?>
                                
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Kompetensi Keahlian :</label>
                                    <select class="form-select" name="id_kompetensi_1" required>
                                        <option value="">Pilih</option>
                                         <?php foreach ($tampil_kompetensi_1 as $row) { ?>
                                            <option value="<?= $row->id_kompetensi_1 ?>"><?= $row->nama_kompetensi_1 ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Kompetensi Keahlian Ke-2 :</label>
                                    <select class="form-select" name="id_kompetensi_2" required>
                                        <option value="">Pilih</option>
                                        <?php foreach ($tampil_kompetensi_2 as $row) { ?>
                                            <option value="<?= $row->id_kompetensi_2 ?>"><?= $row->nama_kompetensi_2 ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nama Sekolah Asal :</label>
                                    <select class="form-select" name="asal_sekolah" required>
                                        <option value="">Pilih</option>
                                        <?php foreach ($tampil as $row) { ?>
                                            <option value="<?= $row->nama_sekolah ?>"><?= $row->nama_sekolah ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">NISN :</label>
                                    <input type="number" class="form-control" placeholder="NISN" name="nisn_siswa" required>
                                </div>
    
                               
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nama Calon Peserta Didik :</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" required>
                                </div>                                                                   
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nomor WhatsApp :</label>
                                    <input type="number" class="form-control" name="no_wa_siswa" placeholder="Nomor WhatsApp" required>
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
