<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script> <!-- Include JS di sini -->
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        
        <!-- Form untuk menambahkan task baru di atas -->
        <div class="add-task">
            <form id="add-form" method="POST" action="?action=add">
                <input type="text" name="task" id="task" placeholder="New Task" required>
                <button type="submit">Add</button>
            </form>
        </div>

        <ul id="todo-list" class="todo-list">
            <?php foreach ($todos as $todo): ?>
                <li class="todo-card <?= $todo['is_completed'] ? 'completed' : '' ?>">
                    <input type="checkbox" 
                           class="todo-checkbox" 
                           data-id="<?= $todo['id'] ?>" 
                           <?= $todo['is_completed'] ? 'checked' : '' ?>>
                    <span><?= $todo['task'] ?></span>
                    <a href="?action=delete&id=<?= $todo['id'] ?>" class="delete-btn" data-id="<?= $todo['id'] ?>">Delete</a>
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
    </div>
</body>
</html>
