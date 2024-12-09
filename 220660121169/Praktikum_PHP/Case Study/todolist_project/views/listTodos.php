<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <ul>
            <?php foreach ($todos as $todo): ?>
                <li>
                    <?php
                        echo $todo['task'];
                        if (!$todo['is_completed']) {
                            echo ' <a href="?action=complete&id=' . $todo['id'] . '">Mark as completed</a>';
                        }
                        echo ' <a href="?action=delete&id=' . $todo['id'] . '">Delete</a>';
                    ?>
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
