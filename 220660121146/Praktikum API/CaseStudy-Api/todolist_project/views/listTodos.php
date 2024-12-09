<!-- views/listTodos.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
    <!-- Menyertakan jQuery dari CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Header dengan dua kolom -->
        <header class="header">
            <div class="title-column">
                <h1>Todo List</h1>
            </div>
            <div class="date-column">
                <p class="date">Your Tasks</p>
            </div>
        </header>
        
        <!-- Daftar Todo -->
        <ul id="todo-list">
            <?php foreach ($todos as $todo): ?>
                <li class="<?php echo $todo['is_completed'] ? 'completed' : ''; ?>" id="todo-<?php echo $todo['id']; ?>">
                    <span class="task-text"><?php echo $todo['task']; ?></span>
                    <?php if (!$todo['is_completed']): ?>
                        <a href="?action=complete&id=<?php echo $todo['id']; ?>" class="complete-btn"><i class="fas fa-check"></i> Mark as completed</a>
                    <?php endif; ?>
                    <a href="?action=delete&id=<?php echo $todo['id']; ?>" class="delete-btn"><i class="fas fa-trash-alt"></i> Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Form untuk menambahkan tugas baru -->
        <form id="add-form" method="POST" action="?action=add" class="task-form">
            <input type="text" name="task" id="task" placeholder="New Task">
            <button type="submit"><i class="fas fa-plus"></i> Add</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            // Fungsi untuk memuat semua todo dari API
            function loadTodos() {
                $.get('api.php?action=list', function(data) {
                    var todoList = $('#todo-list');
                    todoList.empty();
                    data.forEach(function(todo) {
                        var li = $('<li>').attr('id', 'todo-' + todo.id);
                        li.addClass(todo.is_completed ? 'completed' : '');
                        li.append('<span class="task-text">' + todo.task + '</span>');
                        
                        if (!todo.is_completed) {
                            li.append(' <a href="#" class="complete" data-id="' + todo.id + '"><i class="fas fa-check"></i> Mark as completed</a>');
                        }
                        li.append(' <a href="#" class="delete" data-id="' + todo.id + '"><i class="fas fa-trash-alt"></i> Delete</a>');
                        
                        todoList.append(li);
                    });
                });
            }

            // Add todo
            $('#add-form').submit(function(e) {
                e.preventDefault();
                var task = $('#task').val();
                $.post('api.php?action=add', JSON.stringify({task: task}), function() {
                    $('#task').val('');
                    loadTodos();
                });
            });

            // Complete todo
            $(document).on('click', '.complete', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=complete',
                    type: 'PUT',
                    data: JSON.stringify({id: id}),
                    success: loadTodos
                });
            });

            // Delete todo
            $(document).on('click', '.delete', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=delete',
                    type: 'DELETE',
                    data: JSON.stringify({id: id}),
                    success: loadTodos
                });
            });

            // Initial load
            loadTodos();
        });
    </script>
</body>
</html>
