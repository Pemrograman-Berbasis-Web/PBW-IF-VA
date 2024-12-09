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
                            echo ' ';
                            echo '<a href="javascript:void(0);" onclick="confirmComplete(' . $todo['id'] . ')">Mark as completed</a>';
                        }

                        echo ' ';
                        echo '<a href="javascript:void(0);" onclick="confirmDelete(' . $todo['id'] . ')">Delete</a>';
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- Form berada di bawah daftar To-Do -->
        <form method="POST" action="?action=add">
            <input type="text" name="task" placeholder="New Task">
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
