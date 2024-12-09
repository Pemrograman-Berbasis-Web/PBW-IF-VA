<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Perkuliahan</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <!-- Video Background -->
    <video autoplay muted loop id="background-video">
        <source src="../assets/bahan/video.mp4" type="video/mp4">
        <!-- You can also add more formats like .webm or .ogg for better browser compatibility -->
        Your browser does not support the video tag.
    </video>

    <h1>To-Do List Perkuliahan</h1>

    <!-- Button to Toggle Background Visibility -->
    <button id="toggleBackgroundBtn" class="toggle-btn">
        <img src="../assets/bahan/egg.png" alt="Toggle Background" />
    </button>

    <!-- To-Do List Section -->
    <section class="todo-section">
        <div class="todo-form">
            <input type="text" id="studentName" placeholder="Nama Mahasiswa" required>
            <select id="taskName">
                <option value="" disabled selected>Pilih Mata Kuliah</option>
                <option value="Internet of Things">Internet of Things</option>
                <option value="Digital Startup">Digital Startup</option>
                <option value="Kecerdasan Buatan">Kecerdasan Buatan</option>
                <option value="Manajemen proyek perangkat lunak">Manajemen proyek perangkat lunak</option>
                <option value="Desain UI/UX">Desain UI/UX</option>
                <option value="Pemrograman Berbasis Web">Pemrograman Berbasis Web</option>
                <option value="Interpersonal Skill">Interpersonal Skill</option>
            </select>
            <button id="addTaskBtn">Tambah Tugas</button>
        </div>

        <table class="todo-list">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>ID</th>
                    <th>Mata Kuliah</th>
                    <th>Status</th>
                    <th>Waktu Buat</th>
                    <th>Waktu Update</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="todoTableBody">
                <!-- Dynamic Content -->
            </tbody>
        </table>
    </section>

    <!-- Histor Section -->
    <section class="history-section">
    <h2 id="historyTitle">Histori</h2>
        <table class="history-list">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>ID</th>
                    <th>Mata Kuliah</th>
                    <th>Status</th>
                    <th>Waktu Buat</th>
                    <th>Waktu Penyelesaian/Pembatalan</th>
                </tr>
            </thead>
            <tbody id="historyTableBody">
                <!-- Dynamic Content -->
            </tbody>
        </table>
    </section>
    <footer>
        <p>&copy; 2024 Virzan Pasa Nugraha. All Rights Reserved.</p>
    </footer>

    <script src="../assets/js/script.js"></script>
</body>
</html>
