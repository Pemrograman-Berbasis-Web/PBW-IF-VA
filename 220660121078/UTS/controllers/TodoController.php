<?php
require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        $todos = $this->model->getAllTodos();
        require 'views/listTodos.php';
    }

    public function create() {
        if (!empty($_POST['title']) && !empty($_POST['description'])) {
            $this->model->createTodo(
                $_POST['title'],
                $_POST['description']
            );
            $_SESSION['status'] = ['message' => 'Todo added successfully!', 'type' => 'success'];
        }
        header("Location: index.php");
        exit;
    }    

    public function update() {
        $this->model->updateTodo(
            $_POST['id'],
            $_POST['title'],
            $_POST['description'],
            isset($_POST['status']) ? 1 : 0
        );
				$_SESSION['status'] = ['message' => 'Todo updated successfully!', 'type' => 'success'];
        header("Location: index.php");
    }

    public function delete($id) {
        $this->model->deleteTodo($id);
				$_SESSION['status'] = ['message' => 'Todo deleted successfully!', 'type' => 'success'];
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
				$_SESSION['status'] = ['message' => 'Todo changed successfully!', 'type' => 'success'];
        header("Location: index.php");
    }
}
?>
