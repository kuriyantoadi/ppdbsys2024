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
          <h4><b>Formulir Pendaftaran</b></h4>
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

  <br><?= $this->session->flashdata('msg') ?>


  <div class="row">
    <div class="col">
      <!-- kosong -->
    </div>
    <div class="col-8">

    <?= form_open_multipart('index.php/Daftar/daftar_up') ?>

    <form>

      <h5>A. IDENTITAS CALON PESERTA DIDIK</h5>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Tanggal Pendaftaran :</label>
        <input type="text" class="form-control" name="tgl_upload" value="<?php echo date('d-m-Y'); ?>" required readonly>
      </div>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Kompetensi Keahlian :</label>
        <select class="form-control" name="kompetensi_keahlian" required>
          <option value="">Pilih</option>
          <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
          <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
          <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
          <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
          <option value="Teknik Pemesinan">Teknik Pemesinan</option>
        </select>
      </div>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Kompetensi Keahlian Ke-2 :</label>
        <select class="form-control" name="kompetensi_keahlian_2" required>
          <option value="">Pilih</option>
          <option value="tidak memilih">Hanya 1 Kompetensi Keahlian</option>
          <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
          <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
          <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
          <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
          <option value="Teknik Pemesinan">Teknik Pemesinan</option>
        </select>
      </div>


      <div class="form-group">
        <label class="control-label mt-3" for="email">NISN :</label>
        <input type="number" class="form-control" placeholder="NISN" name="nisn_siswa" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Nama Sekolah Asal :</label>
        <input type="text" class="form-control" placeholder="Nama Sekolah Asal" name="asal_sekolah" id="asal_sekolah" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Nama Calon Peserta Didik :</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Jenis Kelamin :</label>
        <select name="jenis_kelamin" class="form-control" required>
          <option value="">Pilih</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Tempat Lahir :</label>
        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Tanggal Lahir :</label>
        <table class="table mt-md-3">
												<tr>
													<td>
														<label for="inputLastName" class="form-label">Tgl Lahir</label>
														<select name="tgl_lahir" class="form-select" id="inputSelectCountry" aria-label="Default select" required>
															<?php for ($x = 1; $x <= 31; $x++) { ?>
																<option value="<?= $x ?>"><?= $x ?></option>
															<?php } ?>
														</select>	
													</td>
													<td>
														<label for="inputEmailAddress" class="form-label">Bulan</label>
														<select name="bln_lahir" class="form-select" id="inputSelectCountry" aria-label="Default select example" required>
															<option value="">Pilihan</option>
															<option value="Januari">Januari</option>
															<option value="Pebuari">Pebuari</option>
															<option value="Maret">Maret</option>
															<option value="Maret">April</option>
															<option value="Mei">Mei</option>
															<option value="Juni">Juni</option>
															<option value="Juli">Juli</option>
															<option value="Agustus">Agustus</option>
															<option value="September">September</option>
															<option value="Oktober">Oktober</option>
															<option value="November">November</option>
															<option value="Desember">Desember</option>
														</select>
													</td>
													<td>
														<label for="inputLastName" class="form-label">Tahun</label>
														<select name="thn_lahir" class="form-select" id="inputSelectCountry" aria-label="Default select example" required>
															<?php for ($x = 2000; $x <= 2023; $x++) { ?>
																<option value="<?= $x ?>"><?= $x ?></option>
															<?php } ?>
														</select>	
													</td>
												</tr>
				  </table>
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Tahun lulus :</label>
        	<select name="tahun_lulus" class="form-select" id="inputSelectCountry" aria-label="Default select example" required>
                <?php for ($x = 2015; $x <= 2023; $x++) { ?>
                  <option value="<?= $x ?>"><?= $x ?></option>
                <?php } ?>
						</select>	
      </div>

      <div class="form-group">
        <label class="control-label mt-3" for="email">Nomor WhatsApp :</label>
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
        <label class="control-label mt-3" for="email">Nomor Hp Orang Tua/Wali :</label>
        <input type="number" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_wa_org_tua" required>
      </div>

      <!-- Nilai Raport Awal -->
      <h5 class="mt-lg-5">B. Nilai Rata-rata Raport (Semester 1-5)</h5>


      <h5 class="mt-lg-1">B.1 Nilai Rapor Semester 1</h5>

      <div class="form-group">
        <b class="control-label mt-1">Agama </b>(Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu)
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 1 Agama" name="sm_1_agama" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>
      <div class="form-group">
        <b class="control-label mt-1">Bahasa Indonesia</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 1 Bahasa Indonesia" name="sm_1_bindo" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>

      </div>
      <div class="form-group">
        <b class="control-label mt-1">Matematika</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 1 Matematik" name="sm_1_mtk" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>
      <div class="form-group">
        <b class="control-label mt-1">IPA</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 1 IPA" name="sm_1_ipa" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>
      <div class="form-group">
        <b class="control-label mt-1">Bahasa Inggris</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 1 Bahasa Inggris" name="sm_1_bing" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <h5 class="mt-lg-5">B.2 Nilai Rapor Semester 2</h5>

      <div class="form-group">
        <b class="control-label mt-1">Agama </b>(Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu)
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 2 Agama" name="sm_2_agama" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-1">Bahasa Indonesia</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 2 Bahasa Indonesia" name="sm_2_bindo" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-1">Matematika</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 2 Matematik" name="sm_2_mtk" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-1">IPA</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 2 IPA" name="sm_2_ipa" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-1">Bahasa Inggris</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 2 Bahasa Inggris" name="sm_2_bing" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <h5 class="mt-lg-5">B.3 Nilai Rapor Semester 3</h5>

      <div class="form-group">
        <b class="control-label mt-1">Agama </b>(Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu)
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 3 Agama" name="sm_3_agama" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Bahasa Indonesia</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 3 Bahasa Indonesia" name="sm_3_bindo" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Matematika</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 3 Matematik" name="sm_3_mtk" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">IPA</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 3 IPA" name="sm_3_ipa" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Bahasa Inggris</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 3 Bahasa Inggris" name="sm_3_bing" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <h5 class="mt-lg-5">B.4 Nilai Rapor Semester 4</h5>

      <div class="form-group">
        <b class="control-label mt-1">Agama </b>(Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu)
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 4 Agama" name="sm_4_agama" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Bahasa Indonesia</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 4 Bahasa Indonesia" name="sm_4_bindo" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Matematika</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 4 Matematik" name="sm_4_mtk" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">IPA</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 4 IPA" name="sm_4_ipa" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Bahasa Inggris</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 4 Bahasa Inggris" name="sm_4_bing" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <h5 class="mt-lg-5">B.5 Nilai Rapor Semester 5</h5>

      <div class="form-group">
        <b class="control-label mt-1">Agama </b>(Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu)
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 5 Agama" name="sm_5_agama" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Bahasa Indonesia</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 5 Bahasa Indonesia" name="sm_5_bindo" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Matematika</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 5 Matematik" name="sm_5_mtk" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">IPA</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 5 IPA" name="sm_5_ipa" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>
      <div class="form-group">
        <b class="control-label mt-3">Bahasa Inggris</b>
        <div class="col-sm-3">
          <input type="number" class="form-control" placeholder="Semester 5 Bahasa Inggris" name="sm_5_bing" required>
        </div>
        <p>Nilai Rata-Rata (Pengetahuan + Keterampilan)</p>
      </div>

      <!-- Nilai Raport akhir -->


      <!-- File Upload -->

      <h5 class="mt-lg-5">C. Upload Scan Berkas</h5>
      <div class="form-group">
        <b class="control-label mt-3">SKHUN atau Surat Keterangan Lulus</b>
        <div class="col-sm-6">
          <input type="file" name="file_skl" accept="application/pdf" class="form-control-file" id="cek_skhu" required>
          <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
        </div>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Rapor Semester 1</b>
        <div class="col-sm-6">
          <input type="file" name="file_raport_1" accept="application/pdf" class="form-control-file" required>
          <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
        </div>
      </div>

      <div class="form-group">
        <b class="control-label mt-3">Rapor Semester 2 </b>
        <div class="col-sm-6">
          <input type="file" name="file_raport_2" accept="application/pdf" class="form-control-file" required>
          <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
        </div>
      </div>
      <div class="form-group">
        <b class="control-label mt-3">Rapor Semester 3 </b>
        <div class="col-sm-6">
          <input type="file" name="file_raport_3" accept="application/pdf" class="form-control-file" required>
          <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
        </div>
      </div>
      <div class="form-group">
        <b class="control-label mt-3">Rapor Semester 4 </b>
        <div class="col-sm-6">
          <input type="file" name="file_raport_4" accept="application/pdf" class="form-control-file" required>
          <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
        </div>
      </div>
      <div class="form-group">
        <b class="control-label mt-3">Rapor Semester 5 </b>
        <div class="col-sm-6">
          <input type="file" name="file_raport_5" accept="application/pdf" class="form-control-file" required>
          <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
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

          <input type="submit" class="btn btn-sm btn-primary mt-4"></input>
        </div>
      </center>

    <?= form_close() ?>
</form>
    </div>

    <div class="col">
      <!-- kosong -->
    </div>

  </div>

</div> <!-- container -->