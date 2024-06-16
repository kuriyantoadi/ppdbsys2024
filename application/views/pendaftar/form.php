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
                            <h4 class="card-title">Form Siswa</h4>
                        </div>
                        <div class="card-body">
                        
                        
                        <div class="row">
                            
                            <div class="col-12">

                            <?=
                            form_open('index.php/Daftar_ulang/form_Up');
                            foreach ($tampil as $row) {

                            ?>
                            <form class="m-t-40" novalidate>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">NISN :</label>
                                <input type="number" class="form-control" placeholder="NISN Siswa" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" readonly>
                                <input type="hidden" name="id_siswa_diterima" value="<?= $row->id_siswa_diterima ?>">
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nama Siswa :</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" value="<?= $row->nama_siswa ?>" readonly>
                            </div>

                             <div class="form-group">
                                <label class="control-label mt-3" for="email">Kompetensi Keahlian :</label>
                                <input type="text" class="form-control" placeholder="Kompetensi Keahlian" name="kompetensi_keahlian" value="<?= $row->kompetensi_keahlian ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Sekolah Asal :</label>
                                <input type="text" class="form-control" placeholder="Sekolah Asal" name="asal_sekolah" value="<?= $row->asal_sekolah ?>" id="asal_sekolah" readonly>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Alamat/Kampung/Jalan :</label>
                                <input type="text" class="form-control" placeholder="Alamat" name="kampung_jln" value="<?= $row->kampung_jln ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">RT :</label>
                                <input type="text" class="form-control" placeholder="RT" name="rt" value="<?= $row->rt ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">RW :</label>
                                <input type="text" class="form-control" placeholder="RW" name="rw" value="<?= $row->rw ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Kelurahan :</label>
                                <input type="text" class="form-control" placeholder="kelurahan" name="kelurahan" value="<?= $row->kelurahan ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Kecamatan :</label>
                                <input type="text" class="form-control" placeholder="Kecamatan" name="kec" value="<?= $row->kec ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Kota/Kabupaten :</label>
                                <input type="text" class="form-control" placeholder="kab_kota" name="kab_kota" value="<?= $row->kab_kota ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nomor WhatsApp Siswa :</label>
                                <input type="text" class="form-control" name="no_hp_siswa" placeholder="Nomor WhatsApp" value="<?= $row->no_hp_siswa ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label mt-3" for="email">Nomor WhatsApp Orang Tua :</label>
                                <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_hp_orgtua" value="<?= $row->no_hp_orgtua ?>" required>
                            </div>
                                <!-- <button type="submit" name="upload" value="upload" class="btn btn-primary mb-lg-4 mt-lg-4">Submit</button> -->
                                <input type="submit" class="btn btn-primary mb-lg-4 mt-lg-4">
                                </div>
                            <?= 
                            form_close();
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
