<?php
// Memanggil file TodoModel.php untuk menggunakan class TodoModel
require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        return $this->model->getAllTodos();
    }

    public function add($task) {
        return $this->model->createTodo($task);
    }

    public function markAsCompleted($id) {
        return $this->model->updateTodoStatus($id, 1); // 1 = completed
    }

    public function delete($id) {
        return $this->model->deleteTodo($id);
    }

    public function update($id, $task) {
        return $this->model->updateTodoTask($id, $task);
    }
}

// Handling POST request to update Todo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'update') {
    $id = $_POST['id'];       // ID dari todo yang akan diperbarui
    $task = $_POST['task'];   // Tugas baru dari form pembaruan

    // Membuat instance dari TodoController dan memanggil metode update
    $todoController = new TodoController();
    $todoController->update($id, $task);   // Memperbarui tugas dengan ID dan task baru
}
?>
