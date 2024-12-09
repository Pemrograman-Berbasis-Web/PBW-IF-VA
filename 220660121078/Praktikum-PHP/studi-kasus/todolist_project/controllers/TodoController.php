<?php
require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        $sort = $_GET['sort'] ?? 'created_at';
        $todos = $this->model->getAllTodos($sort);
        require 'views/listTodos.php';
    }

    public function create() {
        if (!empty($_POST['title']) && !empty($_POST['description'])) {
            $this->model->createTodo(
                $_POST['title'],
                $_POST['description']
            );
        }
        header("Location: index.php");
    }

    public function edit($id) {
        $todo = $this->model->getTodoById($id);
        require 'views/edit_todo.php';
    }

    public function update() {
        $this->model->updateTodo(
            $_POST['id'],
            $_POST['title'],
            $_POST['description'],
            isset($_POST['status']) ? 1 : 0
        );
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->deleteTodo($id);
        header("Location: index.php");
    }

    public function search() {
      $keyword = $_GET['keyword'] ?? '';
      $todos = $this->model->searchTodos($keyword);
      require 'views/listTodos.php';
  }

  public function toggleStatus($id) {
    $todo = $this->model->getTodoById($id);
    $newStatus = $todo['status'] ? 0 : 1; // Toggle status
    $this->model->updateStatus($id, $newStatus);
    header("Location: index.php");
}
  
}
?>
