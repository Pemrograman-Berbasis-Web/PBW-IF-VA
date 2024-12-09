<?php
session_start();
require_once 'controllers/TodoController.php';

$controller = new TodoController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'search':
        $controller->search();
        break;
    case 'toggleStatus':
        $controller->toggleStatus($id);
        break;
    default:
        $controller->index();
        break;
}

?>
