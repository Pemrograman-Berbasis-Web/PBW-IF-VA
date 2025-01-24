<?php
include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $umur = $_POST['umur'];

    $sql = "INSERT INTO mahasiswa (nama, nim, umur) VALUES ('$nama', '$nim', $umur)";
    if ($conn->query($sql) === TRUE) {
        $success = "Data berhasil ditambahkan!";
    } else {
        $error = "Error: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <?php if (isset($success)): ?>
        <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>
    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="" method="POST" class="form-input">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <label for="umur">Umur:</label>
        <input type="number" name="umur" required>

        <button type="submit">Tambah</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <script src="js/script.js"></script>
</body>
</html>
