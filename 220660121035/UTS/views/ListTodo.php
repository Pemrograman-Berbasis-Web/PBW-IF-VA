<!-- views/listTodos.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
    <div class="container">
        <h1>Todo List</h1>
        <form method="POST" action="?action=add">
            <input type="text" name="task" placeholder="New Task">
            <button type="submit">Add</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Aktivitas</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $todo): ?>
                    <tr class="<?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                        <td><?php echo htmlspecialchars($todo['task']); ?></td>
                        <td class="actions">
                            <?php if (!$todo['is_completed']): ?>
                                <a href="?action=complete&id=<?php echo $todo['id']; ?>" class="complete">☐</a>
                            <?php endif; ?>
                        </td>
                        <td class="created-at"><?php echo htmlspecialchars($todo['created_at']); ?></td> 
                        <td class="updated-at"><?php echo htmlspecialchars($todo['updated_at']); ?></td>
                        <td class="actions">
                            <a href="?action=delete&id=<?php echo $todo['id']; ?>" class="delete">
                                <img src="images/delete.png" alt="Delete" class="delete-icon">
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="assets/Js/script.js"></script>
</body>
</html>