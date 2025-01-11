<!-- views/listTodos.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container"> 
        <div class="To-app">
            <h2>To-Do List <img src="images/icon.png" alt="Icon"></h2>
            <div class="row">
            <form method="POST" action="?action=add" onsubmit="return validateForm()">
                <input type="text" id="input-box" name="task" placeholder="Input Teks">
                <button type="submit">Add</button>
            </form>
            </div>
            <ul id="list-container">
                <?php foreach ($todos as $todo): ?>
                    <li class="<?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                        <!-- Ikon untuk mark as completed atau uncompleted -->
                        <span class="status-icon" onclick="window.location.href='?action=toggle&id=<?php echo $todo['id']; ?>'">
                            <img src="images/<?php echo $todo['is_completed'] ? 'checked.png' : 'unchecked.png'; ?>" alt="Status Icon">
                        </span>
                        <?php echo $todo['task']; ?>
                        
                        <!-- Ikon "X" untuk menghapus item -->
                        <span class="delete-icon" onclick="window.location.href='?action=delete&id=<?php echo $todo['id']; ?>'">✕</span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>