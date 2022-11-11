<?php

function connect(){
    try {
        $host   = 'localhost';
        $dbname = 'hotelv2';
        $user   = 'root';
        $pass   = '';
        $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
        $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $connection;
    } catch(PDOException $e){
        echo 'Terjadi kesalahan pada koneksi: <br>';
        echo $e->getMessage();
        die;
    }
}