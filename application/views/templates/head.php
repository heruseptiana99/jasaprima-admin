<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='<?= base_url(); ?>assets/image/icons/JP.png' rel='shortcut icon'>

    <!-- vendor -->
    <link href="<?= base_url(); ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>vendor/fontawesome/css/all.css">

    <!-- local -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style/main.css">
</head>

<body>

    <!-- templates -->

    <!-- tombol sidebar -->
    <div class="swicths">
        <div class="swicth on" id="swicth-on">
            <!-- membuka -->
            <button class="btn swicth-item" onclick="myFunctionOpen()">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="swicth of" id="swicth-of">
            <!-- menutup -->
            <button class="btn swicth-item" onclick="myFunctionClose()">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>

    <!-- sidebar -->
    <div class="of sidebar" id="sidebar">

        <!-- hero -->
        <div class="head mb-3">
            <div class="resize">
                <img src="<?= base_url(); ?>assets/image/icons/JP.png" alt="Jasa Prima">
            </div>
            <h4>Jasa Prima</h4>
        </div>

        <!-- beranda -->
        <div class="menus mb-4">

            <a href="<?= base_url(); ?>" class="btn menu-items active mb-2">
                <i class="fa-solid fa-gauge" style="margin-right: 15px;"></i>
                <abbr>Beranda</abbr>
            </a>

        </div>

        <!-- transaksi -->
        <h6>TRANSAKSI</h6>
        <hr class="hr mb-3">
        <div class="menus mb-4">
            <a href="<?= base_url(); ?>transaksi" class="btn menu-items mb-2">
                <i class="fa-solid fa-clipboard-list" style="margin-right: 15px;"></i>
                <abbr>Daftar Transaksi</abbr>
            </a>
            <a href="<?= base_url(); ?>" class="btn menu-items mb-2">
                <i class="fa-solid fa-credit-card" style="margin-right: 15px;"></i>
                <abbr>Pembayaran</abbr>
            </a>
            <a href="<?= base_url(); ?>wp" class="btn menu-items mb-2">
                <i class="fa-solid fa-file-invoice" style="margin-right: 15px;"></i>
                <abbr>Wajib Pajak</abbr>
            </a>
        </div>

        <!-- pengguna -->
        <h6>PENGGUNA</h6>
        <hr class="hr mb-3">
        <div class="menus mb-4">
            <a href="<?= base_url(); ?>admin" class="btn menu-items mb-2">
                <i class="fa-solid fa-user-lock" style="margin-right: 15px;"></i>
                <abbr>Admin</abbr>
            </a>
            <a href="<?= base_url(); ?>kantor" class="btn menu-items mb-2">
                <i class="fa-solid fa-house-user" style="margin-right: 15px;"></i>
                <abbr>Kantor</abbr>
            </a>
        </div>

        <!-- pengurusan -->
        <h6>PENGURUSAN</h6>
        <hr class="hr mb-3">
        <div class="menus mb-4">
            <a href="<?= base_url(); ?>pengurusan" class="btn menu-items mb-2">
                <i class="fa-solid fa-list-check" style="margin-right: 15px;"></i>
                <abbr>Jenis Pengurusan</abbr>
            </a>
            <a href="<?= base_url(); ?>pengurusan/area" class="btn menu-items mb-2">
                <i class="fa-solid fa-location-crosshairs" style="margin-right: 15px;"></i>
                <abbr>Area</abbr>
            </a>
        </div>

        <!-- laporan -->
        <div class="menus mb-4">
            <a href="<?= base_url(); ?>home/laporan" class="btn menu-items mb-2">
                <i class="fa-solid fa-print" style="margin-right: 15px;"></i>
                <abbr>Laporan</abbr>
            </a>
        </div>

        <!-- parade exit -->
        <div class="parade">
            <img src="<?= base_url(); ?>assets/image/icons/parade.png" alt="Parade">
            <i>Apakah Anda Ingin Keluar?</i>
            <a href="<?= base_url(); ?>home/login" class="btn btn-danger">Keluar</a>
        </div>

    </div>
    <!-- end sidebar -->

    <!-- end templates -->

    <!-- start content -->
    <div class="content">
        <!-- top bar -->
        <div class="between mb-3">
            <div class="line">
                <div class="link-location lotion">
                    <i class="fa-solid fa-house-user" style="margin-right: 15px;"></i>
                    <a href="<?= base_url(); ?>" class="none">Beranda</a>/
                    <a href="" class="none"><?= $location; ?></a>
                </div>
            </div>
            <div class="line">
                <div class="nav-profile">
                    <b style="margin-right: 10px;">Kemal Ramadhan</b>
                    <a href="<?= base_url(); ?>profile" class="none"><i class="fa-solid fa-user-lock" style="margin-right: 10px;"></i></a>
                    <a href="" class="none">
                        <i class="fa-solid fa-envelope" style="margin-right: 10px;"></i>
                    </a>
                    <a href="" class="none">
                        <i class="fa-solid fa-bell" style="margin-right: 10px;"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- end top bar -->