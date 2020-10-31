<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php
    $anggota = "SELECT * FROM tbl_anggota";
    $buku = "SELECT * FROM tbl_buku";
    $transaksi = "SELECT * FROM tbl_transaksi";
    $qanggota = mysqli_query($koneksi, $anggota);
    $qbuku = mysqli_query($koneksi, $buku);
    $qtransaksi = mysqli_query($koneksi, $transaksi);

    $jmlanggota = mysqli_num_rows($qanggota);
    $jmlbuku = mysqli_num_rows($qbuku);
    $jmltransaksi = mysqli_num_rows($qtransaksi);



    ?>
    <div class="block-header">
        <h2>
            DASHBOARD
        </h2>

    </div>
    <div class="row clearfix js-sweetalert">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person</i>
                </div>
                <div class="content">
                    <div class="text">DATA ANGGOTA</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jmlanggota; ?></div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">library_books</i>
                </div>
                <div class="content">
                    <div class="text">DATA BUKU</div>
                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $jmlbuku; ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">insert_drive_file</i>
                </div>
                <div class="content">
                    <div class="text">DATA TRANSAKSI</div>
                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $jmltransaksi; ?></div>
                </div>
            </div>
        </div>

    </div>
    <div class="card">
        <div class="header">
            <h2>
                <b>Home</b>
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            Selamat datang, Anda masuk sebagai <b><?php echo ucfirst($_SESSION['username']); ?></b>

        </div>
    </div>
</div>