<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function loadTodos() {
                $.get('api.php?action=list', function(data) {
                    var todoList = $('#todo-list');
                    todoList.empty(); // Kosongkan elemen <ul> setiap kali load untuk mencegah duplikasi
                    data.forEach(function(todo) {
                        var li = $('<li>').text(todo.task);
                        if (!todo.is_completed) {
                            li.append(' <a href="#" class="complete" data-id="' + todo.id + '">Mark as completed</a>');
                        }
                        li.append(' <a href="#" class="delete" data-id="' + todo.id + '">Delete</a>');
                        todoList.append(li);
                    });
                });
            }

            $('#add-form').submit(function(e) {
                e.preventDefault();
                var task = $('#task').val();
                $.post('api.php?action=add', JSON.stringify({task: task}), function() {
                    $('#task').val('');
                    loadTodos();
                });
            });

            $(document).on('click', '.complete', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=complete',
                    type: 'PUT',
                    data: JSON.stringify({id: id}),
                    success: loadTodos
                });
            });

            $(document).on('click', '.delete', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=delete',
                    type: 'DELETE',
                    data: JSON.stringify({id: id}),
                    success: loadTodos
                });
            });

            // Load todos saat halaman pertama kali dimuat
            loadTodos();
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        <!-- Daftar To-Do hanya dikelola oleh jQuery -->
        <ul id="todo-list"></ul>

        <!-- Form untuk menambahkan To-Do -->
        <form id="add-form">
            <input type="text" id="task" placeholder="New Task">
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
