<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <!-- Kontainer untuk statistik tugas -->
            <div class="stats-container">
                <div class="detail">
                    <h1>To-<span>Do</span> List</h1>
                    <p>Keep it up!<span id="progressPercentage">0%</span></p>
                    <div id="progressBar">
                        <div id="progress"></div>
                    </div>
                </div>
                <div class="stats-numbers">
                    <p id="taskCount"><?php echo count($todos); ?> / <?php echo count($todos); ?></p> <!-- Menghitung total task -->
                </div>
            </div>

            <!-- Form untuk menambah atau mengedit tugas -->
            <form method="POST" action="index.php" id="taskForm">
                <input type="text" name="task" id="taskInput" value="<?php echo isset($taskToEdit) ? htmlspecialchars($taskToEdit['task'], ENT_QUOTES, 'UTF-8') : ''; ?>" placeholder="Write your task" required>
                <input type="text" name="description" id="descriptionInput" value="<?php echo isset($taskToEdit) ? htmlspecialchars($taskToEdit['description'], ENT_QUOTES, 'UTF-8') : ''; ?>" placeholder="Add a short description">
                <input type="date" name="deadline" id="deadlineInput" value="<?php echo isset($taskToEdit) ? htmlspecialchars($taskToEdit['deadline'], ENT_QUOTES, 'UTF-8') : ''; ?>" required>
                <button type="submit"><?php echo isset($taskToEdit) ? 'Update' : '+'; ?></button>
            </form>

            <!-- Kontainer untuk daftar tugas -->
            <div class="task-list-container">
                <ul id="taskList" class="task-list">
                    <?php foreach ($todos as $todoId => $todo): ?>
                        <li class="task <?php echo $todo['is_completed'] ? 'completed' : ''; ?>">
                            <span><?php echo htmlspecialchars($todo['task'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <p><?php echo htmlspecialchars($todo['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <p>Deadline: <?php echo htmlspecialchars($todo['deadline'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <div class="actions">
                                <?php if (!$todo['is_completed']): ?>
                                    <a href="?action=complete&id=<?php echo $todoId; ?>" class="edit">✓</a>
                                <?php endif; ?>
                                <a href="?action=edit&id=<?php echo $todoId; ?>" class="edit">✎</a> <!-- Tautan untuk mengedit tugas -->
                                <a href="?action=delete&id=<?php echo $todoId; ?>" class="delete">✗</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>