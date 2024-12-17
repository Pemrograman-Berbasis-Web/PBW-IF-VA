<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Todo List</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Todo List</h1>

        <!-- Form Pencarian -->
        <form action="index.php" method="GET" class="form-inline mb-3">
            <input type="hidden" name="action" value="search">
            <input type="text" name="keyword" class="form-control mr-2" placeholder="Cari..." value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <!-- Form Tambah Todo -->
        <form action="?action=create" method="POST" class="mb-3">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="form-group">
                <textarea name="description" class="form-control" placeholder="Description" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Todo</button>
        </form>

        <!-- Tabel Todo List -->
        <table class="table">
            <thead>
                <tr>
                    <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'title'])) ?>">Title</a></th>
                    <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'description'])) ?>">Description</a></th>
                    <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'status'])) ?>">Status</a></th>
                    <th><a href="?<?= http_build_query(array_merge($_GET, ['sort' => 'created_at'])) ?>">Created At</a></th>
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
                                <a href="?action=edit&id=<?= $todo['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="?action=delete&id=<?= $todo['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                <a href="?action=toggleStatus&id=<?= $todo['id'] ?>" class="btn btn-info btn-sm"><?= $todo['status'] ? 'Mark as Pending' : 'Mark as Complete' ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
