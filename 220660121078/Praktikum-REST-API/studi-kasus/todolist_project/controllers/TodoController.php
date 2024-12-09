<?php
require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function getAllTodos() {
        return $this->model->getAllTodos();
    }

    public function create($data) {
        $title = $data['title'];
        $description = $data['description'];
        $this->model->createTodo($title, $description);
    }

    public function delete($id) {
        $this->model->deleteTodo($id);
    }

    public function toggleStatus($id) {
        $todo = $this->model->getTodoById($id);
        $newStatus = $todo['status'] ? 0 : 1;
        $this->model->updateStatus($id, $newStatus);
    }
}
