<?php
// delete.php
include 'config/database.php';

$id = $_GET['id'];
$conn->query("DELETE FROM mahasiswa WHERE id=$id");

header("Location: index.php");
?>