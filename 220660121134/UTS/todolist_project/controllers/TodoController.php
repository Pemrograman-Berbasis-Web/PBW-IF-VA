<?php
require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        return $this->model->getAllTodos();
    }

    public function add($title, $deadline, $description) {
        return $this->model->createTodo($title, $deadline, $description);
    }

    public function markAsCompleted($id) {
        return $this->model->updateTodoStatus($id, 1);
    }

    public function markAsPending($id) {
        return $this->model->updateTodoStatus($id, 0);
    }

    public function delete($id) {
        return $this->model->deleteTodo($id);
    }

    public function update($id, $title, $deadline, $description) {
        return $this->model->updateTodoDetails($id, $title, $deadline, $description);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'update') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $deadline = $_POST['deadline'];
    $description = $_POST['description'];

    $todoController = new TodoController();
    $todoController->update($id, $title, $deadline, $description);
}
?>
