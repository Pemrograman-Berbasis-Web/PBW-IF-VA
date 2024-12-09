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
     * @return array Todo yang baru dibuat
     */
    public function add($task, $dueDate = null) {
        // Validasi task (pastikan task tidak kosong)
        if (empty($task)) {
            return;
        }
    
        // Jika due_date kosong, kirimkan error dan arahkan kembali ke halaman utama
        if (empty($dueDate)) {
            $_SESSION['error_message'] = "Tanggal jatuh tempo harus diisi!";
            header("Location: /todolist_db"); 
            exit(); // Menghentikan eksekusi lebih lanjut
        }
    
        // Jika task berhasil ditambahkan
        if ($this->model->createTodo($task, $dueDate)) {
            $_SESSION['message'] = "Task berhasil ditambahkan!";
            header("Location: /todolist_db"); 
            exit(); // Menghentikan eksekusi lebih lanjut
        } else {
            echo "Gagal menambahkan task.";
        }
    }
    
    /**
     * Menandai todo sebagai selesai
     * @param int $id ID dari todo yang akan ditandai sebagai selesai
     * @return array Todo yang diperbarui
     */
    public function markAsCompleted($id) {
        return $this->model->updateTodoStatus($id, 1);
    }

    /**
     * Menghapus todo
     * @param int $id ID dari todo yang akan dihapus
     * @return array Todo yang dihapus
     */
    public function delete($id) {
        // Coba hapus task berdasarkan ID
        if ($this->model->deleteTodo($id)) {
            // Set pesan sukses ke session
            $_SESSION['message'] = "Task berhasil dihapus!";
            // Redirect ke halaman utama setelah task dihapus
            header("Location: /todolist_db");
            exit(); // Pastikan tidak ada kode lain yang dijalankan setelah redirect
        } else {
            echo "Gagal menghapus task.";
        }
    }
    /**
 * Mengedit todo
 * @param int $id ID dari todo yang akan diedit
 * @param string $newTask Teks tugas yang baru
 * @return array Todo yang telah diperbarui
 */
public function edit($id, $newTask) {
    return $this->model->editTodo($id, $newTask);
}

}