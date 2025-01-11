<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Tambahkan jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>

        <!-- Form New Task -->
        <form id="addForm" method="POST">
            <input type="text" id="task" name="task" placeholder="New Task" required>
            <button type="submit" class="button add-button"><i class="fas fa-plus-circle"></i> Add</button>
        </form>

        <!-- Form Update -->
        <form id="updateForm" style="display:none;">
            <input type="hidden" id="updateId" name="id">
            <input type="text" id="updateTask" name="task" placeholder="Edit Task" required>
            <button type="submit" class="button update-button"><i class="fas fa-save"></i> Update</button>
            <button type="button" class="button cancel-button" onclick="hideEditForm()">Cancel</button>
        </form>

        <!-- Daftar Tugas -->
        <ul id="todo-list"></ul>
    </div>

    <script>
        $(document).ready(function() {
            // Fungsi untuk memuat semua todo dari API
            function loadTodos() {
                $.get('api.php?action=list', function(data) {
                    var todoList = $('#todo-list');
                    todoList.empty();
                    data.forEach(function(todo) {
                        var li = $('<li>').addClass(todo.is_completed ? 'completed' : '');
                        li.append('<span class="todo-text">' + todo.task + '</span>');
                        if (!todo.is_completed) {
                            li.append('<a href="#" class="button complete" data-id="' + todo.id + '"><i class="fas fa-check-circle"></i> Mark as completed</a>');
                        }
                        li.append('<a href="#" class="button edit" data-id="' + todo.id + '" data-task="' + todo.task + '"><i class="fas fa-edit"></i> Edit</a>');
                        li.append('<a href="#" class="button delete" data-id="' + todo.id + '"><i class="fas fa-trash-alt"></i> Delete</a>');
                        todoList.append(li);
                    });
                });
            }

            // Tambah todo baru
            $('#addForm').submit(function(e) {
                e.preventDefault();
                var task = $('#task').val();
                $.post('api.php?action=add', JSON.stringify({ task: task }), function() {
                    $('#task').val('');
                    loadTodos();
                });
            });

            // Tandai todo sebagai selesai
            $(document).on('click', '.complete', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=complete',
                    type: 'PUT',
                    data: JSON.stringify({ id: id }),
                    success: loadTodos
                });
            });

            // Hapus todo
            $(document).on('click', '.delete', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=delete',
                    type: 'DELETE',
                    data: JSON.stringify({ id: id }),
                    success: loadTodos
                });
            });

            // Tampilkan form edit
            $(document).on('click', '.edit', function() {
                var id = $(this).data('id');
                var task = $(this).data('task');
                $('#updateId').val(id);
                $('#updateTask').val(task);
                $('#updateForm').show();
            });

            // Update todo
            $('#updateForm').submit(function(e) {
                e.preventDefault();
                var id = $('#updateId').val();
                var task = $('#updateTask').val();
                $.ajax({
                    url: 'api.php?action=update',
                    type: 'POST',
                    data: JSON.stringify({ id: id, task: task }),
                    success: function() {
                        $('#updateForm').hide();
                        loadTodos();
                    }
                });
            });

            // Sembunyikan form edit
            function hideEditForm() {
                $('#updateForm').hide();
            }

            // Inisialisasi dengan memuat todo
            loadTodos();
        });
    </script>
</body>
</html>
