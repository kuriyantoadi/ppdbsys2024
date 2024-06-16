
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPDB SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container">
  <!-- <div id="image_watermark"> -->
    <center><img style="margin-bottom: 0px; margin-top:  10px; margin-left: 0px" height="150px" src="<?= base_url() ?>/assets/file/header-bukti-diterima.png" /><center>

      <h3><b>SURAT KETERANGAN</b></h3>
      <p>Nomor : 442/0970/SMKN 1/2023</p>
      <p style="margin-top: 10px; margin-bottom: 10px">Tentang :</p>
      <p style="margin-bottom: 20px"><b>PENGUMUMAN HASIL SELEKSI
      <br>PENERIMAAN PESERTA DIDIK BARU (PPBD)
      <br>SMK NEGERI 1 KRAGILAN TAHUN PELAJARAN 2021/2022</b></p>

    <?php foreach ($tampil as $row) { ?>

      <table >
        <tr>
          <td colspan="2">Kepala SMK Negeri 1 Kragilan Kabupaten Serang menyatakan bahwa ;</td>
        </tr>
        <tr>
          <td width="150px">Nama</td>
          <td>: <?= $row->nama_siswa ?></td>
        </tr>
        <tr>
          <td>NISN</td>
          <td>: <?= $row->nisn_siswa ?></td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>: <?= $row->asal_sekolah ?></td>
        </tr>

      </table>
      <p style="margin-top: 20px">Berdasarkan hasil rapat pleno panitia PPDB SMK Negeri 1 Kragilan tanggal 29 Juni 2021,
        dengan memperhatikan Nilai Raport dan Tes Bakat dan Minat/Uji Kompetensi, maka siswa tersebut dinyatakan:</p>

      <table border="1">
        <tr>
          <td colspan="2"><center>
            <h3><b>DITERIMA</b></h3>
          </center>
          </td>
        </tr>

        <tr>
            <td>Pada Kompetensi Keahlian</td>
            <td>: <b><?= $row->kompetensi_keahlian ?></b></td>
        </tr>

      </table>



<!-- tanda tanggan kepala sekolah -->
    <img height="130px" align="right" src="../assets/images/ttd-kepsek.png" style="margin-right:  80px;"/>

  <?php if ($d['kondisi'] == "DITERIMA") { ?>
    <p style="text-align: justify; margin-top: 150px">
      *)  Catatan :
      <ol style="text-align: justify;">
        <li>Daftar Ulang tanggal 1 s.d 9 Juli 2021,
          <br>(Siswa yang tidak mendaftar ulang dianggap mengundurkan diri);</li>
        <li>Berkas Daftar ulang terdiri dari Surat Keterangan Diterima, Pakta Integritas Siswa, Bukti Upload Berkas dan Form Dapodik dimenu <b>Daftar Ulang</b>. Berkas dimasukkan pada map snelhekter plastik sesuai warna kompetensi keahlian</li>
        <li>Siswa yang diterima, wajib mengikuti kegiatan MPLS, pada tanggal 12 s.d 14 Juli 2021.</li>
      </ol>
    </p>
    <img height="70px" align="right" src="../assets/images/smk-bisa.png" style="float: left;"/>

  <?php }else{ ?>

  <img height="70px" align="right" src="../assets/images/smk-bisa.png" style="float: left; margin-top: 150px"/>

  <?php } ?>

  <?php } ?>
</div>


<script>
    window.print();
  </script>


  </body>
</html>