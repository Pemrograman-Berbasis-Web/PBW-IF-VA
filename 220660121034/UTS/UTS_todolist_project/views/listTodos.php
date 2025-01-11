<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>

        <!-- Form New Task Pindah ke Atas -->
        <form class="new-task-form" method="POST" action="?action=add">
            <input type="text" name="task" placeholder="New Task" required>
            <button type="submit" class="button add-button"><i class="fas fa-plus-circle"></i> Add</button>
        </form>

         <!-- Form Update -->
    <form id="updateForm" method="POST" action="?action=update" style="display:none;">
    <input type="hidden" name="id" id="updateId">
    <input type="text" name="task" id="updateTask" required>
    <button type="submit" class="button update-button"><i class="fas fa-save"></i> Update</button>
    <button type="button" class="button cancel-button" onclick="hideEditForm()">Cancel</button>
</form>
   <!-- Daftar tugas -->
        <ul>
    <?php foreach ($todos as $todo): ?>
        <li class="<?= $todo['is_completed'] ? 'completed' : '' ?>">
            <span class="todo-text"><?php echo htmlspecialchars($todo['task']); ?></span>
            <?php if (!$todo['is_completed']): ?>
                <a href="?action=complete&id=<?= $todo['id']; ?>" class="button complete">
                    <i class="fas fa-check-circle"></i> Mark as completed
                </a>
            <?php endif; ?>
            <a href="?action=delete&id=<?= $todo['id']; ?>" class="button delete">
                <i class="fas fa-trash-alt"></i> Delete
            </a>
            <a href="#" class="button edit" onclick="showEditForm(<?= $todo['id']; ?>, '<?= addslashes($todo['task']); ?>')">
                <i class="fas fa-edit"></i> Edit
            </a>
        </li>
    <?php endforeach; ?>
</ul>


    </div>
    

    <script>
        function showEditForm(id, task) {
            document.getElementById('updateForm').style.display = 'block';
            document.getElementById('updateId').value = id;
            document.getElementById('updateTask').value = task;
        }

        function hideEditForm() {
            document.getElementById('updateForm').style.display = 'none';
        }
    </script>
</body>
</html>
