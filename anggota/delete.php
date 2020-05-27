<?php include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM tbl_anggota WHERE id_anggota='$id'";
$hapus = mysqli_query($koneksi, $delete);


if ($hapus) {
    echo "<script>location.href = 'index.php?page=anggota' </script>";
    //  header("location:index.php?page=mahasiswa");
} else {
    echo "Data Error" . mysqli_error();
}
