<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tgl_lahir = $_POST['tgl_lahir'];

// UPDATE nama_tabel SET 'nama_field1'='value','nama_field2'='value2','nama_field3'='value3'
// WHERE primarykey = 'value'
// update data ke database

$update = "UPDATE tbl_anggota SET nama='$nama', alamat='$alamat', no_telp='$no_telp', tgl_lahir='$tgl_lahir' WHERE id_anggota='$id'";
$simpan = mysqli_query($koneksi, $update);

// mengalihkan halaman kembali ke index.php
if ($simpan) {
    header("location:../index.php?page=anggota");
} else {
    echo "Data Error" . mysqli_error();
}
