<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Todo List</h1>

        <form id="add-form" class="mb-4">
            <input type="text" name="title" class="form-control mb-2" placeholder="Title" required>
            <textarea name="description" class="form-control mb-2" placeholder="Description" required></textarea>
            <button type="submit" class="btn btn-primary">Add Todo</button>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="todo-table-body"></tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            function loadTodos() {
                $.ajax({
                    url: 'api.php?action=list',
                    method: 'GET',
                    success: function (data) {
                        const todoList = $('#todo-table-body');
                        todoList.empty();
                        data.forEach(todo => {
                            const status = todo.status ? 'Completed' : 'Pending';
                            const statusBtn = todo.status ? 'Mark as Pending' : 'Mark as Complete';
                            const row = `<tr>
                                <td>${todo.title}</td>
                                <td>${todo.description}</td>
                                <td>${status}</td>
                                <td>
                                    <button class="btn btn-info toggle-status" data-id="${todo.id}">${statusBtn}</button>
                                    <button class="btn btn-danger delete" data-id="${todo.id}">Delete</button>
                                </td>
                            </tr>`;
                            todoList.append(row);
                        });
                    }
                });
            }

            loadTodos();

            $('#add-form').submit(function (e) {
                e.preventDefault();
                const title = $('input[name="title"]').val();
                const description = $('textarea[name="description"]').val();

                $.ajax({
                    url: 'api.php?action=create',
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({ title, description }),
                    success: function () {
                        $('#add-form')[0].reset();
                        loadTodos();
                    }
                });
            });

            $(document).on('click', '.delete', function () {
                const id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=delete',
                    method: 'DELETE',
                    contentType: 'application/json',
                    data: JSON.stringify({ id }),
                    success: loadTodos
                });
            });

            $(document).on('click', '.toggle-status', function () {
                const id = $(this).data('id');
                $.ajax({
                    url: 'api.php?action=toggleStatus',
                    method: 'PUT',
                    contentType: 'application/json',
                    data: JSON.stringify({ id }),
                    success: loadTodos
                });
            });
        });
    </script>
</body>
</html>
