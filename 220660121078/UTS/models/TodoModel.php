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

    public function updateTodo($id, $title, $description, $status) {
        $query = "UPDATE todos SET title = :title, description = :description, status = :status WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id, 'title' => $title, 'description' => $description, 'status' => $status]);
    }

    public function deleteTodo($id) {
        $query = "DELETE FROM todos WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
    }

    public function searchTodos($keyword) {
      $query = "SELECT * FROM todos WHERE title LIKE :keyword OR description LIKE :keyword";
      $stmt = $this->db->prepare($query);
      $stmt->execute(['keyword' => "%$keyword%"]);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }  

  public function updateStatus($id, $status) {
    $query = "UPDATE todos SET status = :status WHERE id = :id";
    $stmt = $this->db->prepare($query);
    $stmt->execute(['status' => $status, 'id' => $id]);
}

}
?>
