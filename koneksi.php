<?php
// error_reporting(0);
// --> koneksi database
// $koneksi = mysqli_connect("Server","username","password","database");

$koneksi = mysqli_connect("localhost", "root", "", "perpustakaan_db");

if ($koneksi) {
    //    echo "Koneksi Database Berhasil";
} else {
    echo "Koneksi Gagal" . mysqli_error();
}
