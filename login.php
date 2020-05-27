<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Masuk | Perpustakaan Kampus</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/book.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a><b>Perpustakaan</b>Kampus</a>
            <small>Peminjaman Buku</small>
        </div>
        <div class="card">
            <div class="body">
                <form action="ceklogin.php" method="POST">
                    <div class="msg">Masuk untuk memulai sesi...</div>
                    <?php

                    if (isset($_GET['message'])) {
                        if ($_GET['message'] == 'gagal') {
                            echo "<div class='alert alert-danger'>
                             Username atau Password Salah, Silahkan Periksa Kembali...
                        </div>";
                        } elseif ($_GET['message'] == 'keluar') {
                            echo "<div class='alert alert-info'>
                            Terimakasih telah menggunakan aplikasi ini...
                        </div>";
                        } elseif ($_GET['message'] == 'ditolak') {
                            echo "<div class='alert alert-success '>
                          Silahkan Masuk terlebih dahulu...
                        </div>";
                        }
                    }
                    ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Masukan Nama Pengguna..." required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Masukan Kata Sandi..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">MASUK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>