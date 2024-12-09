document.addEventListener("DOMContentLoaded", function() {
    const addButton = document.querySelector(".todo-add-btn");
    const taskInput = document.querySelector(".todo-input");
    const todoList = document.querySelector(".todo-list");

    addButton.addEventListener("click", addTask);

    function addTask() {
        const taskText = taskInput.value.trim();
        if (taskText !== "") {
            const taskItem = document.createElement("li");
            taskItem.classList.add("todo-item");

            // Checkbox
            const checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.classList.add("todo-checkbox");

            // Task text
            const taskTextElem = document.createElement("span");
            taskTextElem.classList.add("todo-text");
            taskTextElem.textContent = taskText;

            // Delete button
            const deleteButton = document.createElement("button");
            deleteButton.classList.add("todo-delete-btn");
            deleteButton.textContent = "Delete";
            deleteButton.addEventListener("click", function() {
                todoList.removeChild(taskItem);
            });

            taskItem.appendChild(checkbox);
            taskItem.appendChild(taskTextElem);
            taskItem.appendChild(deleteButton);
            todoList.appendChild(taskItem);

            // Clear input
            taskInput.value = "";
        }
    }
});
