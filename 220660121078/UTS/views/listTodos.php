
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Todo List</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Todo List</h1>

        <!-- Form Pencarian -->
        <form action="index.php" method="GET" class="form-inline justify-content-center mb-4">
            <input type="hidden" name="action" value="search">
            <input type="text" name="keyword" class="form-control mr-2" placeholder="Search todos..." value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <!-- Form Tambah Todo -->
        <form action="?action=create" method="POST" class="mb-4">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="form-group">
                <textarea name="description" class="form-control" placeholder="Description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Todo</button>
        </form>

        <!-- Tabel Todo List -->
        <div class="table-responsive">
            <table id="todoTable" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($todos)): ?>
                        <tr>
                            <td colspan="5" class="text-center">No tasks found.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($todos as $todo): ?>
                            <tr>
                                <td><?= htmlspecialchars($todo['title']) ?></td>
                                <td><?= htmlspecialchars($todo['description']) ?></td>
                                <td>
                                    <?= $todo['status'] ? '<span class="badge badge-success">Completed</span>' : '<span class="badge badge-warning">Pending</span>' ?>
                                </td>
                                <td><?= $todo['created_at'] ?></td>
                                <td>
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal" onclick="editTodo(<?= htmlspecialchars(json_encode($todo)) ?>)">Edit</button>
                                    <a href="?action=delete&id=<?= $todo['id'] ?>" class="btn btn-sm btn-danger delete-todo">Delete</a>
                                    <a href="?action=toggleStatus&id=<?= $todo['id'] ?>" class="btn btn-sm btn-info toggle-status"><?= $todo['status'] ? 'Mark as Pending' : 'Mark as Complete' ?></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Box Edit Todo -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Todo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="?action=update" method="POST" id="editTodoForm">
                        <input type="hidden" name="id" id="editTodoId">
                        <div class="form-group">
                            <label for="editTitle">Title</label>
                            <input type="text" name="title" id="editTitle" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editDescription">Description</label>
                            <textarea name="description" id="editDescription" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="status" id="editStatus" class="form-check-input">
                            <label for="editStatus" class="form-check-label">Completed</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Todo</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script> <!-- External JavaScript File -->

    <script>
        $(document).ready(function () {
            // Menampilkan SweetAlert jika ada status di session
            <?php if (isset($_SESSION['status'])): ?>
                Swal.fire({
                    title: '<?= $_SESSION['status']['type'] === 'success' ? 'Success!' : 'Error!' ?>',
                    text: '<?= $_SESSION['status']['message'] ?>',
                    icon: '<?= $_SESSION['status']['type'] ?>'
                });
                <?php unset($_SESSION['status']); // Hapus session setelah ditampilkan ?>
            <?php endif; ?>
        });
    </script>
</body>
</html>
