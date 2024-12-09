document.addEventListener('DOMContentLoaded', () => {
    const taskInput = document.getElementById('task-input');
    const todoList = document.getElementById('todo-list');
    const todoForm = document.getElementById('todo-form');
    const searchInput = document.getElementById('search-input');
    const taskHistory = document.getElementById('task-history'); // Tabel histori tugas yang diselesaikan atau dihapus
  
    let tasks = []; // Array untuk menyimpan tugas
    let completedTasks = []; // Array untuk menyimpan tugas yang telah diselesaikan atau dihapus
  
    // Fungsi untuk menampilkan tugas ke dalam tabel
    function renderTasks(filter = '') {
      todoList.innerHTML = ''; // Kosongkan daftar sebelumnya
  
      tasks
        .filter((task) => task.text.toLowerCase().includes(filter.toLowerCase()))
        .forEach((task, index) => {
          const row = document.createElement('tr');
  
          // Kolom Nomor
          const colNo = document.createElement('td');
          colNo.textContent = index + 1;
  
          // Kolom Tugas
          const colTask = document.createElement('td');
          colTask.textContent = task.text;
  
          // Kolom Waktu Ditambahkan
          const colTime = document.createElement('td');
          colTime.textContent = task.time;
  
          // Kolom Status
          const colStatus = document.createElement('td');
          colStatus.textContent = task.status;
  
          // Kolom Aksi
          const colActions = document.createElement('td');
          colActions.classList.add('actions');
  
          // Tombol Complete
          const btnComplete = document.createElement('button');
          btnComplete.textContent = 'Complete';
          btnComplete.classList.add('complete');
          btnComplete.addEventListener('click', () => {
            task.status = 'Completed';
            completedTasks.push({ ...task, status: 'Success' }); // Tambahkan ke histori dengan status "Success"
            tasks = tasks.filter((_, i) => i !== index); // Hapus dari tugas yang belum selesai
            renderTasks();
            renderTaskHistory(); // Update histori tugas
          });
  
          // Tombol Edit
          const btnEdit = document.createElement('button');
          btnEdit.textContent = 'Edit';
          btnEdit.classList.add('edit');
          btnEdit.addEventListener('click', () => {
            const newTask = prompt('Edit task:', task.text);
            if (newTask) {
              task.text = newTask;
              renderTasks();
            }
          });
  
          // Tombol Delete
          const btnDelete = document.createElement('button');
          btnDelete.textContent = 'Delete';
          btnDelete.classList.add('delete');
          btnDelete.addEventListener('click', () => {
            completedTasks.push({ ...task, status: 'Failed' }); // Tambahkan ke histori dengan status "Failed"
            tasks = tasks.filter((_, i) => i !== index); // Hapus dari daftar todo
            renderTasks();
            renderTaskHistory(); // Update histori tugas
          });
  
          colActions.append(btnComplete, btnEdit, btnDelete);
  
          // Menambahkan kolom ke baris
          row.append(colNo, colTask, colTime, colStatus, colActions);
  
          // Menambahkan baris ke tabel
          todoList.appendChild(row);
        });
    }
  
    // Fungsi untuk menampilkan histori tugas yang selesai atau dihapus
    function renderTaskHistory() {
      taskHistory.innerHTML = ''; // Kosongkan daftar histori sebelumnya
  
      completedTasks.forEach((task, index) => {
        const row = document.createElement('tr');
  
        // Kolom Nomor
        const colNo = document.createElement('td');
        colNo.textContent = index + 1;
  
        // Kolom Tugas
        const colTask = document.createElement('td');
        colTask.textContent = task.text;
  
        // Kolom Waktu Ditambahkan
        const colTime = document.createElement('td');
        colTime.textContent = task.time;
  
        // Kolom Status
        const colStatus = document.createElement('td');
        colStatus.textContent = task.status;
  
        // Kolom Aksi (kosong, karena tugas sudah diselesaikan atau dihapus)
        const colActions = document.createElement('td');
        colActions.textContent = task.status === 'Success' ? 'Complete' : 'Delete'; // Menandakan status tugas sudah selesai atau dihapus
  
        // Menambahkan kolom ke baris
        row.append(colNo, colTask, colTime, colStatus, colActions);
  
        // Menambahkan baris ke tabel
        taskHistory.appendChild(row);
      });
    }
  
    // Fungsi untuk menambah tugas baru
    todoForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const taskText = taskInput.value.trim();
      if (taskText) {
        const timeAdded = new Date().toLocaleString();
        tasks.push({ text: taskText, time: timeAdded, status: 'In Progress' });
        taskInput.value = '';
        renderTasks();
      }
    });
  
    // Pencarian tugas
    searchInput.addEventListener('input', (e) => {
      const searchTerm = e.target.value.trim();
      renderTasks(searchTerm);
    });
  
    renderTasks(); // Render awal
    renderTaskHistory(); // Render histori tugas
  });
  