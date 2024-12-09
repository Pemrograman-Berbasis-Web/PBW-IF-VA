<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <h1>Todo List</h1>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li class="<?= $todo['is_completed'] ? 'completed' : '' ?>">
                <input type="checkbox" 
                       class="todo-checkbox" 
                       data-id="<?= $todo['id'] ?>" 
                       <?= $todo['is_completed'] ? 'checked' : '' ?>>
                <span><?= $todo['task'] ?></span>
                <?php
                    // Tampilkan link untuk menghapus Todo dengan kelas delete-btn
                    echo '<a href="?action=delete&id=' . $todo['id'] . '" class="delete-btn">Delete</a>';
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
    <!-- Modal (popup konfirmasi) -->
<div id="deleteModal" class="modal">
    <div class="modal-content">
        <p>Are you sure you want to delete this task?</p>
        <button id="confirmDelete">Yes</button>
        <button class="cancel" id="cancelDelete">No</button>
    </div>
</div>

    <form method="POST" action="?action=add">
        <input type="text" name="task" placeholder="New Task">
        <button type="submit">Add</button>
    </form>
</body>
</html>
