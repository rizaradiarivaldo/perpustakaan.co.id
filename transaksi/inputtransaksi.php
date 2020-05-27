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
                        Input Data Transaksi
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
                    <form action="transaksi/simpantransaksi.php" method="POST">
                        <?php
                        $query = "SELECT MAX(no_pinjam) as maxPinjam FROM tbl_transaksi";
                        $hasil = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_array($hasil);

                        $no = $data['maxPinjam'];

                        $nourut = (int) substr($no, 2, 3);

                        $nourut++;
                        $huruf = "PJ";
                        $kode = $huruf . sprintf("%03s", $nourut);

                        ?>
                        <label for="no_pinjam">No Pinjam</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="no_pinjam" name="no_pinjam" class="form-control" value="<?= $kode; ?>" readonly>
                            </div>
                        </div>

                        <!-- Select -->
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label for="id_anggota">Nama</label>
                                <div class="form-line">
                                    <select class="form-control show-tick" name="id_anggota" id="id_anggota" required>
                                        <option value="">-- Pilih Nama Anggota --</option>
                                        <?php
                                        $anggota = "SELECT * FROM tbl_anggota";
                                        $query = mysqli_query($koneksi, $anggota);

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $data['id_anggota']; ?>">
                                                <?= $data['nama']; ?>
                                            <?php
                                        }
                                            ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Select -->

                        <!-- Select -->
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label for="no_buku">Judul Buku</label>
                                <div class="form-line">
                                    <select class="form-control show-tick" name="no_buku" id="no_buku" required>
                                        <option value="">-- Pilih Judul --</option>
                                        <?php
                                        $buku = "SELECT * FROM tbl_buku";
                                        $query = mysqli_query($koneksi, $buku);

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $data['no_buku']; ?>">
                                                <?= $data['judul']; ?>
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
                            <?php $tanggal = date('Y/m/d'); ?>
                            <div class="form-line">
                                <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" value="<?= $tanggal; ?>">
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
</div>