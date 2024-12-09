const taskForm = document.getElementById("taskForm");
const taskInput = document.getElementById("taskInput");
const taskList = document.getElementById("taskList");
const taskCount = document.getElementById("taskCount");
const progress = document.getElementById("progress");
const progressPercentage = document.getElementById("progressPercentage");
const deadlineInput = document.getElementById("deadlineInput");
const descriptionInput = document.getElementById("descriptionInput");

// Retrieve tasks from localStorage or initialize as an empty array
let tasks = JSON.parse(localStorage.getItem("tasks")) || [];

// Variable to keep track of the task being edited
let editingTaskId = null;

// Function to update the task count and progress bar
function updateTaskCount() {
  const completedTasks = tasks.filter((task) => task.completed).length;
  taskCount.textContent = `${completedTasks} / ${tasks.length}`;
  const percentage = tasks.length
    ? Math.round((completedTasks / tasks.length) * 100)
    : 0;
  progress.style.width = `${percentage}%`;
  progressPercentage.textContent = `${percentage}%`;
}

// Function to add a new task with duplicate check
function addTask(taskText, taskDeadline, taskDescription) {
  // Memastikan deadline diubah ke format yang konsisten (YYYY-MM-DD)
  const formattedDeadline = new Date(taskDeadline).toISOString().split("T")[0]; // Formatkan tanggal

  const existingTask = tasks.find(
    (task) => task.text === taskText && task.deadline === formattedDeadline
  );

  if (existingTask) {
    alert("Task already exists!");
    return;
  }

  const task = {
    id: Date.now(),
    text: taskText,
    deadline: formattedDeadline, // Simpan deadline yang sudah diformat
    description: taskDescription,
    completed: false,
  };

  tasks.push(task);
  saveTasks();
  renderTasks();
}

// Function to toggle task completion
function toggleTaskCompletion(taskId) {
  const task = tasks.find((task) => task.id === taskId);
  if (task) {
    task.completed = !task.completed;
    saveTasks();
    renderTasks();
  }
}

// Function to delete a task
function deleteTask(taskId) {
  tasks = tasks.filter((task) => task.id !== taskId);
  saveTasks();
  renderTasks();
}

// Function to start editing a task
function startEditTask(taskId) {
  const task = tasks.find((task) => task.id === taskId);
  if (task) {
    taskInput.value = task.text;
    deadlineInput.value = task.deadline;
    descriptionInput.value = task.description;
    editingTaskId = taskId; // Mark the task as being edited
    renderTasks(); // Re-render tasks to hide the task being edited
  }
}

// Function to save edited task
function saveEdit(taskId, newText, newDescription, newDeadline) {
  const task = tasks.find((task) => task.id === taskId);
  if (task) {
    task.text = newText;
    task.description = newDescription;
    task.deadline = newDeadline;
    editingTaskId = null; // Clear the editing task ID
    saveTasks();
    renderTasks(); // Re-render tasks after saving
  }
}

// Function to render tasks
function renderTasks() {
  taskList.innerHTML = ""; // Clear the task list before rendering
  tasks.forEach((task) => {
    // Skip rendering the task that is currently being edited
    if (task.id === editingTaskId) {
      return; // Do not render this task in the list
    }

    const taskItem = document.createElement("li");
    taskItem.classList.add("task");

    const titleDescription = document.createElement("div");
    titleDescription.classList.add("title-description");

    const taskTitle = document.createElement("div");
    taskTitle.classList.add("task-title");

    // Task editing mode
    if (task.isEditing) {
      const input = document.createElement("input");
      input.value = task.text;
      input.onblur = () =>
        saveEdit(task.id, input.value, task.description, task.deadline);
      taskTitle.innerHTML = "";
      taskTitle.appendChild(input);
    } else {
      taskTitle.innerHTML = `<strong>${task.text}</strong>`;
      if (task.completed) {
        taskTitle.style.textDecoration = "line-through";
        taskTitle.style.color = "gray";
      }
    }

    const taskDescription = document.createElement("p");
    taskDescription.classList.add("description");

    if (task.isEditing) {
      const textarea = document.createElement("textarea");
      textarea.value = task.description;
      textarea.onblur = () =>
        saveEdit(task.id, task.text, textarea.value, task.deadline);
      taskDescription.innerHTML = "";
      taskDescription.appendChild(textarea);
    } else {
      taskDescription.innerHTML = task.description;
      if (task.completed) {
        taskDescription.style.textDecoration = "line-through";
        taskDescription.style.color = "gray";
      }
    }

    const taskDeadline = document.createElement("span");
    taskDeadline.classList.add("deadline");

    if (task.isEditing) {
      const inputDeadline = document.createElement("input");
      inputDeadline.type = "date";
      inputDeadline.value = task.deadline;
      inputDeadline.onblur = () =>
        saveEdit(task.id, task.text, task.description, inputDeadline.value);
      taskDeadline.innerHTML = "";
      taskDeadline.appendChild(inputDeadline);
    } else {
      taskDeadline.innerHTML = `Deadline: ${task.deadline}`;
      if (task.completed) {
        taskDeadline.style.textDecoration = "line-through";
        taskDeadline.style.color = "gray";
      }
    }

    titleDescription.appendChild(taskTitle);
    titleDescription.appendChild(taskDescription);
    taskItem.appendChild(titleDescription);
    taskItem.appendChild(taskDeadline);

    const actions = document.createElement("div");
    actions.classList.add("actions");

    const editButton = document.createElement("button");
    editButton.classList.add("edit");
    editButton.innerHTML = task.isEditing ? "Save" : "✎";
    editButton.onclick = () => startEditTask(task.id);

    const completeButton = document.createElement("button");
    completeButton.classList.add("complete");
    completeButton.innerHTML = "&#10003;";
    completeButton.onclick = () => toggleTaskCompletion(task.id);

    const deleteButton = document.createElement("button");
    deleteButton.classList.add("delete");
    deleteButton.innerHTML = "&#128465;";
    deleteButton.onclick = () => deleteTask(task.id);

    actions.appendChild(editButton);
    actions.appendChild(completeButton);
    actions.appendChild(deleteButton);
    taskItem.appendChild(actions);

    taskList.appendChild(taskItem);
  });
  updateTaskCount();
}

// Event listener to add or update a task when the form is submitted
taskForm.addEventListener("submit", (event) => {
  event.preventDefault();
  const taskText = taskInput.value.trim();
  const taskDeadline = deadlineInput.value;
  const taskDescription = descriptionInput.value.trim();

  if (taskText !== "") {
    if (editingTaskId) {
      const task = tasks.find((task) => task.id === editingTaskId);
      if (task) {
        task.text = taskText;
        task.deadline = taskDeadline;
        task.description = taskDescription;
        editingTaskId = null; // Reset editing task ID
      }
    } else {
      addTask(taskText, taskDeadline, taskDescription);
    }

    taskInput.value = "";
    deadlineInput.value = "";
    descriptionInput.value = "";
    saveTasks();
    renderTasks();
  }
});

// Function to save tasks to localStorage
function saveTasks() {
  localStorage.setItem("tasks", JSON.stringify(tasks));
}

// Initial rendering of tasks on page load
renderTasks();
