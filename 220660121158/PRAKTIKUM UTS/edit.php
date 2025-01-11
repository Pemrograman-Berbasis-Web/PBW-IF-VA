<?php
// edit.php
include 'config/database.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $umur = $_POST['umur'];

    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', umur=$umur WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required>
        <label for="umur">Umur:</label>
        <input type="number" name="umur" value="<?php echo $row['umur']; ?>" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>