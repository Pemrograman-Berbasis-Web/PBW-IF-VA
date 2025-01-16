<?php
require '../config.php';

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['task'])) {
    $task = $data['task'];
    $stmt = $conn->prepare("INSERT INTO tasks (task) VALUES (:task)");
    $stmt->bindParam(':task', $task);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Task created successfully']);
    } else {
        echo json_encode(['error' => 'Failed to create task']);
    }
} else {
    echo json_encode(['error' => 'Invalid input']);
}
?>
