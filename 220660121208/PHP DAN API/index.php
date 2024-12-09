<?php
require_once 'TodoController.php';

$controller = new TodoController();

$action = $_GET['action'] ?? 'list';

if ($action === 'list') {
    $todos = $controller->getTodos();
    include 'listtodos.php';
} elseif ($action === 'add') {
    $text = $_POST['text'] ?? '';
    if ($text) {
        $controller->addTodo($text);
    }
    header('Location: index.php');
    exit;
} elseif ($action === 'delete') {
    $id = $_GET['id'] ?? 0;
    if ($id) {
        $controller->deleteTodo($id);
    }
    header('Location: index.php');
    exit;
} elseif ($action === 'toggle') {
    $id = $_POST['id'] ?? 0;
    $completed = $_POST['completed'] ?? 0;
    if ($id) {
        $controller->toggleTodo($id, $completed);
    }
    header('Location: index.php');
    exit;
} else {
    echo "Aksi tidak ditemukan.";
}
