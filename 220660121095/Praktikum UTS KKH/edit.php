<?php
include 'config/database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM penduduk WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    $sql = "UPDATE penduduk SET nama='$nama', nik='$nik', alamat='$alamat', umur=$umur WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Penduduk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Edit Data Penduduk</h2>

    <form action="" method="POST" class="form-input">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label for="nik">NIK:</label>
        <input type="text" name="nik" value="<?php echo $data['nik']; ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required>

        <label for="umur">Umur:</label>
        <input type="number" name="umur" value="<?php echo $data['umur']; ?>" required>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
