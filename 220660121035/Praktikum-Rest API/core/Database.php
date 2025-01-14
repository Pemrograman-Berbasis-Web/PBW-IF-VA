<?php
// config/Database.php

class Database {
    private $host = 'localhost';
    private $db_name = 'todolist_db';
    private $username = 'root';
    private $password = '';
    public $conn;

    /**
     * Membuat objek koneksi PDO ke database.
     * 
     * Metode ini akan mencoba membuat objek koneksi PDO ke database yang diatur
     * oleh variabel kelas $host, $db_name, $username dan $password. Jika
     * koneksi berhasil maka metode ini akan mengembalikan objek koneksi PDO,
     * jika gagal maka metode ini akan menampilkan pesan kesalahan dan mengembalikan
     * null.
     * 
     * @return PDO|null
     */
    public function getConnection() {
        $this->conn = null;

        // Mencoba membuat objek koneksi PDO
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        // Jika terjadi kesalahan, maka menampilkan pesan kesalahan
        catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        // Mengembalikan objek koneksi PDO yang dibuat
        return $this->conn;
    }
}
?>