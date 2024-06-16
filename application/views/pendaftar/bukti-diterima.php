
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
      <br>SMK NEGERI 1 KRAGILAN TAHUN AJARAN 2023/2024</b></p>

    <?php foreach ($tampil as $row) { ?>

      <table >
        <tr>
          <td colspan="2">Kepala SMK Negeri 1 Kragilan Kabupaten Serang menyatakan bahwa ;</td>
        </tr>
        <tr>
          <td style="padding: 3px" width="170px">Nama</td>
          <td style="padding: 3px">: <?= $row->nama_siswa ?></td>
        </tr>
        <tr>
          <td style="padding: 3px">NISN</td>
          <td style="padding: 3px">: <?= $row->nisn_siswa ?></td>
        </tr>
        <tr>
          <td style="padding: 3px">Asal Sekolah</td>
          <td style="padding: 3px">: <?= $row->asal_sekolah ?></td>
        </tr>
      </table>

      <table style="margin-top: 10px; margin-right: 50px; margin-left: 50px;">
        <tr>
            <td>
            Berdasarkan hasil rapat pleno panitia PPDB SMK Negeri 1 Kragilan tanggal 10 Juli 2023,
             dengan memperhatikan Nilai Raport dan Tes Bakat dan Minat/Uji Kompetensi, maka siswa tersebut dinyatakan:
            </td>
        </tr>
      </table>

      <table border="1" style="margin-right: 50px; margin-left: 50px;">
        <tr>
          <td colspan="2" width="500px"><center>
            <h3><b>DITERIMA</b></h3>
          </center>
          </td>
        </tr>
        <tr>
            <td style="padding: 5px" width="200px"> <h5>Pada Kompetensi Keahlian </h5></td>
            <td style="padding: 5px"><h5> <?= $row->kompetensi_keahlian ?> </h5></td>
        </tr>
      </table>

      <img style="margin-top: 30px; margin-right: 50px; margin-left: 50px;" height="350px" align="center" src="<?= base_url() ?>assets/file/footer-bukti-diterima.png" style="float: left; margin-top: 150px"/>
    <?php } ?>
</div>


<script>
    window.print();
  </script>


  </body>
</html>