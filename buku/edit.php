<?php
include 'koneksi.php';
$id = $_GET['id'];

$buku = "SELECT * FROM tbl_buku WHERE no_buku='$id'";
$query = mysqli_query($koneksi, $buku);

$data = mysqli_fetch_array($query)
?>
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
                        Edit Data Buku
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
                    <form method="post" action="buku/update.php">
                        <label for="no_buku">No Buku</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="no_buku" name="no_buku" class="form-control" value="<?php echo $data['no_buku']; ?>" readonly>
                            </div>
                        </div>
                        <label for="judul">Judul</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="judul" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" required>
                            </div>
                        </div>
                        <label for="pengarang">Pengarang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="pengarang" name="pengarang" class="form-control" value="<?php echo $data['pengarang']; ?>" required>
                            </div>
                        </div>

                        <label for="jenis_buku">Jenis Buku</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="jenis_buku" name="jenis_buku" class="form-control" value="<?php echo $data['jenis_buku']; ?>" required>
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