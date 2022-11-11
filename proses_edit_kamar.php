<?php
require 'libraries/connection.php';
$id = htmlspecialchars($_POST['id']);
$tipe_kamar  = htmlspecialchars($_POST['tipe_kamar']);
$fasilitas_kamar  = htmlspecialchars($_POST['fasilitas_kamar']);
$jumlah_kamar  = htmlspecialchars($_POST['jumlah_kamar']);

try {
    $koneksi = connect();
    $query = $koneksi->prepare("UPDATE kamar SET tipe_kamar=:tipe_kamar, fasilitas_kamar=:fasilitas_kamar, jumlah_kamar=:jumlah_kamar WHERE id_kamar=:id_kamar");
    $query->bindParam(':id_kamar', $id);
    $query->bindParam(':tipe_kamar', $tipe_kamar);
    $query->bindParam(':fasilitas_kamar', $fasilitas_kamar);
    $query->bindParam(':jumlah_kamar', $jumlah_kamar);
    $query->execute();
    header('location: index.php');
} catch (PDOException $e){
    echo 'Gagal mengubah data!:<br>';
    echo $e->getMessage();
    die;
}
