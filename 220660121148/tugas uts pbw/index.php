<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        ul { list-style: none; padding: 0; }
        li { padding: 10px; border: 1px solid #ddd; margin-bottom: 5px; }
    </style>
</head>
<body>
    <h1>To-Do List</h1>
    <input type="text" id="todoTitle" placeholder="New Todo">
    <button onclick="addTodo()">Add</button>
    <ul id="todoList"></ul>

    <script>
        const apiBase = './api/todos';

        function fetchTodos() {
            fetch(`{apiBase}/read.php`)
                .then(response => response.json())
                .then(data => {
                    const todoList = document.getElementById('todoList');
                    todoList.innerHTML = '';
                    data.forEach(todo => {
                        todoList.innerHTML += `
                            <li>
                                <input type="checkbox" {todo.completed ? 'checked' : ''} onclick="toggleComplete(${todo.id}, ${!todo.completed})">
                                {todo.title}
                                <button onclick="deleteTodo({todo.id})">Delete</button>
                            </li>
                        `;
                    });
                });
        }

        function addTodo() {
            const title = document.getElementById('todoTitle').value;
            if (title) {
                fetch(`${apiBase}/create.php`, {
                    method: 'POST',
                    body: JSON.stringify({ title }),
                    headers: { 'Content-Type': 'application/json' },
                }).then(() => {
                    document.getElementById('todoTitle').value = '';
                    fetchTodos();
                });
            }
        }

        function toggleComplete(id, completed) {
            fetch(`{apiBase}/update.php`, {
                method: 'POST',
                body: JSON.stringify({ id, completed }),
                headers: { 'Content-Type': 'application/json' },
            }).then(fetchTodos);
        }

        function deleteTodo(id) {
            fetch(`{apiBase}/delete.php`, {
                method: 'POST',
                body: JSON.stringify({ id }),
                headers: { 'Content-Type': 'application/json' },
            }).then(fetchTodos);
        }

        fetchTodos();
    </script>
</body>
</html>
