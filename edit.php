<?php
require_once 'dbkoneksi.php';
require_once 'class_produk.php';

$objproduk = new Produk($dbh);

if (!empty($_GET['id'])) {
    $produk_id = $_GET['id'];
    $produk = $objproduk->getProdukById($produk_id);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $jenis_produk_id = $_POST['jenis_produk_id'];

    $success = $objproduk->updateProduk($produk_id, $nama, $qty, $harga, $jenis_produk_id);

    if ($success) {
        header("Location: list_produk.php");
        exit();
    } else {
        echo "Gagal melakukan update produk.";
    }
}
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
    <title>Edit Produk</title>
</head>

<body class="d-flex justify-content-center align-items-center"
    style="height: 100vh; background-color: #f8f9fa; font-family: 'Poppins', sans-serif;">
    <div class="container shadow p-4" style="border-radius: 15px; background-color: #fff; max-width: 800px;">
        <div class="row align-items-center">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img src="product.svg" alt="SVG Image" width="150%">
            </div>
            <div class="col-md-9">
                <h2 class="text-center mb-4">Edit Produk</h2>
                <form action="" method="post">
                    <div class="form-group row">
                        <label for="nama_produk" class="col-sm-3 col-form-label text-sm-right">Nama Produk</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-codepen"></i></span>
                                </div>
                                <input id="nama_produk" name="nama" type="text" class="form-control"
                                    value="<?php echo isset($produk) ? $produk->nama : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty" class="col-sm-3 col-form-label text-sm-right">Qty</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-sort-numeric-asc"></i></span>
                                </div>
                                <input id="qty" name="qty" type="text" class="form-control"
                                    value="<?php echo isset($produk) ? $produk->qty : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label text-sm-right">Harga</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-money"></i></span>
                                </div>
                                <input id="harga" name="harga" type="text" class="form-control"
                                    value="<?php echo isset($produk) ? $produk->harga : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_produk" class="col-sm-3 col-form-label text-sm-right">Jenis</label>
                        <div class="col-sm-9">
                            <select id="jenis_produk" name="jenis_produk_id" class="custom-select">
                                <?php
                                $jenis_produk = $objproduk->getAllJenisProduk();
                                foreach ($jenis_produk as $jenis) {
                                    echo '<option value="' . $jenis->id . '"';
                                    if (isset($produk) && $produk->jenis_produk_id == $jenis->id) {
                                        echo ' selected';
                                    }
                                    echo '>' . $jenis->nama . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-6">
                            <button name="proses" value="Simpan" type="submit"
                                class="btn btn-primary mr-2">Save</button>
                            <a href="list_produk.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>