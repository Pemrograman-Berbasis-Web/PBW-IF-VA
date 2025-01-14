<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inisialisasi session tasks jika belum ada
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Tambah tugas ke session jika form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task']) && !empty($_POST['priority']) && !empty($_POST['deadline'])) {
    $task = htmlspecialchars($_POST['task']);
    $priority = htmlspecialchars($_POST['priority']);
    $deadline = htmlspecialchars($_POST['deadline']);
    $_SESSION['tasks'][] = [
        'task' => $task,
        'priority' => $priority,
        'deadline' => $deadline,
        'completed' => false
    ];
    // Redirect agar halaman dimuat ulang setelah form dikirim
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Hapus tugas dari session
if (isset($_GET['delete'])) {
    $deleteIndex = (int) $_GET['delete'];
    unset($_SESSION['tasks'][$deleteIndex]);
    $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    // Redirect agar halaman dimuat ulang setelah tugas dihapus
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Tandai tugas sebagai selesai
if (isset($_GET['complete'])) {
    $completeIndex = (int) $_GET['complete'];
    $_SESSION['tasks'][$completeIndex]['completed'] = true;
    // Redirect agar halaman dimuat ulang setelah tugas selesai
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <div class="container" style="width: 60%; margin: auto; padding: 20px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); border-radius: 10px; text-align: center;">
        <h2>To Do List</h2>
        <form action="" method="POST">
            <input type="text" name="task" placeholder="Nama Tugas" required>
            <select name="priority" required>
                <option value="" disabled selected>Prioritas</option>
                <option value="Tinggi">Tinggi</option>
                <option value="Sedang">Sedang</option>
                <option value="Rendah">Rendah</option>
            </select>
            <input type="date" name="deadline" required>
            <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 5px 10px; cursor: pointer; border-radius: 5px;">Tambah</button>
        </form>

        <table class="task-table" style="width: 100%; margin-top: 20px; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f8f9fa;">
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
                        echo "<tr class='task-item " . ($task['completed'] ? 'completed' : '') . "' data-index='{$index}' style='text-align: center;'>";
                        echo "<td>" . ($index + 1) . "</td>";
                        echo "<td>{$task['task']}</td>";
                        echo "<td>{$task['priority']}</td>";
                        echo "<td>{$task['deadline']}</td>";
                        echo "<td>{$status}</td>";
                        echo "<td>";
                        if (!$task['completed']) {
                            echo "<a class='complete-btn' href='?complete={$index}' style='color: green; margin-right: 5px;'>✓</a>";
                        }
                        echo "<a class='delete-btn' href='?delete={$index}' onclick='return confirm(\"Apakah Anda yakin ingin menghapus tugas ini?\")' style='color: red;'>✗</a>";
                        echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada tugas yang ditambahkan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
