<?php 
    class Produk{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function getAllProduk(){
            $sql = "SELECT * FROM produk";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function getAllJenis(){
            $sql="SELECT * FROM jenis";
            // prepare statement PDO
            $rs = $this->dbh->query($sql);
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO produk(kode,nama,kondisi,harga,stok,idjenis,foto)
                    VALUES (?,?,?,?,?,?,?)";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function getProduk($id){
            $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis WHERE produk.id = ?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }

        public function ubah($data){
            $sql = "UPDATE produk SET kode=?, nama=?, kondisi=?, harga=?, stok=?, idjenis=?, foto=? WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM produk WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($id);
        }
    }
?>