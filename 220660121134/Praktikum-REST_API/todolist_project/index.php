<?php
// index.php

require_once 'controllers/TodoController.php';

$controller = new TodoController();
$action = $_GET['action'] ?? null;

switch ($action) {
    case 'add':
        $title = $_POST['title'] ?? '';
        $deadline = $_POST['deadline'] ?? ''; // Add this line
        $description = $_POST['description'] ?? '';
        $controller->add($title, $deadline, $description);
        break;
    
    case 'complete':
        $id = $_GET['id'] ?? '';
        $controller->markAsCompleted($id);
        break;
    case 'pending':
        $id = $_GET['id'] ?? '';
        $controller->markAsPending($id);
        break;
        
    case 'delete':
        $id = $_GET['id'] ?? '';
        $controller->delete($id);
        break;

    case 'update':
        $id = $_POST['id'] ?? '';
        $title = $_POST['title'] ?? '';
        $deadline = $_POST['deadline'] ?? '';
        $description = $_POST['description'] ?? '';
        $controller->update($id, $title, $deadline, $description);
        break;
        
}

$todos = $controller->index();
require 'views/listTodos.php';
?>