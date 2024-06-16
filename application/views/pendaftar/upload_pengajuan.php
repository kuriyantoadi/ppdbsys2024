<div class="container">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <center><img style="margin-top: 25px;" src="<?= base_url() ?>assets/images/logo-banten.png" />
      </div>
      <div class="col-md-6">
        <center>
          <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
        </center>
        <center>
          <h4><b>Upload Pengajuan Pendaftaran</b></h4>
        </center>
        <center>
          <h4><b>Calon Peserta Didik Baru</b></h4>
        </center>
        <center>
          <h5><b>Tahun Ajaran 2023/2024</b></h4>
        </center>
        <br>
        <!-- font ganti jenis -->
      </div>
      <div class="col-md-3">
        <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="<?= base_url() ?>assets/images/logo-smkn1.png" />
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col">
      <!-- kosong -->
    </div>
    <div class="col-8">
  <?= $this->session->flashdata('msg') ?>
  
    <?= form_open_multipart('index.php/Pendaftar/upload_pengajuan_up'); ?>
    <form class="m-t-40" novalidate>

      <h5>A. IDENTITAS CALON PESERTA DIDIK</h5>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Tanggal Upload :</label>
        <input type="text" class="form-control" name="tgl_upload" value="<?php echo date('d-m-Y'); ?>" required readonly>
      </div>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Kompetensi Keahlian :</label>
        <select class="form-control" name="id_kompetensi_1" required>
          <option value="">Pilih</option>
          <?php foreach ($tampil_1 as $row) { ?>
          <option value="<?= $row->id_kompetensi_1 ?>"><?= $row->nama_kompetensi_1 ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Kompetensi Keahlian Ke-2 :</label>
        <select class="form-control" name="id_kompetensi_2" required>
          <option value="">Pilih</option>
          <?php foreach ($tampil_2 as $row) { ?>
          <option value="<?= $row->id_kompetensi_2 ?>"><?= $row->nama_kompetensi_2 ?></option>
          <?php } ?>
        </select>
      </div>

      
      <div class="form-group">
        <label class="control-label mt-3" for="email">Kode Verifikasi :</label>
        <input type="number" class="form-control" placeholder="Nomor Pendaftaran" name="no_pendaftaran" required>
        <p>Dari Pengajuan Pendaftaran</p>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">NISN :</label>
        <input type="number" class="form-control" placeholder="NISN Siswa" name="nisn_siswa" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Nama Calon Peserta Didik :</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" required>
      </div>

       <div class="form-group">
        <label class="control-label mt-3" for="email">Sekolah Asal :</label>
        <input type="text" class="form-control" placeholder="Sekolah Asal" name="asal_sekolah" id="asal_sekolah" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Tempat Lahir :</label>
        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Tanggal Lahir :</label>
        <input type="date" name="tgl_lahir" class="form-control datepicker" required />
        (Tanggal/Bulan/Tahun)
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Nomor WhatsApp Siswa :</label>
        <input type="number" class="form-control" name="no_wa_siswa" placeholder="Nomor WhatsApp" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Alamat :</label>
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Nama Orang Tua/Wali :</label>
        <input type="text" class="form-control" placeholder="Nama Orang Tua" name="nama_org_tua" required>
      </div>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Nomor WhatsApp Orang Tua :</label>
        <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_wa_org_tua" required>
      </div>
      
      <!-- File Upload -->

      <h5 class="mt-lg-5">B. Upload Bukti Pengajuan Pendaftaran</h5>
      <div class="form-group">
        <b class="control-label mt-3">Bukti Pengajuan Pendaftaran</b>
        <div class="col-sm-6">
          <input type="file" name="pdf_pengajuan_pendaftaran" accept="application/pdf" class="form-control-file" id="" required>
          <p>Tidak Boleh Kosong, ukuran maksimal  1 MB, format pdf</p>
          
          <h6>Kode Keamanan</h6>
          <?= $image; ?>
          <input type="text" name="captcha" class="form-control" id="" required>
        </div>
      </div>
      
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

    </div>
    <?= form_close() ?>
    </form>


    <div class="col">
      <!-- kosong -->
    </div>

  </div>

</div> <!-- container -->