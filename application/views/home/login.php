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

<body style="background-color: #FFFFFF;">
    <div class="login">
        <h4 class="mb-2">Login</h4>
        <p>Masukan Email / No handphone dan password untuk masuk</p>
        <div class="mb-3">
            <input type="text" class="form-control" id="username" placeholder="Email/No Handphone">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="mb-3">
            <button class="btn btn-danger" style="width: 350px;">Masuk</button>
            <a href="" class="btn">Lupa Lagi Password? Hubungi Pusat!</a>
        </div>
    </div>
</body>
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>/vendor/fontawesome/js/all.js"></script>
<script src="<?= base_url(); ?>/assets/style/main.js"></script>

</html>