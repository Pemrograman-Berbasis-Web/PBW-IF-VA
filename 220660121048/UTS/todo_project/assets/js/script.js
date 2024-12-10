document.addEventListener('DOMContentLoaded', function () {
    const taskInput = document.querySelector('.task-input');
    const addButton = document.querySelector('.add-button');
    const taskList = document.querySelector('.task-list');
    const modeToggle = document.querySelector('.mode-toggle');

    addButton.addEventListener('click', addTask);

    function addTask() {
        if (taskInput.value.trim() === '') return;

        const taskItem = document.createElement('li');
        const taskName = document.createElement('span');
        const deleteButton = document.createElement('button');
        const checkbox = document.createElement('input');

        taskName.classList.add('task-name');
        taskName.textContent = taskInput.value;
        deleteButton.textContent = 'Delete';
        deleteButton.classList.add('delete');
        checkbox.type = 'checkbox';

        taskItem.appendChild(checkbox);
        taskItem.appendChild(taskName);
        taskItem.appendChild(deleteButton);
        taskList.appendChild(taskItem);

        deleteButton.addEventListener('click', () => {
            if (confirm('Are you sure you want to delete this task?')) {
                taskList.removeChild(taskItem);
            }
        });

        checkbox.addEventListener('change', () => {
            taskItem.classList.toggle('completed', checkbox.checked);
        });

        taskInput.value = '';
    }

    modeToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        modeToggle.textContent = document.body.classList.contains('dark-mode') ? 'Light Mode' : 'Night Mode';
    });
});
