<?php
require './controllers/TodoController.php';

$controller = new TodoController();

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'add':
        $title = $_POST['title'] ?? '';
        if ($title) {
            $controller->add($title);
        }
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $controller->delete($id);
        }
        break;
    default:
        $controller->index();
        break;
}
?>
