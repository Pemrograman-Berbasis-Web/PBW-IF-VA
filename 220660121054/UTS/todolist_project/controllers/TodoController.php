<?php
// controllers/TodoController.php

require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        try {
            return $this->model->getAllTodos();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function add($task) {
        if (empty($task)) {
            echo "Task tidak boleh kosong.";
            return null;
        }
        try {
            return $this->model->createTodo($task);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function markAsCompleted($id) {
        if (!is_numeric($id)) {
            echo "ID tidak valid.";
            return null;
        }
        try {
            return $this->model->updateTodoStatus($id, 1);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function delete($id) {
        if (!is_numeric($id)) {
            echo "ID tidak valid.";
            return null;
        }
        try {
            return $this->model->deleteTodo($id);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}
?>
