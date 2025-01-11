<?php
require_once './models/TodoModel.php';

class TodoController {
    private $todoModel;

    public function __construct() {
        $this->todoModel = new TodoModel();
    }

    public function index() {
        $todos = $this->todoModel->getAllTodos();
        require './views/ListTodo.php';
    }

    public function add($title) {
        $this->todoModel->addTodo($title);
        header('Location: index.php');
    }

    public function delete($id) {
        $this->todoModel->deleteTodo($id);
        header('Location: index.php');
    }
}
?>
