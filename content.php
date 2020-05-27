<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "";
}
switch ($page) {

    case "anggota":
        include "anggota/anggota.php";
        break;

    case "inputanggota":
        include "anggota/inputanggota.php";
        break;

    case "editanggota":
        include "anggota/edit.php";
        break;

    case "deleteanggota":
        include "anggota/delete.php";
        break;
        ///---///
    case "buku":
        include "buku/buku.php";
        break;

    case "inputbuku":
        include "buku/inputbuku.php";
        break;

    case "editbuku":
        include "buku/edit.php";
        break;

    case "deletebuku":
        include "buku/delete.php";
        break;
        ///---///

    case "transaksi":
        include "transaksi/transaksi.php";
        break;

    case "inputtransaksi":
        include "transaksi/inputtransaksi.php";
        break;

    case "edittransaksi":
        include "transaksi/edit.php";
        break;

    case "deletetransaksi":
        include "transaksi/delete.php";
        break;
        ///---///

    default:
        include "home.php";
        break;
}
