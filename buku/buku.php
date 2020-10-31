<div class="container-fluid">
    <div class="block-header">
        <h2>
            DATA BUKU
        </h2>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <a href="index.php?page=inputbuku">
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
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">

                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>No Buku</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Jenis Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $buku = "SELECT * FROM tbl_buku";
                                $query = mysqli_query($koneksi, $buku);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?= $data['no_buku']; ?></td>
                                        <td><?= ucwords($data['judul']); ?></td>
                                        <td><?= $data['pengarang']; ?></td>
                                        <td><?= $data['jenis_buku']; ?></td>
                                        <td class="align-center">
                                            <!-- btn-edit-->
                                            <a href="index.php?page=editbuku&id=<?= $data['no_buku']; ?>" class="btn btn-primary"><i class="material-icons">mode_edit</i></i></a>
                                            <!-- btn-hapus-->
                                            <a href="index.php?page=deletebuku&id=<?= $data['no_buku']; ?>" onclick="javascript:return confirm('Anda yakin akan menghapus <?= $data['judul']; ?>')" class="btn btn-danger"><i class="material-icons">delete_forever</i></a>
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