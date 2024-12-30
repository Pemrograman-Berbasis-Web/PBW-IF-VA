$(document).ready(function() {
    // Fungsi untuk memuat semua todo dari API
    function loadTodos() {
        $.get('api.php?action=list', function(data) {
            var todoList = $('#todo-list');
            todoList.empty();
            data.forEach(function(todo) {
                var li = $('<li class="fadeIn">').text(todo.task);
                if (!todo.is_completed) {
                    li.append(
                        ' <a href="#" class="complete" data-id="' + todo.id + '">Mark as completed</a>'
                    );
                }
                li.append(
                    ' <a href="#" class="delete" data-id="' + todo.id + '">Delete</a>'
                );
                todoList.append(li);
            });
        });
    }

    // Fungsi untuk menambahkan todo baru
    $('#add-form').submit(function(e) {
        e.preventDefault();
        var task = $('#task').val().trim();
        if (task === '') {
            alert('Task cannot be empty!');
            return;
        }
        $.post('api.php?action=add', JSON.stringify({ task: task }), function() {
            $('#task').val('');
            loadTodos();
        });
    });

    // Fungsi untuk menandai todo sebagai selesai
    $(document).on('click', '.complete', function() {
        var id = $(this).data('id');
        $.ajax({
            url: 'api.php?action=complete',
            type: 'PUT',
            data: JSON.stringify({ id: id }),
            success: function() {
                loadTodos();
            }
        });
    });

    // Fungsi untuk menghapus todo
    $(document).on('click', '.delete', function() {
        var id = $(this).data('id');
        if (confirm('Are you sure you want to delete this task?')) {
            $.ajax({
                url: 'api.php?action=delete',
                type: 'DELETE',
                data: JSON.stringify({ id: id }),
                success: function() {
                    loadTodos();
                }
            });
        }
    });

    // Memuat todos pada inisialisasi awal
    loadTodos();
});
