<?php include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM tbl_buku WHERE no_buku='$id'";
$hapus = mysqli_query($koneksi, $delete);


if ($hapus) {
    echo "<script>location.href = 'index.php?page=buku' </script>";
    //  header("location:index.php?page=buku");
} else {
    echo "Data Error" . mysqli_error();
}
