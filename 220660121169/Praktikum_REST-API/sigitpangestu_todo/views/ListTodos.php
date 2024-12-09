<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Fungsi untuk memuat semua todo dari API
            function loadTodos() {
                $.get('api.php?action=list', function (data) {
                    var todoList = $('#todo-list');
                    todoList.empty();

                    data.forEach(function (todo) {
                        var li = $('<li>');

                        // Checkbox untuk tugas selesai
                        var checkbox = $('<input type="checkbox" class="toggle-completed">')
                            .prop('checked', todo.is_completed) // Cek status selesai
                            .data('id', todo.id);

                        li.append(checkbox);
                        li.append(' ' + todo.task);

                        if (!todo.is_completed) {
                            li.append(
                                ' <a href="#" class="complete" data-id="' +
                                    todo.id +
                                    '">Mark as completed</a>'
                            );
                        }

                        li.append(
                            ' <a href="#" class="delete" data-id="' +
                                todo.id +
                                '">Delete</a>'
                        );

                        if (todo.is_completed) {
                            li.addClass('completed'); // Tambahkan kelas "completed" jika selesai
                        }

                        todoList.append(li);
                    });
                });
            }

            // Tambah todo baru
            $('#add-form').submit(function (e) {
                e.preventDefault();
                var task = $('#task').val();
                $.post('api.php?action=add', JSON.stringify({ task: task }), function () {
                    $('#task').val('');
                    loadTodos();
                });
            });

            // Toggle tugas selesai
            $(document).on('change', '.toggle-completed', function () {
                var id = $(this).data('id');
                var isCompleted = $(this).is(':checked');
                $.ajax({
                    url: 'api.php?action=toggle',
                    type: 'PUT',
                    data: JSON.stringify({ id: id, is_completed: isCompleted }),
                    success: loadTodos,
                });
            });

            // Hapus todo
            $(document).on('click', '.delete', function () {
                var id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=delete',
                    type: 'DELETE',
                    data: JSON.stringify({ id: id }),
                    success: loadTodos,
                });
            });

            // Muat todo pada inisialisasi awal
            loadTodos();
        });
    </script>
</head>
<body>
    <h1>Todo List</h1>
    <ul id="todo-list"></ul> <!-- Daftar todo -->
    <form id="add-form">
        <input type="text" id="task" placeholder="New Task"> <!-- Input untuk tugas -->
        <button type="submit">Add</button> <!-- Tombol tambah -->
    </form>
</body>
</html>
