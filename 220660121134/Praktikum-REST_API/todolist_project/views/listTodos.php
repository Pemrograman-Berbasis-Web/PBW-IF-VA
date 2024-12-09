<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Todo List</h1>

        <!-- Manual Search -->
        <div class="mb-3">
            <input type="text" id="searchInput" placeholder="Search todos..." class="form-control">
        </div>

        <!-- New Task Form -->
        <form class="new-task-form form-inline mb-4" method="POST" action="?action=add">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="date" name="deadline" class="form-control" required>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-plus-circle"></i> Add</button>
        </form>

        <!-- Update Form -->
        <form id="updateForm" class="form-inline mb-4" method="POST" action="?action=update" style="display:none;">
            <input type="hidden" name="id" id="updateId">
            <input type="text" name="title" id="updateTitle" class="form-control mr-2" placeholder="Title" required>
            <input type="date" name="deadline" id="updateDeadline" class="form-control mr-2" placeholder="Deadline" required>
            <textarea name="description" id="updateDescription" class="form-control mr-2" placeholder="Description"></textarea>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
            <button type="button" class="btn btn-secondary ml-2" onclick="hideEditForm()">Cancel</button>
        </form>

<!-- Todo Table -->
<table id="todoTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th class="status-column">Status</th> <!-- Add class for status column -->
            <th class="deadline-column">Deadline</th> <!-- Add class for deadline column -->
            <th class="actions-column">Actions</th> <!-- Add class for actions column -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($todos as $todo): ?>
            <tr>
                <td><?php echo htmlspecialchars($todo['title']); ?></td>
                <td><?php echo htmlspecialchars($todo['description']); ?></td>
                <td class="status-column">
                    <?php echo $todo['is_completed'] ? '<span class="badge badge-success">Completed</span>' : '<span class="badge badge-warning">Pending</span>'; ?>
                </td>
                <td class="deadline-column"><?php echo $todo['deadline']; ?></td>
                <td class="actions-column" style="width: 300px;"> <!-- Adjust the width for actions -->
                    <?php if (!$todo['is_completed']): ?>
                        <a href="?action=complete&id=<?= $todo['id']; ?>" class="btn btn-success btn-sm">Mark as Complete</a>
                    <?php else: ?>
                        <a href="?action=pending&id=<?= $todo['id']; ?>" class="btn btn-secondary btn-sm">Mark as Pending</a>
                    <?php endif; ?>
                    <a href="?action=delete&id=<?= $todo['id']; ?>" class="btn btn-danger btn-sm delete">Delete</a>
                    <a href="#" class="btn btn-warning btn-sm" onclick="showEditForm(<?= $todo['id']; ?>, '<?= addslashes($todo['title']); ?>', '<?= addslashes($todo['deadline']); ?>', '<?= addslashes($todo['description']); ?>')">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


        <!-- JavaScript Files -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </div>
</body>
</html>
