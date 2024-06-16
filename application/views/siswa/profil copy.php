
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
                       
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" class="text-center"><h4>Data Lengkap Siswa Baru</h4></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tampil as $row) { ?>
                                                <tr>
                                                    <th>Kompetensi Keahlian 1</th>
                                                    <td><?= $row->kompetensi_keahlian ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Kompetensi Keahlian 2</th>
                                                    <td><?= $row->kompetensi_keahlian_2 ?></td>
                                                </tr>
                                                <tr>
                                                    <th>NISN</th>
                                                    <td><?= $row->nisn_siswa ?></td>
                                                </tr>
                                                <tr>
                                                    <th>NAMA LENGKAP</th>
                                                    <td><?= $row->nama_siswa ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat, Tanggal Lahir</th>
                                                    <td><?= $row->tempat_lahir ?>, <?= $row->tgl_lahir ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td><?= $row->jenis_kelamin ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Asal Sekolah</th>
                                                    <td><?= $row->asal_sekolah ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Orag Tua / Wali</th>
                                                    <td><?= $row->nama_org_tua ?></td>
                                                </tr>
                                                <tr>
                                                    <th>No. Telepon</th>
                                                    <td><?= $row->no_wa_siswa ?></td>
                                                </tr>
                                               
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row data siswa-->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Raport Semester 1</h4>
                                            <a href="#" type="button" class="btn btn-link waves-effect">(File PDF)</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered border-1 table-sm">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Agama</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Matematika</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bahasa Indonesia</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bahasa Inggris</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>IPA</th>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">Edit Nilai Raport</a> -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Raport Semester 2</h4>
                                            <a href="#" type="button" class="btn btn-link waves-effect">(File PDF)</a>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered border-1 table-sm">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Agama</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Matematika</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bahasa Indonesia</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bahasa Inggris</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>IPA</th>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">Edit Nilai Raport</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Raport Semester 2</h4>
                                            <a href="#" type="button" class="btn btn-link waves-effect">(File PDF)</a>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered border-1 table-sm">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Agama</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Matematika</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bahasa Indonesia</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Bahasa Inggris</th>
                                                                    <td>90</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>IPA</th>
                                                                    <td>90</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">Edit Nilai Raport</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row raport-->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
