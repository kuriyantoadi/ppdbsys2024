<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAKTA INTEGRITAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- <script src="../../assets/js/bootstrap.min.js"></script> -->

</head>
<body>

<div class="container">

      <center><h3 style="margin-top: 30px">PAKTA INTEGRITAS</h3>
      <h3>SISWA SMK NEGERI 1 KRAGILAN</h3><center>

    <?php foreach ($tampil as $row) { ?>

     
      <table class="table table-bordered" style="margin-top: 50px">
        <tr>
          <td colspan="2">Yang bertanda tangan dibawah ini :</td>
        </tr>
        <tr>
          <td width="250px">Nama Lengkap</td>
          <td>: <?= $row->nama_siswa ?></td>
        </tr>
        <tr>
          <td>NISN</td>
          <td>: <?= $row->nisn_siswa ?></td>
        </tr>
        <tr>
          <td>Kompetensi Keahlian</td>
          <td>: <?= $row->kompetensi_keahlian ?></td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td>: <?= $row->kampung_jln ?></td>
        </tr>
        <tr>
          <td>RT / RW</td>
          <td>: <?= $row->rt ?> / <?= $row->rw ?></td>
        </tr>
        <tr>
          <td>Kelurahan</td>
          <td>: <?= $row->kelurahan ?></td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>: <?= $row->kec ?></td>
        </tr>
        <tr>
          <td>Kabupaten / Kota</td>
          <td>: <?= $row->kab_kota ?></td>
        </tr>
        <tr>
          <td>Nomor HP Siswa</td>
          <td>: <?= $row->no_hp_siswa ?></td>
        </tr>
        <tr>
          <td>Nomor HP Orang Tua</td>
          <td>: <?= $row->no_hp_orgtua ?></td>
        </tr>


      </table>
      <p style="margin-top: 20px">
        <center><b>MENYATAKAN</b><center>
      </p>

          <ol style="text-align: justify;">
            <li>Bahwa saya akan bertakwa kepada Tuhan Yang Maha Esa;</li>
            <li>Bahwa saya akan mematuhi dan mentaati peraturan dan tata tertib sekolah;</li>
            <li>Bahwa saya akan menghormati, ta’at dan patuh terhadap Orang Tua dan Guru;</li>
            <li>Bahwa saya akan belajar dengan rajin dan sungguh-sungguh;</li>
            <li>Bahwa saya tidak akan melakukan tindak kriminal, narkoba dan kenakalan remaja lainnya;</li>
            <li>Bahwa saya tidak akan menikah selama masih berstatus siswa;</li>
            <li>Apabila dikemudian hari terbukti pernyataan saya tersebut tidak ditepati, maka saya bersedia dikenakan sanksi/hukuman menurut ketentuan peraturan yang berlaku.</li>
          </ol>

    <p style="text-align: justify;">
      Demikian surat pernyataan ini saya buat dalam keadaan sadar, tanpa paksaan, dan dibuat dengan sebenar-benarnya.
    </p>
    <!-- tanda tangan siswa dan orang tua -->
    <img height="160px" align="center" src="<?= base_url() ?>assets/file/footer-pakta-integritas.png" style="margin-right:  80px; margin-top: 10px"/>



  <?php } ?>
</div>


<script>
    window.print();
</script>


  </body>
</html>