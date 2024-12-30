<?php
// models/TodoModel.php

require_once 'core/Database.php';

class TodoModel {
    private $conn;
    private $table_name = "todos";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

  // Fungsi untuk mengambil semua todo
public function getAllTodos() {
    $query = "SELECT * FROM " . $this->table_name . " ORDER BY deadline DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


    public function createTodo($title, $deadline, $description) {
        $query = "INSERT INTO " . $this->table_name . " (title, deadline, description) VALUES (:title, :deadline, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":deadline", $deadline);
        $stmt->bindParam(":description", $description);
        return $stmt->execute();
    }
    

    // Fungsi untuk memperbarui status todo (selesai atau tidak)
    public function updateTodoStatus($id, $is_completed) {
        $query = "UPDATE " . $this->table_name . " SET is_completed = :is_completed WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":is_completed", $is_completed);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }


    // Fungsi untuk menghapus todo berdasarkan ID
    public function deleteTodo($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    // Fungsi untuk memperbarui deskripsi todo (task)
    public function updateTodoDetails($id, $title, $deadline, $description) {
        $query = "UPDATE " . $this->table_name . " SET title = :title, deadline = :deadline, description = :description WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":deadline", $deadline);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
    

    
}
?>