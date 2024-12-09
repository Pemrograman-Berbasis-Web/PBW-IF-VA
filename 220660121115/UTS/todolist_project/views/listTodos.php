<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- CSS yang sudah diperbarui -->
    <script src="assets/js/script.js"></script> <!-- JavaScript -->
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <ul>
            <?php foreach ($todos as $todo): ?>
                <li>
                    <span class="task"><?php echo htmlspecialchars($todo['task']); ?></span>
                    <?php if (!$todo['is_completed']): ?>
                        <a href="?action=complete&id=<?php echo $todo['id']; ?>">Mark as completed</a>
                    <?php endif; ?>
                    <a href="?action=delete&id=<?php echo $todo['id']; ?>">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <form method="POST" action="?action=add">
            <input type="text" name="task" placeholder="New Task">
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
