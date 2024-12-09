<?php
require_once 'controllers/TodoController.php';

$controller = new TodoController();
$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            $controller->create($inputData);
        }
        break;

    case 'edit':
        $controller->edit($id);
        break;

    case 'update':
        $controller->update();
        break;

    case 'delete':
        $controller->delete($id);
        break;

    case 'toggleStatus':
        $controller->toggleStatus($id);
        break;

    case 'list':
    default:
        // Get all todos and display them
        $todos = $controller->getAllTodos();
        require 'views/listTodos.php';
        break;
}
?>
