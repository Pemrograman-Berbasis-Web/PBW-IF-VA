<?php
require_once 'core/Database.php';

class TodoModel {
    private $conn;
    private $table_name = "todos";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllTodos() {
        $query = "SELECT * FROM {$this->table_name} ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createTodo($task) {
        $query = "INSERT INTO {$this->table_name} (task) VALUES (:task)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":task", $task);
        return $stmt->execute();
    }

    public function updateTodoTask($id, $task) {
        $query = "UPDATE {$this->table_name} SET task = :task WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":task", $task);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function updateTodoStatus($id, $is_completed) {
        $query = "UPDATE {$this->table_name} SET is_completed = :is_completed WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":is_completed", $is_completed);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function deleteTodo($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>
