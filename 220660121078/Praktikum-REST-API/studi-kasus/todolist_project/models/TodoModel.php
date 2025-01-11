<?php
require_once 'core/Database.php';

class TodoModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllTodos($sort = 'created_at') {
        $query = "SELECT * FROM todos ORDER BY $sort";
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTodoById($id) {
      $query = "SELECT * FROM todos WHERE id = :id LIMIT 1";
      $stmt = $this->db->prepare($query);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
  }  

    public function createTodo($title, $description) {
        $query = "INSERT INTO todos (title, description) VALUES (:title, :description)";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['title' => $title, 'description' => $description]);
    }

    public function deleteTodo($id) {
        $query = "DELETE FROM todos WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
    }
    
  public function updateStatus($id, $status) {
    $query = "UPDATE todos SET status = :status WHERE id = :id";
    $stmt = $this->db->prepare($query);
    $stmt->execute(['status' => $status, 'id' => $id]);
}

}
?>
