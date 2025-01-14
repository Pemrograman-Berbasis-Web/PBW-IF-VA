<?php

// Aktifkan error reporting untuk memudahkan debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// api.php

require_once 'controllers/TodoController.php';
header('Content-Type: application/json');

// Menangani aksi berdasarkan parameter 'action'
$action = $_GET['action'] ?? null;
$controller = new TodoController();

switch ($action) {
    case 'list':
        // Mendapatkan daftar semua todos
        echo json_encode($controller->index());
        break;
    case 'add':
        // Menambahkan todo baru
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputData = json_decode(file_get_contents('php://input'), true);
            if (isset($inputData['task']) && !empty($inputData['task'])) {
                $controller->add($inputData['task']);
                echo json_encode(['message' => 'Todo added successfully']);
            } else {
                echo json_encode(['message' => 'Task is required']);
            }
        } else {
            echo json_encode(['message' => 'Invalid request method. Use POST to add a todo.']);
        }
        break;
    case 'complete':
        // Menandai todo sebagai selesai
        $inputData = json_decode(file_get_contents('php://input'), true);
        if (isset($inputData['id'])) {
            $controller->markAsCompleted($inputData['id']);
            echo json_encode(['message' => 'Todo marked as completed']);
        } else {
            echo json_encode(['message' => 'ID is required']);
        }
        break;
        case 'update':
            // Mengupdate todo
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $inputData = json_decode(file_get_contents('php://input'), true);
                if (isset($inputData['id']) && isset($inputData['task']) && !empty($inputData['task'])) {
                    $controller->update($inputData['id'], $inputData['task']);
                    echo json_encode(['message' => 'Todo updated successfully']);
                } else {
                    echo json_encode(['message' => 'ID and task are required']);
                }
            } else {
                echo json_encode(['message' => 'Invalid request method. Use POST to update a todo.']);
            }
            break;
        
    case 'delete':
        // Menghapus todo
        $inputData = json_decode(file_get_contents('php://input'), true);
        if (isset($inputData['id'])) {
            $controller->delete($inputData['id']);
            echo json_encode(['message' => 'Todo deleted']);
        } else {
            echo json_encode(['message' => 'ID is required']);
        }
        break;
    default:
        echo json_encode(['message' => 'Invalid action']);
}