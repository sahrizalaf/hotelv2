<?php
require 'libraries/connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel V2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <h1 class="text-center"><a href="index.php"><i class="bi bi-arrow-return-left font-size-12"></i></a> Tambah Data Kamar</h1>
    <form action="proses_tambah_kamar.php" method="post">
        <div class="mb-3">
            <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
            <input type="text" class="form-control" name="tipe_kamar" id="tipe_kamar" placeholder="Masukkan nama tipe kamar...">
        </div>
        <div class="mb-3">
            <label for="fasilitas_kamar" class="form-label">Fasilitas Kamar</label>
            <textarea class="form-control" name="fasilitas_kamar" id="fasilitas_kamar" rows="3" placeholder="Jelaskan fasilitas kamar..."></textarea>
        </div>
        <div class="mb-3">
            <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
            <input type="numbere" class="form-control" name="jumlah_kamar" id="jumlah_kamar" placeholder="Masukkan jumlah kamar...">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" type="button">Create</button>
        </div>
    </form>
</div>
</body>
</html>
