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
        <h1 class="text-center">Data Kamar</h1>
        <div class="mb-4 float-end">
            <a href="tambah_kamar.php" class="btn btn-success">Tambah Data Kamar</a>
        </div>
        <table class="table table-hover table-bordered">
            <tr>
                <th>ID Kamar</th>
                <th>Tipe Kamar</th>
                <th width="50%">Deskripsi</th>
                <th>Jumlah Kamar</th>
                <th min-width="200px">Action</th>
            </tr>
            <?php
            $koneksi = connect();
            $query = $koneksi->query('SELECT * FROM kamar');
            $query->setFetchMode(PDO::FETCH_OBJ);
            while( $data = $query->fetch() ):
            ?>
                <tr>
                    <td><?php echo $data->id_kamar; ?></td>
                    <td><?php echo $data->tipe_kamar; ?></td>
                    <td><?php echo $data->fasilitas_kamar; ?></td>
                    <td><?php echo $data->jumlah_kamar; ?></td>
                    <td>
                        <a href="edit_kamar.php?id=<?php echo $data->id_kamar; ?>" class="btn btn-primary">Edit</a>
                        <a onclick="return confirm('Anda yakin akan menghapus data ini?')" href="proses_hapus_kamar.php?id=<?php echo $data->id_kamar; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
