<div class="container-fluid">
    <div class="block-header">
        <h2>
            DATA TRANSAKSI
            <!-- <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small> -->
        </h2>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <a href="index.php?page=inputtransaksi">
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
                                    <th>No Peminjaman</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>No Buku</th>
                                    <th>Judul</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //mysqli_fetch_array($variabel)

                                //mysqli_query($koneksi"Query") example ("SELECT * FROM ...")
                                $transaksi = "SELECT tbl_transaksi.no_pinjam,tbl_anggota.id_anggota,tbl_anggota.nama,tbl_buku.no_buku,tbl_buku.judul,tgl_pinjam,tgl_kembali FROM ((tbl_transaksi INNER JOIN tbl_anggota ON tbl_transaksi.id_anggota = tbl_anggota.id_anggota) INNER JOIN tbl_buku ON tbl_transaksi.no_buku = tbl_buku.no_buku)";

                                $query = mysqli_query($koneksi, $transaksi);

                                while ($data = mysqli_fetch_array($query)) {
                                    $tgl_pinjam = $data['tgl_pinjam'];
                                    $tgl_kembali = $data['tgl_kembali'];

                                ?>
                                    <tr>
                                        <td><?= $data['no_pinjam']; ?></td>
                                        <td><?= $data['id_anggota']; ?></td>
                                        <td><?= ucwords($data['nama']); ?></td>
                                        <td><?= $data['no_buku']; ?></td>
                                        <td><?= $data['judul']; ?></td>
                                        <td><?= date('j F Y', strtotime($tgl_pinjam)); ?></td>
                                        <td><?= date('j F Y', strtotime($tgl_kembali)); ?></td>
                                        <td class="align-center">
                                            <!-- btn-edit-->
                                            <a href="index.php?page=edittransaksi&id=<?= $data['no_pinjam']; ?>" class="btn btn-primary"><i class="material-icons">mode_edit</i></i></a>
                                            <!-- btn-hapus-->
                                            <a href="index.php?page=deletetransaksi&id=<?= $data['no_pinjam']; ?>" onclick="javascript:return confirm('Anda yakin akan menghapus ID : <?= $data['id_anggota']; ?> Dengan nama : <?= $data['nama']; ?>')" class="btn btn-danger"><i class="material-icons">delete_forever</i></i></a>
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