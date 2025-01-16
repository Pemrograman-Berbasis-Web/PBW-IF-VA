<?php
require '../config.php';

$stmt = $conn->prepare("SELECT * FROM tasks");
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($tasks);
?>
