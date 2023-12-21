<?php
require_once 'dbkoneksi.php';
require_once 'class_produk.php';

$objproduk = new Produk($dbh);

// tangkap request form
$_nama = $_POST['nama'];
$_qty = $_POST['qty'];
$_harga = $_POST['harga'];
$_idjenis = $_POST['jenis_produk_id'];
$_proses = $_POST['proses'];

if (!empty($_proses)) {
    if ($_proses == "Simpan") {
        // Menyimpan produk dengan menggunakan metode saveProduk dari class_produk.php
        $objproduk->simpan($_nama, $_qty, $_harga, $_idjenis);
    }
    // Redirect ke halaman list_produk.php setelah operasi selesai
    header("Location: list_produk.php");
    exit();
}
?>
