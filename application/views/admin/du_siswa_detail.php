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
                        
                    <?php 
                    foreach ($tampil as $cek_kondisi) {       
                    if($cek_kondisi->status_diterima == "Tidak Diterima"){     
                    ?>

                        <!-- Awal Data Siswa Tidak Diterima -->
                        <div class="card-header">
                            <h3 class="card-title">Halaman Dashboard</h3>
                            <p>
                                Selamat Datang di System PPDB SMKN 1 Kragilan, anda sedang login pada akun siswa. 
                            </p>

                            <table class="table mb-0 table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center"><h5>Identitas Calon Peserta Didik</h5></th>
                                    </tr>
                                </thead>
                                <?php foreach ($tampil as $row) { ?>
                                <tbody>
                                    <tr>
                                        <th>Kompetensi Keahlian</th>
                                        <td><?= $row->kompetensi_keahlian ?></td>
                                    </tr>  
                                    <tr>
                                        <th>NISN</th>
                                        <td><?= $row->nisn_siswa ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Calon Peserta</th>
                                        <td><?= $row->nama_siswa ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sekolah Asal</th>
                                        <td><?= $row->asal_sekolah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sekolah Asal</th>
                                        <td><?= $row->asal_sekolah ?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>

                        </div>
                        <!-- Akhir Data Siswa tidak terima -->
                    <?php 
                        }
                    }
                    ?>
                    
                    <?php 
                    foreach ($tampil as $cek_kondisi) {       
                    if($cek_kondisi->status_diterima == "DITERIMA"){     
                    ?>
                        <!-- Awal Data Siswa Diterima -->
                        <div class="card-header">
                            <h3 class="card-title">Siswa Daftar Ulang</h3>
                            <p>
        
                            <table class="table mb-0 table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center"><h5>Identitas Calon Peserta Didik</h5></th>
                                    </tr>
                                </thead>
                                <?php foreach ($tampil as $row) { ?>
                                <tbody>
                                    <tr>
                                        <th>Status Daftar Ulang</th>
                                        <td>
                                             <?php if($row->status_daftar_ulang == 'Sudah' ){ ?>
                                             <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah</a>
                                        <?php }else{ ?>
                                            <a class="btn-secondary btn-sm btn-rounded">Belum</a>
                                        <?php } ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <th>Kompetensi Keahlian</th>
                                        <td><?= $row->kompetensi_keahlian ?></td>
                                    </tr>  
                                    <tr>
                                        <th>NISN</th>
                                        <td><?= $row->nisn_siswa ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Calon Peserta</th>
                                        <td><?= $row->nama_siswa ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sekolah Asal</th>
                                        <td><?= $row->asal_sekolah ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sekolah Asal</th>
                                        <td><?= $row->asal_sekolah ?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>

                        </div>

                        <?php 
                            }
                        }
                        ?>
                        <!-- Akhir Data Siswa Diterima -->
 
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
