<?php
require '../config.php';

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id'])) {
    $id = $data['id'];

    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Task deleted successfully']);
    } else {
        echo json_encode(['error' => 'Failed to delete task']);
    }
} else {
    echo json_encode(['error' => 'Invalid input']);
}
?>
