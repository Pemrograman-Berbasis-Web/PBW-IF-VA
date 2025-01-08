<?php
// Mulai sesi
session_start();

// Inisialisasi variabel sesi untuk tugas jika belum ada
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Menangani penambahan tugas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $task = [
        'task' => $_POST['task'],
        'priority' => $_POST['priority'],
        'deadline' => $_POST['deadline'],
        'completed' => false,
    ];
    $_SESSION['tasks'][] = $task;
}

// Menangani penghapusan tugas
if (isset($_GET['delete'])) {
    $index = intval($_GET['delete']);
    if (isset($_SESSION['tasks'][$index])) {
        array_splice($_SESSION['tasks'], $index, 1);
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Menangani penyelesaian tugas
if (isset($_GET['complete'])) {
    $index = intval($_GET['complete']);
    if (isset($_SESSION['tasks'][$index])) {
        $_SESSION['tasks'][$index]['completed'] = true;
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <!-- Hubungkan dengan file CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Tombol Dark Mode -->
    <button id="dark-mode-toggle" class="dark-mode-btn">🌙 Dark Mode</button>

    <!-- Kontainer Pilihan Tema -->
    <div id="theme-container">
        <label for="theme-color">Pilih Tema:</label>
        <select id="theme-color">
            <option value="default">Default</option>
            <option value="red">Merah</option>
            <option value="blue">Biru</option>
            <option value="green">Hijau</option>
            <option value="purple">Ungu</option>
        </select>
    </div>

    <!-- Kontainer Input -->
    <div class="container">
        <div class="input-container">
            <h2>Tambah Tugas</h2>
            <form action="" method="POST">
                <input type="text" name="task" placeholder="Nama Tugas" required>
                <select name="priority" required>
                    <option value="" disabled selected>Prioritas</option>
                    <option value="Tinggi">Tinggi</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Rendah">Rendah</option>
                </select>
                <input type="date" name="deadline" required>
                <button type="submit">Tambah</button>
            </form>
        </div>

        <!-- Kontainer Output -->
        <div class="output-container">
            <h2>Daftar Tugas</h2>
            <table class="task-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tugas</th>
                        <th>Prioritas</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($_SESSION['tasks'])) {
                        foreach ($_SESSION['tasks'] as $index => $task) {
                            $status = $task['completed'] ? 'Selesai' : 'Belum Selesai';
                            echo "<tr>";
                            echo "<td>" . ($index + 1) . "</td>";
                            echo "<td>{$task['task']}</td>";
                            echo "<td>{$task['priority']}</td>";
                            echo "<td>{$task['deadline']}</td>";
                            echo "<td>{$status}</td>";
                            echo "<td>";
                            if (!$task['completed']) {
                                echo "<a href='?complete={$index}' style='margin-right: 10px;'>✓</a>";
                            }
                            echo "<a href='?delete={$index}'>✗</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada tugas yang ditambahkan.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Hubungkan dengan file JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>
