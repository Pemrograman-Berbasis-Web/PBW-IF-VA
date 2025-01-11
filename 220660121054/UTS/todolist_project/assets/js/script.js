const todoTableBody = document.getElementById("todoTableBody");
const historyTableBody = document.getElementById("historyTableBody");
const studentNameInput = document.getElementById("studentName");
const taskNameInput = document.getElementById("taskName");
const addTaskBtn = document.getElementById("addTaskBtn");
const taskLabel = document.getElementById('taskLabel');

let tasks = [];
let history = [];
let taskId = 1;
let editMode = false;
let editTaskId = null;

function generateTaskSerial() {
    return `T-${taskId.toString().padStart(4, '0')}`;
}

addTaskBtn.addEventListener("click", () => {
    const studentName = studentNameInput.value.trim();
    const taskName = taskNameInput.value;

    if (studentName && taskName) {
        const now = new Date().toLocaleString();

        if (editMode) {
            const task = tasks.find(t => t.id === editTaskId);
            task.studentName = studentName;
            task.name = taskName;
            task.updatedAt = now;
            editMode = false;
            editTaskId = null;
            addTaskBtn.textContent = "Tambah Tugas";
        } else {
            const newTask = {
                id: generateTaskSerial(),
                studentName,
                name: taskName,
                status: "Menunggu",
                createdAt: now,
                updatedAt: null,
            };
            tasks.push(newTask);
            taskId++;
        }

        renderTasks();
        studentNameInput.value = "";
        taskNameInput.value = "";
    } else {
        alert("Nama mahasiswa dan tugas tidak boleh kosong!");
    }
});

function renderTasks() {
    todoTableBody.innerHTML = "";
    tasks.forEach((task, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${task.studentName}</td>
            <td>${task.id}</td>
            <td>${task.name}</td>
            <td>${task.status}</td>
            <td>${task.createdAt}</td>
            <td>${task.updatedAt || "-"}</td>
            <td>
                <button class="btn complete" onclick="completeTask('${task.id}')">Selesai</button>
                <button class="btn edit" onclick="editTask('${task.id}')">Edit</button>
                <button class="btn delete" onclick="deleteTask('${task.id}')">Hapus</button>
            </td>
        `;
        todoTableBody.appendChild(row);
    });
}

function editTask(id) {
    const task = tasks.find(t => t.id === id);
    studentNameInput.value = task.studentName;
    taskNameInput.value = task.name;
    editMode = true;
    editTaskId = id;
    addTaskBtn.textContent = "Simpan Perubahan";
}

function completeTask(id) {
    const task = tasks.find(t => t.id === id);
    const now = new Date().toLocaleString();
    task.status = "Berhasil";
    task.completedAt = now;

    history.push({ ...task });
    tasks = tasks.filter(t => t.id !== id);

    renderTasks();
    renderHistory();
}
document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById("toggleBackgroundBtn");
    const historiTitle = document.getElementById("historyTitle");

    // Pilih elemen tabel todo dan history
    const todoTable = document.querySelector(".todo-list");
    const historyTable = document.querySelector(".history-list");

    // Pastikan event listener terpasang dengan benar
    toggleButton.addEventListener("click", function() {
        toggleButton.classList.toggle("active");
        // Mengubah warna teks dengan menambahkan atau menghapus kelas
        historiTitle.classList.toggle("white-text");
        todoTable.classList.toggle("white-text");  // Menambahkan white-text pada tabel todo
        historyTable.classList.toggle("white-text");  
    });
});

function deleteTask(id) {
    const task = tasks.find(t => t.id === id);
    const now = new Date().toLocaleString();
    history.push({ ...task, status: "Dibatalkan", completedAt: now });
    tasks = tasks.filter(t => t.id !== id);

    renderTasks();
    renderHistory();
}

// Get the button and body element
const toggleButton = document.getElementById("toggleBackgroundBtn");
const bodyElement = document.body;

// Function to toggle background visibility
toggleButton.addEventListener("click", function() {
    bodyElement.classList.toggle("background-hidden");
});

taskNameSelect.addEventListener('change', function() {
    const selectedTask = taskNameSelect.value;
    taskLabel.textContent = selectedTask; // Update teks tombol dengan pilihan mata kuliah
});

function renderHistory() {
    historyTableBody.innerHTML = "";
    history.forEach((task, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${task.studentName}</td>
            <td>${task.id}</td>
            <td>${task.name}</td>
            <td>${task.status}</td>
            <td>${task.createdAt}</td>
            <td>${task.completedAt}</td>
        `;
        historyTableBody.appendChild(row);
    });
}

