
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Data Siswa</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                    <li class="breadcrumb-item active">Detail</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                           <?php foreach ($tampil as $row) { ?>

                            <div class="card-header">
                                <a href="<?= site_url('Op_wawancara_full/siswa_tampil') ?>" class="btn btn-dark waves-effect waves-light btn-sm">Kembali</a>
                                <a href="<?= site_url('Op_wawancara_full/tes_khusus_belum/'.$row->id_siswa) ?>" class="btn btn-sm btn-secondary" onclick="return confirm('Anda yakin belum tes khusus dari data siswa <?= $row->nama_siswa ?> ?')">Belum Tes Khusus</a>

                            </div>
                            <div class="card-body p-4">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="table">
                                            <table class="table mb-0 table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" class="text-center"><h5>Identitas Calon Peserta Didik</h5></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th>Status Tes Wawancara</th>
                                                        <td>
                                                            <?php if($row->status_tes_wawancara == 'Sudah Tes' ){ ?>
                                                                <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Sudah Tes</a>
                                                            <?php }else{ ?>
                                                                <a class="btn-secondary btn-sm btn-rounded">Belum Tes</a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>Tanggal Upload</th>
                                                        <td><?= $row->tgl_upload ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kompetensi Keahlian 1</th>
                                                        <td><?= $row->nama_kompetensi_1 ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kompetensi Keahlian 2</th>
                                                        <td><?= $row->nama_kompetensi_2 ?></td>
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
                                                        <th>No WA Siswa</th>
                                                        <td><?= $row->no_wa_siswa ?></td>
                                                    </tr>
                                                    

                                                  <?= form_open('index.php/Op_wawancara_full/tes_khusus_note') ?>
                                                    
                                                    <tr>
                                                        <th>Operator Khusus</th>
                                                        <td>
                                                            <input type="text" class="form-control" name="user_tes_khusus" value="<?= $ses_user ?>" require readonly>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Note Tes Khusus</th>
                                                        <td>
                                                            <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
                                                            <input type="text" class="form-control" name="note_tes_khusus" value="<?= $row->note_tes_khusus ?>" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Rekomendasi Masuk Ke Jurusan <?= $ses_kompetensi ?></th>
                                                        <td>
                                                            <select class="form-control" name="rekomendasi_tes_khusus" id="" required>
                                                                <option value="<?= $row->rekomendasi_tes_khusus ?>">Pilihan ( <?= $row->rekomendasi_tes_khusus ?> )</option>
                                                                <option value="Tidak Rekomendasi">Tidak Rekomendasi</option>
                                                                <option value="Rekomendasi">Rekomendasi</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><center>
                                                            <input type="submit" class="btn btn-primary btn-sm">
                                                        </td>
                                                    </tr>
                                                    <?= form_close() ?>
                                                </tbody>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row data siswa-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



