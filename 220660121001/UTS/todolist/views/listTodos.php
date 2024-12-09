  <!DOCTYPE html>
  <html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>

  <h1>To-Do List</h1>
  <div class="input-container">
    <input type="text" id="taskInput" placeholder="Tulis tugas baru...">
    <button id="addTaskButton" onclick="addTask()">Tambah</button>
  </div>

    
    <table id="taskTable">
      <thead>
        <tr>
          <th>No</th> <!-- Kolom nomor otomatis -->
          <th>Task</th>
          <th>Waktu Dibuat</th>
          <th>Waktu Update</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <!-- Data tasks akan ditampilkan di sini -->
      </tbody>  
    </table>

    <script src="../assets/js/script.js"></script>
  </body>
  </html>
