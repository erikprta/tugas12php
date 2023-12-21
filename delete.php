<?php
// Pastikan ID produk yang akan dihapus tersedia dalam permintaan
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Lakukan koneksi ke database
    require_once 'dbkoneksi.php';

    // Lakukan pemanggilan class Produk
    require_once 'class_produk.php';
    $objproduk = new Produk($dbh);

    // Panggil metode deleteProduk dengan ID yang diterima
    $isDeleted = $objproduk->deleteProduk($product_id);

    if ($isDeleted) {
        // Redirect ke halaman list_produk.php setelah penghapusan berhasil
        header("Location: list_produk.php");
        exit();
    } else {
        // Tindakan jika penghapusan gagal
        echo "Gagal menghapus produk.";
    }
} else {
    // Tindakan jika ID tidak ditemukan dalam permintaan
    echo "ID produk tidak ditemukan.";
}
?>