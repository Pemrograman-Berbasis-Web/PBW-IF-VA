<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <section class="todo-section">
        <h2>To-Do List</h2>
        <form class="todo-form">
            <input type="text" name="task" placeholder="Tambahkan tugas">
            <button type="submit">Tambah</button>
        </form>
        <ul class="todo-list">
            <?php foreach ($todos as $todo): ?>
                <li class="todo-item">
                    <span class="task"><?php echo $todo['task']; ?></span>
                    <div class="actions">
                        <?php if (!$todo['is_completed']): ?>
                            <button class="complete">Selesai</button>
                        <?php endif; ?>
                        <button class="delete">Hapus</button>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>