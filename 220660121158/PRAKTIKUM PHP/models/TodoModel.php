<?php
require_once './core/Database.php';
require_once './models/Todo.php';

class TodoModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllTodos() {
        $stmt = $this->db->query("SELECT * FROM todos");
        $todos = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $todos[] = new Todo($row['id'], $row['title']);
        }
        return $todos;
    }

    public function addTodo($title) {
        $stmt = $this->db->prepare("INSERT INTO todos (title) VALUES (:title)");
        $stmt->bindParam(':title', $title);
        $stmt->execute();
    }

    public function deleteTodo($id) {
        $stmt = $this->db->prepare("DELETE FROM todos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
