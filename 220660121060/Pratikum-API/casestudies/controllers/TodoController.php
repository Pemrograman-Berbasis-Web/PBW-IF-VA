<?php
// controllers/TodoController.php

require_once 'models/TodoModel.php';

class TodoController {
    private $model;

    /**
     * Konstruktor untuk inisialisasi model Todo
     */
    public function __construct() {
        $this->model = new TodoModel();
    }

    /**
     * Fungsi untuk mengambil semua todo
     * @return array
     */
    public function index() {
        return $this->model->getAllTodos();
    }

    /**
     * Fungsi untuk menambahkan todo baru
     * @param string $task
     * @return mixed
     */
    public function add($task) {
        return $this->model->createTodo($task);
    }

    /**
     * Fungsi untuk menandai todo sebagai selesai
     * @param int $id
     * @return mixed
     */
    public function markAsCompleted($id) {
        return $this->model->updateTodoStatus($id, 1);
    }

    /**
     * Fungsi untuk menghapus todo
     * @param int $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->deleteTodo($id);
    }
}