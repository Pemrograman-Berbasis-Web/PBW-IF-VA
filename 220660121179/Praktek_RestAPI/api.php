<?php
header("Content-Type: application/json");

// Koneksi ke database
$pdo = new PDO("mysql:host=localhost;dbname=todolist", "root", "");

// Aksi berdasarkan parameter
$action = $_GET['action'] ?? '';

// Ambil semua todo
if ($action === 'getTodos') {
    $stmt = $pdo->query("SELECT * FROM todos");
    $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($todos);
    exit;
}

// Tambahkan todo baru
if ($action === 'addTodo') {
    $data = json_decode(file_get_contents("php://input"), true);
    $stmt = $pdo->prepare("INSERT INTO todos (text, completed) VALUES (:text, :completed)");
    $stmt->execute([
        ':text' => $data['text'],
        ':completed' => $data['completed'],
    ]);
    echo json_encode(['success' => true]);
    exit;
}

// Hapus todo
if ($action === 'deleteTodo') {
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("DELETE FROM todos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    echo json_encode(['success' => true]);
    exit;
}

// Jika aksi tidak ditemukan
echo json_encode(['error' => 'Invalid action']);
