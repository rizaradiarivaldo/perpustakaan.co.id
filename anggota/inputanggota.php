<div class="container-fluid">
    <div class="block-header">
        <h2>DATA ANGGOTA
        </h2>
    </div>


    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Input Data Anggota
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
                    <form action="Anggota/simpananggota.php" method="POST">
                        <?php
                        $query = "SELECT MAX(id_anggota) as maxId FROM tbl_anggota";
                        $hasil = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_array($hasil);

                        $no = $data['maxId'];

                        $nourut = (int) substr($no, 2, 3);

                        $nourut++;
                        $huruf = "AG";
                        $kode = $huruf . sprintf("%03s", $nourut);

                        ?>
                        <label for="id_anggota">ID</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="id_anggota" name="id_anggota" class="form-control" value="<?= $kode; ?>" readonly>
                            </div>
                        </div>
                        <label for="nama">Nama</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Lengkap..." required>
                            </div>
                        </div>
                        <label for="alamat">Alamat</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukan Alamat..." required>
                            </div>
                        </div>

                        <label for="no_telp">No Telepon</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Masukan No Telepon..." required>
                            </div>
                        </div>

                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" required>
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