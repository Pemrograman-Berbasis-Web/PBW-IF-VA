<?php
session_start();
?>
<?php
// index.php

/**
 * File ini adalah titik awal dari aplikasi.
 * Ia menggunakan kelas TodoController untuk menangani berbagai aksi
 * dan kemudian merender tampilan dengan daftar tugas.
 */

// Memanggil file TodoController.php untuk menggunakan class TodoController
require_once 'controller/TodoController.php';

$controller = new TodoController();
$action = $_GET['action'] ?? null;

// Menangani parameter aksi
switch ($action) {
    case 'add':
        // Dapatkan task dari request
        $task = $_POST['task'] ?? '';
        $dueDate = $_POST['due_date'] ?? null;
        if ($task) {
            $controller->add($task, $dueDate); // Menggunakan method add yang sudah diperbarui
        }

    case 'complete':
        // Dapatkan id dari request
        $id = $_GET['id'] ?? '';

        // Tandai tugas sebagai selesai
        $controller->markAsCompleted($id);
        break;

    case 'delete':
        // Dapatkan id dari request
        $id = $_GET['id'] ?? '';

        // Hapus tugas dari daftar
        $controller->delete($id);
        break;

    case 'update':
        $id = $_GET['id'] ?? '';
        $task = $_POST['task'] ?? '';
        if ($id && $task) {
            $controller->edit($id, $task); 
        }
        break;
}

// Dapatkan daftar tugas
$todos = $controller->index();

// Merender tampilan
require 'views/listTodos.php';