<?php

include '../koneksi.php';

$no_buku = $_POST['no_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jenis_buku = $_POST['jenis_buku'];

//-->Insert data ke table
//INSERT INTO nama_table (field) VALUES (nilai yang akan dimasukan)

$query = "INSERT INTO tbl_buku (no_buku,judul,pengarang,jenis_buku)
VALUES ('$no_buku','$judul','$pengarang','$jenis_buku')";
$simpan = mysqli_query($koneksi, $query);



// var_dump($query);
// die;

if ($simpan) {
    header("location:../index.php?page=buku");
} else {
    echo "Data Error" . mysqli_error();
}
