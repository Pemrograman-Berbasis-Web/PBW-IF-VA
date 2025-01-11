<?php
// index.php

/**
 * File ini adalah titik awal dari aplikasi.
 *
 * Ia menggunakan kelas TodoController untuk menangani berbagai aksi
 * dan kemudian merender tampilan dengan daftar tugas.
 */

// Memanggil file TodoController.php untuk menggunakan class TodoController
require_once 'controllers/TodoController.php';

$controller = new TodoController();
$action = $_GET['action'] ?? null;

// Menangani parameter aksi
switch ($action) {
    case 'add':
        $task = $_POST['task'] ?? '';
        $controller->add($task);
        header("Location: index.php");
        exit;
    case 'complete':
        $id = $_GET['id'] ?? '';
        $controller->markAsCompleted($id);
        header("Location: index.php");
        exit;
    case 'delete':
        $id = $_GET['id'] ?? '';
        $controller->delete($id);
        header("Location: index.php");
        exit;
    case 'toggle': // Tambahkan redirect setelah toggle
        $id = $_GET['id'] ?? '';
        $controller->toggleStatus($id);
        header("Location: index.php");
        exit;
}

// Mendapatkan daftar tugas
$todos = $controller->index();

// Merender tampilan
require 'views/listTodo.php';
