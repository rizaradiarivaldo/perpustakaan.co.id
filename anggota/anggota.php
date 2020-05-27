<div class="container-fluid">
    <div class="block-header">
        <h2>
            DATA ANGGOTA

        </h2>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <a href="index.php?page=inputanggota">
                        <button type="button" class="btn btn-circle-lg waves-effect waves-circle waves-float bg-red" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tambah Data">
                            <i class="material-icons">add_circle</i>
                        </button>
                    </a>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="anggota/cetak.php" target="_blank">Cetak</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">

                        <table class="table table-bordered table-striped table-hover js-basic-example  dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //mysqli_fetch_array($variabel)

                                //mysqli_query($koneksi"Query") example ("SELECT * FROM ...")
                                $anggota = "SELECT * FROM tbl_anggota";
                                $query = mysqli_query($koneksi, $anggota);
                                while ($data = mysqli_fetch_array($query)) {
                                    $tgl_lahir = $data['tgl_lahir'];
                                ?>
                                    <tr>
                                        <td><?= $data['id_anggota']; ?></td>
                                        <td><?= ucwords($data['nama']); ?></td>
                                        <td><?= $data['alamat']; ?></td>
                                        <td><?= $data['no_telp']; ?></td>
                                        <td><?= date('j F Y', strtotime($tgl_lahir)); ?></td>
                                        <td class="align-center">
                                            <!-- btn-edit-->
                                            <a href="index.php?page=editanggota&id=<?= $data['id_anggota']; ?>" class="btn btn-primary"><i class="material-icons">mode_edit</i></a>


                                            <!-- btn-hapus-->
                                            <a href="index.php?page=deleteanggota&id=<?= $data['id_anggota']; ?>" onclick="javascript:return confirm('Anda yakin akan menghapus <?= $data['nama']; ?>')" class="btn btn-danger"><i class="material-icons">delete_forever</i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>