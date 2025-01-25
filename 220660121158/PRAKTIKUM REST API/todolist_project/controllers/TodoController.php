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
        // Ambil semua todo dari model
        return $this->model->getAllTodos();
    }

    /**
     * Fungsi untuk menambahkan todo baru
     * @param string $task
     * @return void
     */
    public function add($task) {
        // Pastikan task tidak kosong sebelum ditambahkan
        if (!empty(trim($task))) {
            $this->model->createTodo($task);
        }
    }

    /**
     * Fungsi untuk menandai todo sebagai selesai
     * @param int $id
     * @return void
     */
    public function markAsCompleted($id) {
        // Pastikan ID valid sebelum diupdate
        if (is_numeric($id) && $id > 0) {
            $this->model->updateTodoStatus($id, 1);
        }
    }

    /**
     * Fungsi untuk menghapus todo
     * @param int $id
     * @return void
     */
    public function delete($id) {
        // Pastikan ID valid sebelum dihapus
        if (is_numeric($id) && $id > 0) {
            $this->model->deleteTodo($id);
        }
    }
}