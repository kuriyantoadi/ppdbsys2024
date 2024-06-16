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
                            form_open('index.php/Admin/siswa_edit_up');
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
                                <label class="control-label mt-3" for="email">Nomor Pendaftaran :</label>
                                <input type="number" class="form-control" placeholder="Nomor Pendaftaran" name="no_pendaftaran" value="<?= $row->no_pendaftaran ?>" required>
                                <p>Dari Pengajuan Pendaftaran</p>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">NISN :</label>
                                <input type="number" class="form-control" placeholder="NISN Siswa" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nama Calon Peserta Didik :</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" value="<?= $row->nama_siswa ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Sekolah Asal :</label>
                                <input type="text" class="form-control" placeholder="Sekolah Asal" name="asal_sekolah" value="<?= $row->asal_sekolah ?>" id="asal_sekolah" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Tempat Lahir :</label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= $row->tempat_lahir ?>"  required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Tanggal Lahir :</label>
                                <input type="date" name="tgl_lahir" class="form-control datepicker" value="<?= $row->tgl_lahir ?>" required />
                                (Tanggal/Bulan/Tahun)
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nomor WhatsApp Siswa :</label>
                                <input type="number" class="form-control" name="no_wa_siswa" placeholder="Nomor WhatsApp" value="<?= $row->no_wa_siswa ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Alamat :</label>
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $row->alamat ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nama Orang Tua/Wali :</label>
                                <input type="text" class="form-control" placeholder="Nama Orang Tua" name="nama_org_tua" value="<?= $row->nama_org_tua ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nomor WhatsApp Orang Tua :</label>
                                <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_wa_org_tua" value="<?= $row->no_wa_org_tua ?>" required>
                            </div>
                            
                            <!-- File Upload -->
                            

                            <center>
                                <div class="form-group align-text-bottom mt-lg-4" style="margin-bottom: 60px;">
                                <b class="control-label mt-6">Data dan Berkas Sudah Sesuai?</b>
                                <div class="col-sm-6 mt-lg-2 md-lg-2">
                                    <select class="form-control" name="cek_submit" id="" require>
                                    <option value="">Belum Sesuai</option>
                                    <option value="Sesuai">Sesuai</option>
                                    </select>
                                </div>

                                <button type="submit" name="upload" value="upload" class="btn btn-primary mb-lg-4 mt-lg-4">Submit</button>
                                </div>
                            </center>
                            <?= 
                            form_close();
                            }
                            ?>
                            </form>
                           
                             <!-- kosong -->
                                <h5 class="mt-lg-5">B. Upload Bukti Pengajuan Pendaftaran</h5>
                                 <?= form_open_multipart('index.php/Pendaftar/upload_pengajuan_up');  ?>
                                    <form>
                                    <div class="form-group">
                                        <b class="control-label mt-3">Bukti Pengajuan Pendaftaran</b>
                                        <div class="col-sm-6">
                                        <input type="file" name="pdf_pengajuan_pendaftaran" accept="application/pdf" class="form-control-file" id="" required>
                                        <p>Tidak Boleh Kosong, ukuran maksimal  1 MB, format pdf</p>
                                        </div>
                                        <input type="submit" value="update" class="btn btn-primary btn-sm">
                                    </div>
                                <?= form_close() ?>
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
