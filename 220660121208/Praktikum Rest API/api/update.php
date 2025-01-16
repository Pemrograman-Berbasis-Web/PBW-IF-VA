<?php
require '../config.php';

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id']) && isset($data['task'])) {
    $id = $data['id'];
    $task = $data['task'];

    $stmt = $conn->prepare("UPDATE tasks SET task = :task WHERE id = :id");
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Task updated successfully']);
    } else {
        echo json_encode(['error' => 'Failed to update task']);
    }
} else {
    echo json_encode(['error' => 'Invalid input']);
}
?>
