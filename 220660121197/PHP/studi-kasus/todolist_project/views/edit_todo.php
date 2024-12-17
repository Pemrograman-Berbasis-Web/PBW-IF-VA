<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Todo</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Todo</h1>
        
        <form action="?action=update" method="POST" class="mt-3">
            <input type="hidden" name="id" value="<?= $todo['id'] ?>">
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= htmlspecialchars($todo['title']) ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" required><?= htmlspecialchars($todo['description']) ?></textarea>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="status" id="status" class="form-check-input" <?= $todo['status'] ? 'checked' : '' ?>>
                <label for="status" class="form-check-label">Completed</label>
            </div>

            <button type="submit" class="btn btn-primary">Update Todo</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
