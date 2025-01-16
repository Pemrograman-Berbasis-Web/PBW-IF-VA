<?php
require 'config.php';

$stmt = $conn->prepare("SELECT * FROM tasks");
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <form action="add.php" method="POST">
        <input type="text" name="task" placeholder="Tambah tugas baru" required>
        <button type="submit">Tambah</button>
    </form>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <span class="<?= $task['is_complete'] ? 'complete' : '' ?>">
                    <?= htmlspecialchars($task['task']); ?>
                </span>
                <a href="complete.php?id=<?= $task['id']; ?>">Selesai</a>
                <a href="edit.php?id=<?= $task['id']; ?>">Edit</a>
                <a href="delete.php?id=<?= $task['id']; ?>">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
