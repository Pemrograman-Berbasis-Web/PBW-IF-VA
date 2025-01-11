<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Todo List</h1>

        <ul class="list-group mb-4">
            <?php foreach ($todos as $todo): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="<?= $todo['is_completed'] ? 'text-decoration-line-through' : ''; ?>">
                        <?= htmlspecialchars($todo['task']); ?>
                    </span>
                    <div>
                        <a href="?action=complete&id=<?= $todo['id']; ?>" class="btn btn-success btn-sm me-2">Complete</a>
                        <button class="btn btn-warning btn-sm me-2 edit-btn" data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $todo['id']; ?>" data-task="<?= htmlspecialchars($todo['task']); ?>">Edit</button>
                        <a href="?action=delete&id=<?= $todo['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Delete</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <form id="add-form" method="POST" action="?action=add" class="d-flex">
            <input type="text" name="task" class="form-control me-2" placeholder="New Task" required>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="edit-form" method="POST" action="?action=edit">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label for="edit-task" class="form-label">Task</label>
                            <input type="text" name="task" id="edit-task" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mengisi data pada modal edit
        document.addEventListener("DOMContentLoaded", () => {
            const editButtons = document.querySelectorAll('.edit-btn');
            editButtons.forEach(button => {
                button.addEventListener("click", (event) => {
                    const id = button.getAttribute("data-id");
                    const task = button.getAttribute("data-task");

                    document.getElementById("edit-id").value = id;
                    document.getElementById("edit-task").value = task;
                });
            });
        });

        // Konfirmasi sebelum menghapus todo
        function confirmDelete() {
            return confirm("Are you sure you want to delete this task?");
        }
    </script>
</body>
</html>
