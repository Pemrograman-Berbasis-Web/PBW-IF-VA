document.addEventListener("DOMContentLoaded", function() {
    // Fungsi untuk memuat ulang daftar todos
    function loadTodos() {
        fetch('api.php?action=list')
            .then(response => response.json())
            .then(data => {
                const todoList = document.getElementById('todo-list');
                todoList.innerHTML = ''; // Kosongkan list

                data.forEach(todo => {
                    const li = document.createElement('li');
                    li.classList.add('todo-card');
                    if (todo.is_completed) li.classList.add('completed');

                    const checkbox = document.createElement('input');
                    checkbox.type = 'checkbox';
                    checkbox.classList.add('todo-checkbox');
                    checkbox.checked = todo.is_completed;
                    checkbox.dataset.id = todo.id;

                    const span = document.createElement('span');
                    span.textContent = todo.task;

                    const deleteLink = document.createElement('a');
                    deleteLink.href = '#';
                    deleteLink.classList.add('delete-btn');
                    deleteLink.textContent = 'Delete';
                    deleteLink.dataset.id = todo.id;

                    li.appendChild(checkbox);
                    li.appendChild(span);
                    li.appendChild(deleteLink);

                    todoList.appendChild(li);
                });
            });
    }

    // Fungsi untuk menandai task sebagai selesai
    document.addEventListener('change', function(event) {
        if (event.target.classList.contains('todo-checkbox')) {
            const id = event.target.dataset.id;
            const completed = event.target.checked ? 1 : 0;
            
            fetch('api.php?action=complete', {
                method: 'PUT',
                body: JSON.stringify({ id: id, is_completed: completed })
            }).then(loadTodos);
        }
    });

    // Menangani penghapusan task
    let deleteTaskId = null; // Untuk menyimpan ID task yang akan dihapus

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('delete-btn')) {
            event.preventDefault(); // Mencegah link untuk melakukan navigasi
            deleteTaskId = event.target.dataset.id;
            document.getElementById('deleteModal').style.display = 'flex'; // Tampilkan modal konfirmasi
        }
    });

    // Menangani konfirmasi penghapusan task
    document.getElementById('confirmDelete').addEventListener('click', function() {
        fetch('api.php?action=delete', {
            method: 'DELETE',
            body: JSON.stringify({ id: deleteTaskId })
        }).then(() => {
            loadTodos();
            document.getElementById('deleteModal').style.display = 'none'; // Sembunyikan modal
        });
    });

    // Menangani pembatalan penghapusan task
    document.getElementById('cancelDelete').addEventListener('click', function() {
        document.getElementById('deleteModal').style.display = 'none'; // Sembunyikan modal
    });

    // Inisialisasi: Muat todos pada awal halaman
    loadTodos();
});
