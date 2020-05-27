<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$no_buku = $_POST['no_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jenis_buku = $_POST['jenis_buku'];


// UPDATE nama_tabel SET 'nama_field1'='value','nama_field2'='value2','nama_field3'='value3'
// WHERE *primarykey = 'value'
// update data ke database

$update = "UPDATE tbl_buku SET judul='$judul', pengarang='$pengarang', jenis_buku='$jenis_buku' WHERE no_buku='$no_buku'";
$simpan = mysqli_query($koneksi, $update);

// mengalihkan halaman kembali ke index.php
if ($simpan) {
    header("location:../index.php?page=buku");
} else {
    echo "Data Error" . mysqli_error();
}
