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
                            <h4 class="card-title">Dashboard Siswa Mendaftar</h4>
                        </div>
                        <div class="card-body">
                        
                        
                        <div class="row">
                            
                            <div class="col-12">

                            <?=
                            form_open('Op_tambah_siswa/siswa_edit_up');
                            foreach ($tampil as $row) {

                            ?>
                            <form class="m-t-40" novalidate>

                            <h5>A. IDENTITAS CALON PESERTA DIDIK</h5>
                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Tanggal Upload :</label>
                                <input type="text" class="form-control" name="tgl_upload" value="<?php echo date('d-m-Y'); ?>" required readonly>
                                <input type="hidden" value="<?= $row->id_siswa ?>" name="id_siswa">
                            </div>
                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Kompetensi Keahlian :</label>
                                
                                <select class="form-control" name="id_kompetensi_1" required>
                                <option value="<?= $row->id_kompetensi_1 ?>">Pilihan Sebelumnya (<?= $row->nama_kompetensi_1 ?>)</option>                                                            
                                <?php foreach ($tampil_1 as $row_1) { ?>
                                <option value="<?= $row_1->id_kompetensi_1 ?>"><?= $row_1->nama_kompetensi_1 ?></option>
                                
                                <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Kompetensi Keahlian Ke-2 :</label>
                                <select class="form-control" name="id_kompetensi_2" required>
                                <option value="<?= $row->id_kompetensi_2 ?>">Pilihan Sebelumnya (<?= $row->nama_kompetensi_2 ?>)</option>
                                <?php foreach ($tampil_2 as $row_2) { ?>
                                <option value="<?= $row_2->id_kompetensi_2 ?>"><?= $row_2->nama_kompetensi_2 ?></option>
                                <?php } ?>
                                </select>
                            </div>                                                    

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">NISN :</label>
                                <input type="number" class="form-control" placeholder="NISN Siswa" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nama Calon Peserta Didik :</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" value="<?= $row->nama_siswa ?>" required>
                            </div>

                             <div class="form-group mt-3">
                                <label class="control-label" for="email">Nama Sekolah Asal :</label>
                                <select class="form-select" name="asal_sekolah" required>
                                    <?php foreach ($tampil as $row) { ?>
                                        <option value="<?= $row->asal_sekolah ?>">Pilihan Awal = <?= $row->asal_sekolah ?></option>
                                    <?php } ?>

                                    <?php foreach ($tampil_asal_sekolah as $row_1) { ?>
                                        <option value="<?= $row_1->row_asal_sekolah ?>">Pilihan Awal = <?= $row_1->asal_sekolah ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nomor WhatsApp Siswa :</label>
                                <input type="number" class="form-control" name="no_wa_siswa" placeholder="Nomor WhatsApp" value="<?= $row->no_wa_siswa ?>" required>
                            </div>                                                       

                           
                            <div class="d-flex justify-content-center">
                                <div class="form-group mt-3">
                                    <input style="" type="submit" class="btn btn-primary mt-4">
                                </div>
                            </div>
 
                            <?=  form_close();
                            }
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
