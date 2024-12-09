<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" type="text/css" href="/virzan_rest-api/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/virzan_rest-api/assets/js/script.js" defer></script>
</head>
<body>
    <h1> 🔥 🌟 𒆜  Todo List REST API  𒆜 🌟 🔥</h1>
    
    <div class="form-container">
    <form id="add-form">
    <input type="text" id="nama" placeholder="Name" />
    <input type="text" id="task" placeholder="New Task" />
    <button type="submit">Add</button>
</form>


    </div>

    <div class="todo-wrapper">
        <div class="table-container active-todo">
            <h2 class="active-todo-header">Active Todo List</h2>
            <table id="todo-list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Task</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <div class="table-container history-container">
            <h2>Todo History</h2>
            <table id="todo-history">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>


    <footer>
        <p>&copy; 2024 Virzan Pasa Nugraha. All Rights Reserved.</p>
    </footer>
</body>
</html>
