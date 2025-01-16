<?php
require 'config.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $stmt = $conn->prepare("UPDATE tasks SET task = :task WHERE id = :id");
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('Location: index.php');
    exit();
}

$stmt = $conn->prepare("SELECT * FROM tasks WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$task = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="" method="POST">
        <input type="text" name="task" value="<?= htmlspecialchars($task['task']); ?>" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
