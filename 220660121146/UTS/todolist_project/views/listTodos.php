<!-- views/listTodos.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>

</head>

<!-- views/listTodos.php -->
<body>
    <div class="container">
        <!-- Judul dalam dua kolom -->
        <header class="header">
            <div class="title-column">
                <h1>Todo List</h1>
            </div>
            <div class="date-column">
                <p class="date">Your Tasks</p>
            </div>
        </header>
        
        <!-- Daftar Todo -->

        <ul>
        <?php foreach ($todos as $todo): ?>
            <li class="<?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                <span class="task-text"><?php echo $todo['task']; ?></span>
                <?php if (!$todo['is_completed']): ?>
                    <a href="?action=complete&id=<?php echo $todo['id']; ?>" class="complete-btn"><i class="fas fa-check"></i> Mark as completed</a>
                <?php endif; ?>
                <a href="?action=delete&id=<?php echo $todo['id']; ?>" class="delete-btn"><i class="fas fa-trash-alt"></i> Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>



        <!-- Form untuk menambahkan tugas baru -->
        <form method="POST" action="?action=add" class="task-form">
            <input type="text" name="task" placeholder="New Task">
            <button type="submit"><i class="fas fa-plus"></i> Add</button>
        </form>
    </div>
</body>

</html>
