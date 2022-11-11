<?php
require 'libraries/connection.php';
$id = $_GET['id'];

try {
    $koneksi = connect();
    $query = $koneksi->prepare("DELETE FROM kamar WHERE id_kamar = :id_kamar");
    $query->bindParam(':id_kamar', $id);
    $query->execute();
    header('location: index.php');
} catch (PDOException $e){
    echo 'Gagal menghapus data: <br>';
    echo $e->getMessage();
    die;
}