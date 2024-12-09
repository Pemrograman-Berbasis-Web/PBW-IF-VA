<!-- views/listTodos.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?php echo $todo['task']; ?>

                <?php if (!$todo['is_completed']): ?>
                    <a href="?action=complete&id=<?php echo $todo['id']; ?>">Mark as completed</a>
                <?php endif; ?>

                <a href="?action=delete&id=<?php echo $todo['id']; ?>">Delete</a>
                
                <!-- Form untuk mengedit tugas -->
                <a href="?action=edit&id=<?php echo $todo['id']; ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <form method="POST" action="?action=add">
        <input type="text" name="task" placeholder="New Task" required>
        <button type="submit">Add</button>
    </form>

    <?php if (isset($_GET['action']) && $_GET['action'] == 'edit'): ?>
        <!-- Form edit jika action = edit -->
        <?php
        $id = $_GET['id'];
        $task = ''; // Ambil tugas yang ingin diedit berdasarkan ID
        foreach ($todos as $todo) {
            if ($todo['id'] == $id) {
                $task = $todo['task'];
                break;
            }
        }
        ?>
        <form method="POST" action="?action=update&id=<?php echo $id; ?>">
            <input type="text" name="task" value="<?php echo $task; ?>" required>
            <button type="submit">Update</button>
        </form>
    <?php endif; ?>
</body>
</html>
