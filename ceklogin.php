<?php

include 'koneksi.php';
session_start();
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$query = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
$admin = mysqli_query($koneksi, $query);

//untuk menampilkan data
$dataadmin = mysqli_fetch_array($admin);

//menghitung jumlah data yang ditemukan di database
$cek = mysqli_num_rows($admin);


if ($cek > 0) {
    $_SESSION['username'] = $dataadmin['username'];
    // $_SESSION['nama'] = $dataadmin['nama_lengkap'];
    $_SESSION['level'] = 'Admin';
    $_SESSION['status'] = 'login';
    header("location:index.php?page=home");
} else {
    header('location:login.php?message=gagal');
}


//username : admin
//Password : 123

//--------- Login tanpa database
// if ($username == 'admin' && $password == '123') {
//     header('location:index.php?page=home');

//     $_SESSION['username'] = $username;
//     $_SESSION['level'] = 'admin';
//     $_SESSION['status'] = "login";
// } else {
//     header('location:login.php?message=gagal');
// }