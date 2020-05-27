<?php
include 'koneksi.php';
$id = $_GET['id'];

$transaksi = "SELECT * FROM tbl_transaksi WHERE no_pinjam='$id'";
$query = mysqli_query($koneksi, $transaksi);

$data = mysqli_fetch_array($query)
?>
<div class="container-fluid">
    <div class="block-header">
        <h2>DATA TRANSAKSI
        </h2>
    </div>
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Data Transaksi
                    </h2>
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
                    <form method="post" action="transaksi/update.php">
                        <!-- Select -->
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label for="id_anggota">Nama Anggota</label>
                                <div class="form-line">
                                    <input type="hidden" name="no_pinjam" id="no_pinjam" value="<?php echo $data['no_pinjam']; ?>">
                                    <select name="id_anggota" id="id_anggota" class="form-control show-tick" required>
                                        <option value="">-- Nama Anggota --</option>
                                        <?php
                                        $anggota = "SELECT * FROM tbl_anggota";
                                        $query = mysqli_query($koneksi, $anggota);

                                        while ($anggota1 = mysqli_fetch_array($query)) {
                                        ?>
                                            <option <?php if ($data['id_anggota'] == $anggota1['id_anggota']) {
                                                        echo "selected";
                                                    }
                                                    ?> value="<?php echo $anggota1['id_anggota']; ?>">
                                                <?php echo $anggota1['nama']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <!-- Select -->
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label for="no_buku">Nama Judul</label>
                                <div class="form-line">

                                    <select name="no_buku" id="no_buku" class="form-control show-tick" required>
                                        <option value="">-- Nama Judul --</option>
                                        <?php

                                        $buku = "SELECT * FROM tbl_buku";
                                        $query1 = mysqli_query($koneksi, $buku);

                                        while ($buku1 = mysqli_fetch_array($query1)) {
                                        ?>
                                            <option <?php if ($data['no_buku'] == $buku1['no_buku']) {
                                                        echo "selected";
                                                    }
                                                    ?> value="<?php echo $buku1['no_buku'] ?>">
                                                <?php echo $buku1['judul']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <!-- #END# Select -->

                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" value="<?php echo $data['tgl_pinjam']; ?>" required>
                            </div>
                        </div>


                        <br>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->