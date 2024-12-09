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

    public function createTodo($task, $dueDate = null) {
        $query = "INSERT INTO " . $this->table_name . " (task, due_date) VALUES (:task, :due_date)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":task", $task);
        $stmt->bindParam(":due_date", $dueDate);
        return $stmt->execute();
    }
    
    // Perbarui metode untuk mendapatkan semua todos
    public function getAllTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY due_date ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateTodoStatus($id, $is_completed) {
        $query = "UPDATE " . $this->table_name . " SET is_completed = :is_completed WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":is_completed", $is_completed);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function deleteTodo($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    /**
     * Mengedit todo berdasarkan ID
     * 
     * @param int $id ID dari todo yang akan diedit
     * @param string $newTask Teks tugas baru
     * @return boolean
     */
    public function editTodo($id, $newTask) {
        $query = "UPDATE " . $this->table_name . " SET task = :task WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':task', $newTask);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>