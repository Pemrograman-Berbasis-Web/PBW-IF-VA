<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Todo</h1>
        <ul class="todo-list">
            <?php foreach ($todos as $todo): ?>
                <li class="<?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                    <?php
                        echo $todo['task'];
                        if (!$todo['is_completed']) {
                            echo ' <a class="complete-btn" href="?action=complete&id=' . $todo['id'] . '">Mark as completed</a>';
                        }
                        echo ' <a class="delete-btn" href="?action=delete&id=' . $todo['id'] . '">Delete</a>';
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <form method="POST" action="?action=add" class="add-form">
            <input type="text" name="task" placeholder="New Task" required>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
