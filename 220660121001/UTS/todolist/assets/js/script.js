let tasks = [];

document.getElementById('addTaskButton').addEventListener('click', addTask);

function addTask() {
  const taskInput = document.getElementById('taskInput');
  const taskText = taskInput.value.trim();

  // Cek apakah input kosong
  if (taskText === "") {
    taskInput.classList.add('error'); // Menandai input dengan kelas error
    return; // Jangan lanjutkan jika kosong
  }

  taskInput.classList.remove('error'); // Menghapus tanda error jika ada

  const currentTime = new Date().toLocaleString();
  const task = {
    text: taskText,
    created: currentTime,
    updated: currentTime,
    status: 'Pending'
  };

  tasks.push(task);
  taskInput.value = '';  // Bersihkan input setelah ditambahkan
  renderTasks();
}

function renderTasks() {
  const taskTableBody = document.getElementById('taskTable').getElementsByTagName('tbody')[0];
  taskTableBody.innerHTML = '';  // Bersihkan tabel sebelum render ulang

  tasks.forEach((task, index) => {
    const row = taskTableBody.insertRow();

    // Kolom nomor otomatis
    const cell0 = row.insertCell(0);
    cell0.innerText = index + 1; // Menampilkan nomor urut berdasarkan indeks

    const cell1 = row.insertCell(1);
    cell1.innerText = task.text;

    const cell2 = row.insertCell(2);
    cell2.innerText = task.created;

    const cell3 = row.insertCell(3);
    cell3.innerText = task.updated;

    const cell4 = row.insertCell(4);
    const statusButton = document.createElement('button');
    statusButton.classList.add(task.status === 'Done' ? 'status-done' : 'status-pending');
    statusButton.innerText = task.status === 'Done' ? 'Sudah' : 'Pending';
    statusButton.onclick = () => toggleStatus(index);
    cell4.appendChild(statusButton);

    const cell5 = row.insertCell(5);

    if (task.status === 'Pending') {
      const doneButton = document.createElement('button');
      doneButton.innerText = 'Selesai';
      doneButton.onclick = () => markAsDone(index);
      cell5.appendChild(doneButton);

      const editButton = document.createElement('button');
      editButton.innerText = 'Edit';
      editButton.onclick = () => editTask(index);
      cell5.appendChild(editButton);

      const deleteButton = document.createElement('button');
      deleteButton.innerText = 'Hapus';
      deleteButton.onclick = () => deleteTask(index);
      cell5.appendChild(deleteButton);
    } else {
      const cancelButton = document.createElement('button');
      cancelButton.innerText = 'Batalkan';
      cancelButton.onclick = () => markAsPending(index);
      cell5.appendChild(cancelButton);
    }
  });
}

function toggleStatus(index) {
  tasks[index].status = tasks[index].status === 'Done' ? 'Pending' : 'Done';
  tasks[index].updated = new Date().toLocaleString();
  renderTasks();
}

function markAsDone(index) {
  tasks[index].status = 'Done';
  tasks[index].updated = new Date().toLocaleString();
  renderTasks();
}

function markAsPending(index) {
  tasks[index].status = 'Pending';
  tasks[index].updated = new Date().toLocaleString();
  renderTasks();
}

function editTask(index) {
  const newTaskText = prompt("Edit tugas:", tasks[index].text);
  if (newTaskText !== null && newTaskText.trim() !== "") {
    tasks[index].text = newTaskText.trim();
    tasks[index].updated = new Date().toLocaleString();
    renderTasks();
  }
}

function deleteTask(index) {
  if (confirm("Apakah Anda yakin ingin menghapus tugas ini?")) {
    tasks.splice(index, 1);
    renderTasks();
  }
}
