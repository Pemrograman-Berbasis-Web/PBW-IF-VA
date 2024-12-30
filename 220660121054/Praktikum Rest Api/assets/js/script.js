$(document).ready(function () {
    /**
     * Load todos from the server and render them in the UI.
     */
    function loadTodos() {
        $('#todo-list tbody').html('<tr><td colspan="5">Loading...</td></tr>'); // Adjusted colspan to 5

        $.get('api.php?action=list', function (response) {
            var todoList = $('#todo-list tbody');
            var todoHistory = $('#todo-history tbody');
            todoList.empty();
            todoHistory.empty();

            if (Array.isArray(response)) {
                response.forEach(function (todo) {
                    if (!todo.is_completed) {
                        var row = $('<tr>').append(
                            $('<td>').text(todo.id),
                            $('<td>').text(todo.nama),
                            $('<td>').text(todo.task),
                            $('<td>').text(todo.created_at),
                            $('<td>').addClass('actions').append(
                                $('<button>')
                                    .addClass('action-btn complete-btn')
                                    .data('id', todo.id)
                                    .text('Mark as Completed'),
                                $('<button>')
                                    .addClass('action-btn delete-btn')
                                    .data('id', todo.id)
                                    .text('Delete')
                            )
                        );
                        todoList.append(row);
                    }

                    var historyRow = $('<tr>').append(
                        $('<td>').text(todo.id),
                        $('<td>').text(todo.nama),
                        $('<td>').text(todo.task),
                        $('<td>').text(todo.is_completed ? 'Completed' : 'Pending'),
                        $('<td>').text(todo.created_at)
                    );
                    todoHistory.append(historyRow);
                });
            } else {
                alert('Invalid data received from the server.');
                console.error('Invalid response:', response);
            }
        }).fail(function (error) {
            alert('Failed to load todos. Please try again.');
            console.error('Error loading todos:', error);
        });
    }

    /**
     * Handle form submission for adding a new todo.
     */
    $('#add-form').submit(function (e) {
        e.preventDefault();

        var nama = $('#nama').val().trim();
        var task = $('#task').val().trim();

        if (nama && task) {
            $.ajax({
                url: 'api.php?action=add',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ nama: nama, task: task }),
                beforeSend: function () {
                    $('#add-form button[type="submit"]').text('Adding...').prop('disabled', true);
                },
                success: function (response) {
                    if (response && response.message) {
                        alert(response.message);
                    }
                    $('#nama').val('');
                    $('#task').val('');
                    loadTodos();
                },
                error: function (error) {
                    alert('Failed to add todo. Please try again.');
                    console.error('Error adding todo:', error);
                },
                complete: function () {
                    $('#add-form button[type="submit"]').text('Add Todo').prop('disabled', false);
                }
            });
        } else {
            alert('Both Name and Task fields are required.');
        }
    });

    /**
     * Handle marking a todo as completed.
     */
    $(document).on('click', '.complete-btn', function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'api.php?action=complete',
            type: 'PUT',
            contentType: 'application/json',
            data: JSON.stringify({ id: id }),
            success: function (response) {
                if (response && response.message) {
                    alert(response.message);
                }
                loadTodos();
            },
            error: function (error) {
                alert('Failed to mark todo as completed. Please try again.');
                console.error('Error marking todo as completed:', error);
            }
        });
    });

    /**
     * Handle deleting a todo.
     */
    $(document).on('click', '.delete-btn', function () {
        var id = $(this).data('id');
        if (confirm('Are you sure you want to delete this task?')) {
            $.ajax({
                url: 'api.php?action=delete',
                type: 'DELETE',
                contentType: 'application/json',
                data: JSON.stringify({ id: id }),
                success: function (response) {
                    if (response && response.message) {
                        alert(response.message);
                    }
                    loadTodos();
                },
                error: function (error) {
                    alert('Failed to delete todo. Please try again.');
                    console.error('Error deleting todo:', error);
                }
            });
        }
    });

    // Load todos on page load
    loadTodos();
});
