<div class="container-fluid">
    <div class="block-header">
        <h2>DATA BUKU
        </h2>
    </div>


    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Input Data Buku
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
                    <form action="Buku/simpanbuku.php" method="POST">
                        <?php
                        $query = "SELECT MAX(no_buku) as maxBuku FROM tbl_buku";
                        $hasil = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_array($hasil);

                        $no = $data['maxBuku'];

                        $nourut = (int) substr($no, 2, 3);

                        $nourut++;
                        $huruf = "BK";
                        $kode = $huruf . sprintf("%03s", $nourut);

                        ?>
                        <label for="no_buku">No Buku</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="no_buku" name="no_buku" class="form-control" value="<?= $kode; ?>" readonly>
                            </div>
                        </div>
                        <label for="judul">Judul</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukan Judul Buku..." required>
                            </div>
                        </div>
                        <label for="pengarang">Pengarang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="pengarang" name="pengarang" class="form-control" placeholder="Masukan Pengarang Buku..." required>
                            </div>
                        </div>
                        <label for="jenis_buku">Jenis Buku</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="jenis_buku" name="jenis_buku" class="form-control" placeholder="Masukan Jenis Buku..." required>
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