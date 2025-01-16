<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $conn->prepare("UPDATE tasks SET is_complete = 1 WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: index.php');
exit();
?>
