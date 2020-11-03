<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        <?php
        if ($_SESSION['status'] === '') {
            header('location:login.php?message=ditolak');
        };
        ?>
        <?= ucfirst($_SESSION['level']); ?> |
        <?php echo ucfirst($_GET['page']); ?>
    </title>
    <?php include "include/link.php" ?>
</head>

<body class="theme-red">
    <?php include "koneksi.php"; ?>
    <!-- hapus baris include/loader jika load page terus agar terlihat errornya:) -->
    <?php include "include/loader.php" ?>
    <?php include "include/topbar.php" ?>
    <section>
        <?php include "include/sidebar.php" ?>
    </section>
    <section class="content">
        <?php include "content.php"; ?>
    </section>
    <?php include "include/script.php" ?>
</body>

</html>