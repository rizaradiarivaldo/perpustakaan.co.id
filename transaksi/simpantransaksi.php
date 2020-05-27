<?php

include '../koneksi.php';

$no_pinjam = $_POST['no_pinjam'];
$id = $_POST['id_anggota'];
$no_buku = $_POST['no_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = date('Y-m-d', strtotime('+7days', strtotime($tgl_pinjam)));
// date('j F Y', strtotime($tgl_lahir)); 

//-->Insert data ke table
//INSERT INTO nama_tabel (field) VALUES (nilai yang akan dimasukan)

$query = "INSERT INTO tbl_transaksi (no_pinjam,id_anggota,no_buku,tgl_pinjam,tgl_kembali) VALUES ('$no_pinjam','$id','$no_buku','$tgl_pinjam','$tgl_kembali')";
$simpan = mysqli_query($koneksi, $query);




if ($simpan) {
    header("location:../index.php?page=transaksi");
} else {
    echo "Data Error" . mysqli_error();
}
