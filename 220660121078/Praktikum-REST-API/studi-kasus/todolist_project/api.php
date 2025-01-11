<?php

// Aktifkan error reporting untuk debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'controllers/TodoController.php';
header('Content-Type: application/json');

$controller = new TodoController();
$action = $_GET['action'] ?? null;

switch ($action) {
    case 'list':
        echo json_encode($controller->getAllTodos());
        break;

    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            if (!empty($inputData['title']) && !empty($inputData['description'])) {
                $controller->create($inputData);
                echo json_encode(['message' => 'Todo added successfully']);
            } else {
                echo json_encode(['error' => 'Title and description are required']);
            }
        }
        break;

    case 'delete':
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            if (isset($inputData['id'])) {
                $controller->delete($inputData['id']);
                echo json_encode(['message' => 'Todo deleted successfully']);
            } else {
                echo json_encode(['error' => 'ID is required']);
            }
        }
        break;

    case 'toggleStatus':
        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            if (isset($inputData['id'])) {
                $controller->toggleStatus($inputData['id']);
                echo json_encode(['message' => 'Status updated successfully']);
            } else {
                echo json_encode(['error' => 'ID is required']);
            }
        }
        break;

    default:
        echo json_encode(['error' => 'Invalid action']);
        break;
}
