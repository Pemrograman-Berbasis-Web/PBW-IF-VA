<?php
include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    $sql = "INSERT INTO penduduk (nama, nik, alamat, umur) VALUES ('$nama', '$nik', '$alamat', $umur)";
    if ($conn->query($sql) === TRUE) {
        $success = "Data penduduk berhasil ditambahkan!";
    } else {
        $error = "Error: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM penduduk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Penduduk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Profil Creator -->
    <!-- Profil Creator -->
    <div class="profile">
        <img src="img/IMG_4198.JPG" alt="Foto Pembuat" class="creator-photo">
        <h2>Dibuat oleh: Kikih Isman Iskandar | 2024</h2>
        <p>Posisi: Creator Aplikasi Pendataan Penduduk</p>
        <p>NIM: 220660121095</p>
    </div>


    <!-- Pesan Sukses -->
    <?php if (isset($success)): ?>
        <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>
    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="" method="POST" class="form-input">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="nik">NIK:</label>
        <input type="text" name="nik" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required>

        <label for="umur">Umur:</label>
        <input type="number" name="umur" required>

        <button type="submit">Tambah Penduduk</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nik']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirmDelete()">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <script src="js/script.js"></script>
</body>
</html>
