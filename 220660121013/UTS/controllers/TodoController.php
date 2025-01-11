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

    public function add($task) {
        return $this->model->createTodo($task);
    }

    public function edit($id, $task) {
        return $this->model->updateTodoTask($id, $task);
    }

    public function markAsCompleted($id) {
        return $this->model->updateTodoStatus($id, 1);
    }

    public function delete($id) {
        return $this->model->deleteTodo($id);
    }
}
?>
