<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];

    $stmt = $conn->prepare("INSERT INTO tasks (task) VALUES (:task)");
    $stmt->bindParam(':task', $task);
    $stmt->execute();

    header('Location: index.php');
    exit();
}
?>
