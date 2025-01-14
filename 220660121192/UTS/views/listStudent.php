<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/assetts/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <form action="?action=add" method="POST">
            <input type="text" name="name" placeholder="Nama" required>
            <input type="text" name="npm" placeholder="NPM" required>
            <input type="text" name="subject" placeholder="Mata Kuliah" required>
            <input type="number" step="0.01" name="grade" placeholder="Nilai" required>
            <button type="submit">Tambah Data</button>
        </form>

        <table border="1">
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['npm'] ?></td>
                    <td><?= $student['subject'] ?></td>
                    <td><?= $student['grade'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="/assetts/js/script.js" defer></script>
</body>
</html>
