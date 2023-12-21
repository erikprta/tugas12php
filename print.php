<?php
require_once 'dbkoneksi.php';
require_once 'class_produk.php';
$objproduk = new Produk($dbh);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Cetak Daftar Produk</title>
</head>

<body>
    <div class="card" style="font-family: 'Poppins', sans-serif;">
        <div class="card-header">
            <h3>Daftar Produk</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Jenis Produk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($rsproduk as $row) {
                        echo '<tr>
                                <td align="center">' . $nomor . '</td>
                                <td>' . $row->nama . '</td>
                                <td align="center">' . $row->qty . '</td>
                                <td>' . $row->harga . '</td>
                                <td>' . $row->nama_jenis . '</td>
                            </tr>';
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="list_produk.php" class="btn btn-primary d-print-none">Kembali ke Daftar Produk</a>
        </div>

    </div>

    <script>
        window.onload = function () {
            window.print();
        }
    </script>
</body>

</html>