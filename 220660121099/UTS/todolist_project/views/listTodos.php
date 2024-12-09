<!-- views/listTodos.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Link to external CSS for styling -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Link to external JavaScript file -->
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="title">Todo-List</h1>
        <!-- Form for adding new task -->
        <form method="POST" action="?action=add" class="add-task-form">
            <input type="text" name="task" class="new-task-input" placeholder="Add a new task">
            <button type="submit" class="add-task-button">Add</button>
        </form>
        <!-- Todo list -->
        <ul class="todo-list">
            <?php foreach ($todos as $todo): ?>
                <li class="todo-item<?php echo $todo['is_completed'] ? ' completed' : ''; ?>">
                    <?php
                        // Display task description
                        echo '<span class="task">' . $todo['task'] . '</span>';

                        // Show button to mark as completed if the task is not completed
                        if (!$todo['is_completed']) {
                            echo ' <button class="btn mark-completed" onclick="location.href=\'?action=complete&id=' . $todo['id'] . '\'">Mark as Completed</button>';
                        }

                        // Show button to delete task
                        echo ' <button class="btn delete" onclick="location.href=\'?action=delete&id=' . $todo['id'] . '\'">Delete</button>';
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
