<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List with Search</title>

  <!-- Link ke CSS dengan path relatif -->
  <link rel="stylesheet" href="assets/css/style.css"> 
</head>

<body>
  <div class="container">
    <h1>To-Do List</h1>

    <!-- Form Tambah Tugas -->
    <form id="todo-form">
      <input type="text" id="task-input" placeholder="Enter a task" required>
      <button type="submit">Add Task</button>
    </form>

    <!-- Pencarian -->
    <input 
      type="text" 
      id="search-input" 
      placeholder="Search tasks..." 
      class="search-box">

    <!-- Tabel Tugas -->
    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Task</th>
          <th>Time Added</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="todo-list">
        <!-- Rows akan dibuat oleh JavaScript -->
      </tbody>
    </table>

    <!-- Tabel Histori Tugas yang Diselesaikan -->
    <h2>Task History</h2>
    <table id="task-history-table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Task</th>
          <th>Time Added</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="task-history">
        <!-- Rows histori tugas selesai atau dihapus akan ditampilkan oleh JavaScript -->
      </tbody>
    </table>
  </div>

  <!-- Pastikan jalur script.js benar dan menggunakan defer -->
  <script src="assets/js/script.js"></script>
</body>
</html>
