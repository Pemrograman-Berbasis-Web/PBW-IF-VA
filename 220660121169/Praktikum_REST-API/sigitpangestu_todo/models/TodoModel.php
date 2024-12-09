<?php
// models/TodoModel.php

require_once 'core/Database.php';

class TodoModel {
    private $conn;
    private $table_name = "todos";

    /**
     * Konstruktor untuk kelas
     * 
     * Metode ini akan membuat objek koneksi PDO ke database
     * yang akan digunakan untuk operasi CRUD
     */
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    /**
     * Mendapatkan semua todo yang ada di database
     * 
     * Metode ini akan melakukan query ke database untuk mendapatkan
     * semua todo yang ada di database. Hasilnya akan diurutkan
     * berdasarkan tanggal pembuatan descending.
     * 
     * @return array Sebuah array yang berisi semua todo yang ada di database
     */
    public function getAllTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Membuat todo baru
     * 
     * Metode ini akan membuat todo baru dengan teks yang diberikan
     * dan menyimpannya di database. Jika berhasil maka metode ini
     * akan mengembalikan nilai true, jika gagal maka metode ini akan
     * mengembalikan nilai false.
     * 
     * @param string $task Teks dari tugas
     * @return boolean
     */
    public function createTodo($task) {
        $query = "INSERT INTO " . $this->table_name . " (task) VALUES (:task)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":task", $task);
        return $stmt->execute();
    }

    /**
     * Memperbarui status todo
     * 
     * Metode ini akan memperbarui status todo dengan id yang diberikan
     * dan status yang diberikan. Jika berhasil maka metode ini
     * akan mengembalikan nilai true, jika gagal maka metode ini akan
     * mengembalikan nilai false.
     * 
     * @param int $id ID dari todo yang akan diperbarui statusnya
     * @param int $is_completed Status yang akan diperbarui
     * @return boolean
     */
    public function updateTodoStatus($id, $is_completed) {
        $query = "UPDATE " . $this->table_name . " SET is_completed = :is_completed WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":is_completed", $is_completed);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    /**
     * Menghapus todo
     * 
     * Metode ini akan menghapus todo dengan id yang diberikan
     * dari database. Jika berhasil maka metode ini
     * akan mengembalikan nilai true, jika gagal maka metode ini akan
     * mengembalikan nilai false.
     * 
     * @param int $id ID dari todo yang akan dihapus
     * @return boolean
     */
    public function deleteTodo($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>