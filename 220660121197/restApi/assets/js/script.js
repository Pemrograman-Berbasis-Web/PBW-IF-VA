document.addEventListener('DOMContentLoaded', () => {
    const todoList = document.getElementById('todo-list');
    const addForm = document.getElementById('add-form');
    const taskInput = document.getElementById('task');

    // Array untuk menyimpan daftar todo
    let todos = [];

    // Fungsi untuk merender daftar todo
    function renderTodos() {
        todoList.innerHTML = ''; // Bersihkan daftar
        todos.forEach((todo, index) => {
            const li = document.createElement('li');
            li.textContent = todo.task;

            // Tandai sebagai selesai jika todo selesai
            if (todo.isCompleted) {
                li.classList.add('completed');
            }

            // Tombol tandai selesai
            const completeBtn = document.createElement('a');
            completeBtn.href = '#';
            completeBtn.textContent = 'Complete';
            completeBtn.addEventListener('click', () => {
                todos[index].isCompleted = !todos[index].isCompleted;
                renderTodos();
            });

            // Tombol hapus
            const deleteBtn = document.createElement('a');
            deleteBtn.href = '#';
            deleteBtn.textContent = 'Delete';
            deleteBtn.addEventListener('click', () => {
                todos.splice(index, 1);
                renderTodos();
            });

            // Tambahkan tombol ke item todo
            li.appendChild(completeBtn);
            li.appendChild(deleteBtn);

            // Tambahkan item ke daftar
            todoList.appendChild(li);
        });
    }

    // Tambah todo baru
    addForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const newTask = taskInput.value.trim();
        if (newTask) {
            todos.push({ task: newTask, isCompleted: false });
            taskInput.value = '';
            renderTodos();
        }
    });

    // Inisialisasi daftar kosong
    renderTodos();
});
