<!DOCTYPE html>
<html>

<head>
    <title>Todo List</title>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&family=Roboto&display=swap" rel="stylesheet">
    <!-- alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <h1>Todo List</h1>
    <!-- Add New Task Form -->
    <form method="POST" action="?action=add" class="add-form" onsubmit="return validateForm()">
        <input type="text" name="task" placeholder="New Task">
        <input type="date" name="due_date" class="date-input" placeholder="Due Date">
        <button type="submit">Add</button>
    </form>
    <?php if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])): ?>
    <form method="POST" action="?action=update&id=<?php echo $_GET['id']; ?>" class="edit-form">
        <input type="text" name="task" placeholder="Edit Task" required>
        <button type="submit">Update</button>
    </form>
    <?php endif; ?>

    <!-- Task Cards Section -->
    <div class="todo-list">
        <?php foreach ($todos as $todo): ?>
        <div class="todo-card">
            <div class="due-date">
                <?php echo date("d M Y", strtotime($todo['due_date'])); ?>
            </div>
            <div class="task">
                <?php if ($todo['is_completed']): ?>
                <s><?php echo htmlspecialchars($todo['task']); ?></s>
                <?php else: ?>
                <?php echo htmlspecialchars($todo['task']); ?>
                <?php endif; ?>

            </div>
            <div class="actions">
                <?php if (!$todo['is_completed']): ?>
                <a href="?action=complete&id=<?php echo $todo['id']; ?>" class="icon">
                    <i class="fas fa-check"></i>
                </a>
                <?php endif; ?>
                <a href="?action=edit&id=<?php echo $todo['id']; ?>" class="icon">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="?action=delete&id=<?php echo $todo['id']; ?>" onsubmit="return validateForm()" class="icon">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php
if (isset($_SESSION['message'])): ?>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '<?php echo $_SESSION['message']; ?>',
            showConfirmButton: false,
            timer: 2000
        });
    });
    </script>
    <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <?php
if (isset($_SESSION['error_message'])): ?>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?php echo $_SESSION['error_message']; ?>',
            showConfirmButton: true
        });
    });
    </script>
    <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>


    <script src="assets/js/script.js"></script>
</body>

</html>