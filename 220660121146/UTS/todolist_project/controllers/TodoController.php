<?php
// controllers/TodoController.php

// Memanggil file TodoModel.php untuk menggunakan class TodoModel
require_once 'models/TodoModel.php';

/**
 * Kelas yang bertanggung jawab untuk menangani permintaan terkait TodoItems
 */
class TodoController {
    /**
     * Instans dari TodoModel
     * @var TodoModel
     */
    private $model;

    /**
     * Konstruktor untuk kelas
     */
    public function __construct() {
        $this->model = new TodoModel();
    }

    /**
     * Mengembalikan semua todo
     * @return array Sebuah array dari semua todo
     */
    public function index() {
        return $this->model->getAllTodos();
    }

    /**
     * Membuat todo baru
     * @param string $task Teks dari tugas
     * @return boolean Status keberhasilan operasi
     */
    public function add($task) {
        // Validasi input
        if (empty($task)) {
            throw new Exception("Tugas tidak boleh kosong.");
        }
        $result = $this->model->createTodo($task);
        if (!$result) {
            throw new Exception("Gagal menambahkan todo.");
        }
        return $result;
    }

    /**
     * Menandai todo sebagai selesai
     * @param int $id ID dari todo yang akan ditandai sebagai selesai
     * @return boolean Status keberhasilan operasi
     */
    public function markAsCompleted($id) {
        // Validasi input
        if (empty($id) || !is_numeric($id)) {
            throw new Exception("ID tidak valid.");
        }
        $result = $this->model->updateTodoStatus($id, 1);
        if (!$result) {
            throw new Exception("Gagal menandai todo sebagai selesai.");
        }
        return $result;
    }

    /**
     * Menghapus todo
     * @param int $id ID dari todo yang akan dihapus
     * @return boolean Status keberhasilan operasi
     */
    public function delete($id) {
        // Validasi input
        if (empty($id) || !is_numeric($id)) {
            throw new Exception("ID tidak valid.");
        }
        $result = $this->model->deleteTodo($id);
        if (!$result) {
            throw new Exception("Gagal menghapus todo.");
        }
        return $result;
    }
}
