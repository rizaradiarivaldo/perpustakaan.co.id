<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$no_pinjam = $_POST['no_pinjam'];
$id = $_POST['id_anggota'];
$no_buku = $_POST['no_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = date('Y-m-d', strtotime('+7days', strtotime($tgl_pinjam)));

$update = "UPDATE tbl_transaksi SET id_anggota='$id', no_buku='$no_buku', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' WHERE no_pinjam='$no_pinjam'";
$simpan = mysqli_query($koneksi, $update);

// mengalihkan halaman kembali ke index.php
if ($simpan) {
    header("location:../index.php?page=transaksi");
} else {
    echo "Data Error" . mysqli_error();
}
