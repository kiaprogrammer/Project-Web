<?php
// config/koneksi.php
if (!class_exists('Database')) {
    class Database {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "perpusdig";
        public $koneksi;

        public function __construct() {
            try {
                // Membuat koneksi ke database menggunakan PDO
                $this->koneksi = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
                // Set error mode untuk exception
                $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Menangkap exception dan menampilkan pesan error jika koneksi gagal
                echo "Koneksi gagal: " . $e->getMessage();
                // Anda juga bisa melakukan logging ke file atau database untuk melacak error
                die(); // Menghentikan eksekusi script jika koneksi gagal
            }
        }
    }
}
?>
