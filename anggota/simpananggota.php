<?php

include '../koneksi.php';

$id = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tgl_lahir = $_POST['tgl_lahir'];

//-->Insert data ke table
//INSERT INTO nama_tabel (field) VALUES (nilai yang akan dimasukan)

$query = "INSERT INTO tbl_anggota (id_anggota,nama,alamat,no_telp,tgl_lahir) VALUES ('$id','$nama','$alamat','$no_telp','$tgl_lahir')";
$simpan = mysqli_query($koneksi, $query);



// var_dump($query);
// die;

if ($simpan) {
    header("location:../index.php?page=anggota");
} else {
    echo "Data Error" . mysqli_error();
}
