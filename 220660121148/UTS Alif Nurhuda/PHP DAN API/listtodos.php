<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="todo-container">
        <h1>Todo List</h1>
        <form action="index.php?action=add" method="POST">
            <input type="text" name="text" placeholder="Tambah tugas baru..." required>
            <button type="submit">Tambah</button>
        </form>
        <ul>
            <?php foreach ($todos as $todo): ?>
                <li class="<?= $todo['completed'] ? 'completed' : '' ?>">
                    <span><?= htmlspecialchars($todo['text']) ?></span>
                    <form action="index.php?action=toggle" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                        <input type="hidden" name="completed" value="<?= $todo['completed'] ? 0 : 1 ?>">
                        <button type="submit"><?= $todo['completed'] ? 'Batalkan' : 'Selesai' ?></button>
                    </form>
                    <a href="index.php?action=delete&id=<?= $todo['id'] ?>" class="delete-btn">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
