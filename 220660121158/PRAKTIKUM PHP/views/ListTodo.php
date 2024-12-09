<?php require './assets/css/styles.css'; ?>
<div class="container">
    <h1>Todo List</h1>
    <ul class="todo-list">
        <?php foreach ($todos as $todo): ?>
            <li class="todo-item">
                <?php echo htmlspecialchars($todo->title); ?>
                <button class="delete-todo" data-id="<?php echo $todo->id; ?>">Delete</button>
            </li>
        <?php endforeach; ?>
    </ul>

    <form class="add-todo" method="post" action="index.php?action=add">
        <input type="text" name="title" placeholder="Add a new todo">
        <button type="submit">Add</button>
    </form>
</div>
<script src="./assets/js/script.js"></script>
