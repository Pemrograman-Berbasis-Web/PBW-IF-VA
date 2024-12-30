<?php

class TodoController
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=todolist", "root", "");
    }

    // Fungsi untuk mendapatkan semua todo
    public function getTodos()
    {
        $stmt = $this->pdo->query("SELECT * FROM todos ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fungsi untuk menambahkan todo baru
    public function addTodo($text)
    {
        $stmt = $this->pdo->prepare("INSERT INTO todos (text, completed) VALUES (:text, :completed)");
        return $stmt->execute([
            ':text' => $text,
            ':completed' => false,
        ]);
    }

    // Fungsi untuk menghapus todo berdasarkan ID
    public function deleteTodo($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM todos WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    // Fungsi untuk mengubah status selesai
    public function toggleTodo($id, $completed)
    {
        $stmt = $this->pdo->prepare("UPDATE todos SET completed = :completed WHERE id = :id");
        return $stmt->execute([
            ':completed' => $completed,
            ':id' => $id,
        ]);
    }
}
