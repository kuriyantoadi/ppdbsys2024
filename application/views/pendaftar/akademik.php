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
          <h4><b>Seleksi Akademik</b></h4>
        </center>
        <center>
          <h5><b>Tahun Ajaran 2023/2024</b></h4>
        </center>
        <br>
        <!-- font ganti jenis -->
      </div>
      <div class="col-md-3">
        <center><img style="margin-top:  25px;" class="img-fluid" src="<?= base_url() ?>assets/images/logo-smkn1.png" />
      </div>
    </div>
  </div>


  <div class="row">
    <div class="row g-4 mb-3">
      
      <div class="col-12 ">
          <?= $this->session->flashdata('msg') ?>
          <br><div class="btn-group" role="group" aria-label="Basic example">
              <a href="<?= site_url('index.php/pendaftar/aka_semua') ?>" type="button" class="btn btn-info btn-sm">Semua Jurusan</a>
              <a href="<?= site_url('index.php/pendaftar/aka_akl') ?>" type="button" class="btn btn-info btn-sm">AKL</a>
              <a href="<?= site_url('index.php/pendaftar/aka_mplb') ?>" type="button" class="btn btn-info btn-sm">MPLB</a>
              <a href="<?= site_url('index.php/pendaftar/aka_tjkt') ?>" type="button" class="btn btn-info btn-sm">TJKT</a>
              <a href="<?= site_url('index.php/pendaftar/aka_pplg') ?>" type="button" class="btn btn-info btn-sm">PPLG</a>
              <a href="<?= site_url('index.php/pendaftar/aka_to') ?>" type="button" class="btn btn-info btn-sm">TO</a>
              <a href="<?= site_url('index.php/pendaftar/aka_tm') ?>" type="button" class="btn btn-info btn-sm">TM</a>
          </div>
      </div><!-- end col -->
    </div><!-- end row -->
  
    <div class="col-12">
      <!-- <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100"> -->
      <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
      <thead>
          <tr>
              <th><center>No</th>
              <th><center>Nama Lengkap</th>
              <th><center>Kompetensi Keahlian</th>
              <th><center>Asal Sekolah</th>
              <th><center>Tes Akademik</th>
              <th><center>Tes Wawancara</th>

          </tr>
      </thead>

      <tbody>
          <?php
          $no = 1;
          foreach ($tampil as $row) {
          ?>
          <tr>
              <td><center><?= $no++ ?></td>
              <td><?= $row->nama_siswa ?></td>
              <td><center><?= $row->nama_kompetensi_1 ?></td>
              <td><center><?= $row->asal_sekolah ?></td>
              <td><center>
                <?php if($row->status_tes_akademik == 'Sudah Tes' ){ ?>
                      <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah Tes</a>
                <?php }else{ ?>
                    <a class="btn-secondary btn-sm btn-rounded">Belum Tes</a>
                <?php } ?>
              </td>
              <td><center>
                <?php if($row->status_tes_wawancara == 'Sudah Tes' ){ ?>
                      <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah Tes</a>
                <?php }else{ ?>
                    <a class="btn-secondary btn-sm btn-rounded">Belum Tes</a>
                <?php } ?>
              </td>
    
          </tr>
          <?php } ?>
      </tbody>
      
      </table>

    </div>

    <div class="col">
      <!-- kosong -->
    </div>

  </div>

</div> <!-- container -->