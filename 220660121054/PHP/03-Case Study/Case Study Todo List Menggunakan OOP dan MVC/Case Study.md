Case Study Todo List Menggunakan OOP dan MVC
=============================

- [Case Study Todo List Menggunakan OOP dan MVC](#case-study-todo-list-menggunakan-oop-dan-mvc)
- [Pembuatan Database](#pembuatan-database)
- [Koneksi Database](#koneksi-database)
- [Membuat Model Class](#membuat-model-class)
- [Membuat Todo Class](#membuat-todo-class)
- [Membuat Controller Class](#membuat-controller-class)
- [Menambahkan Template Engine pada Framework](#menambahkan-template-engine-pada-framework)
- [Membuat Todo Controller Class](#membuat-todo-controller-class)
- [Kesimpulan](#kesimpulan)


# Pembuatan Database
Buat database dan tabel di MySQL sebagai berikut:

```sql
CREATE DATABASE todolist_db;

USE todolist_db;

CREATE TABLE todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    is_completed BOOLEAN DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

# Koneksi Database
Buat file `Database.php` untuk koneksi ke database menggunakan PDO.

```php
<?php
// config/Database.php

class Database {
    private $host = 'localhost';
    private $db_name = 'todolist_db';
    private $username = 'root';
    private $password = 'root';
    public $conn;

    /**
     * Membuat objek koneksi PDO ke database.
     * 
     * Metode ini akan mencoba membuat objek koneksi PDO ke database yang diatur
     * oleh variabel kelas $host, $db_name, $username dan $password. Jika
     * koneksi berhasil maka metode ini akan mengembalikan objek koneksi PDO,
     * jika gagal maka metode ini akan menampilkan pesan kesalahan dan mengembalikan
     * null.
     * 
     * @return PDO|null
     */
    public function getConnection() {
        $this->conn = null;

        // Mencoba membuat objek koneksi PDO
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        // Jika terjadi kesalahan, maka menampilkan pesan kesalahan
        catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        // Mengembalikan objek koneksi PDO yang dibuat
        return $this->conn;
    }
}
?>
```
# Membuat Model Class
Model adalah tempat untuk berinteraksi dengan database. Buat file `TodoModel.php` untuk menangani operasi CRUD di tabel `todos`.

```php
<?php
// models/TodoModel.php

require_once 'core/Database.php';

class TodoModel {
    private $conn;
    private $table_name = "todos";

    /**
     * Konstruktor untuk kelas
     * 
     * Metode ini akan membuat objek koneksi PDO ke database
     * yang akan digunakan untuk operasi CRUD
     */
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    /**
     * Mendapatkan semua todo yang ada di database
     * 
     * Metode ini akan melakukan query ke database untuk mendapatkan
     * semua todo yang ada di database. Hasilnya akan diurutkan
     * berdasarkan tanggal pembuatan descending.
     * 
     * @return array Sebuah array yang berisi semua todo yang ada di database
     */
    public function getAllTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Membuat todo baru
     * 
     * Metode ini akan membuat todo baru dengan teks yang diberikan
     * dan menyimpannya di database. Jika berhasil maka metode ini
     * akan mengembalikan nilai true, jika gagal maka metode ini akan
     * mengembalikan nilai false.
     * 
     * @param string $task Teks dari tugas
     * @return boolean
     */
    public function createTodo($task) {
        $query = "INSERT INTO " . $this->table_name . " (task) VALUES (:task)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":task", $task);
        return $stmt->execute();
    }

    /**
     * Memperbarui status todo
     * 
     * Metode ini akan memperbarui status todo dengan id yang diberikan
     * dan status yang diberikan. Jika berhasil maka metode ini
     * akan mengembalikan nilai true, jika gagal maka metode ini akan
     * mengembalikan nilai false.
     * 
     * @param int $id ID dari todo yang akan diperbarui statusnya
     * @param int $is_completed Status yang akan diperbarui
     * @return boolean
     */
    public function updateTodoStatus($id, $is_completed) {
        $query = "UPDATE " . $this->table_name . " SET is_completed = :is_completed WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":is_completed", $is_completed);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    /**
     * Menghapus todo
     * 
     * Metode ini akan menghapus todo dengan id yang diberikan
     * dari database. Jika berhasil maka metode ini
     * akan mengembalikan nilai true, jika gagal maka metode ini akan
     * mengembalikan nilai false.
     * 
     * @param int $id ID dari todo yang akan dihapus
     * @return boolean
     */
    public function deleteTodo($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>
```

# Membuat Todo Class
Class `Todo` akan mewakili setiap tugas (task) dalam aplikasi Todo List.

```php
<?php
// models/Todo.php

class Todo {
    public $id;
    public $task;
    public $is_completed;
    public $created_at;
    public $updated_at;

    /**
     * Konstruktor untuk Todo
     * @param int $id ID dari todo
     * @param string $task Tugas dari todo
     * @param bool $is_completed Apakah todo diselesaikan
     * @param string $created_at Timestamp pembuatan todo
     * @param string $updated_at Timestamp pembaharuan todo
     */
    public function __construct($id, $task, $is_completed, $created_at, $updated_at) {
        $this->id = $id;
        $this->task = $task;
        $this->is_completed = $is_completed;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
?>
```






# Membuat Controller Class
Controller adalah tempat logika aplikasi berada. `TodoController.php` akan memproses permintaan dan menampilkan hasilnya melalui `view.`

```php
<?php
// controllers/TodoController.php
// Memanggil file TodoModel.php untuk menggunakan class TodoModel
require_once 'models/TodoModel.php';
/**
 * Kelas yang bertanggung jawab untuk menangani permintaan terkait TodoItems
 */
class TodoController {
    /**
     * Instans dari TodoModel
     * @var TodoModel
     */
    private $model;

    /**
     * Konstruktor untuk kelas
     */
    public function __construct() {
        $this->model = new TodoModel();
    }

    /**
     * Mengembalikan semua todo
     * @return array Sebuah array dari semua todo
     */
    public function index() {
        return $this->model->getAllTodos();
    }

    /**
     * Membuat todo baru
     * @param string $task Teks dari tugas
     * @return array Todo yang baru dibuat
     */
    public function add($task) {
        return $this->model->createTodo($task);
    }

    /**
     * Menandai todo sebagai selesai
     * @param int $id ID dari todo yang akan ditandai sebagai selesai
     * @return array Todo yang diperbarui
     */
    public function markAsCompleted($id) {
        return $this->model->updateTodoStatus($id, 1);
    }

    /**
     * Menghapus todo
     * @param int $id ID dari todo yang akan dihapus
     * @return array Todo yang dihapus
     */
    public function delete($id) {
        return $this->model->deleteTodo($id);
    }
}
```

# Menambahkan Template Engine pada Framework
Untuk template engine, kita bisa menggunakan PHP dengan menyimpan file template di dalam folder `views`

add `listTodos.php` untuk menampilkan daftar tugas:

```php
<!-- views/listTodos.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <!--
        style.CSS
        Berfungsi untuk membuat tampilan lebih menarik
    -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--
        script.js
        Berfungsi untuk mengirimkan data ke server
        serta menampilkan alert jika data berhasil di input
    -->
    <script src="assets/js/script.js"></script>
    
</head>
<body>
    <h1>Todo List</h1>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?php
                    // Tampilkan deskripsi Todo
                    echo $todo['task'];

                    // Jika Todo belum selesai, tampilkan link untuk menandai sebagai selesai
                    if (!$todo['is_completed']) {
                        echo ' ';
                        echo '<a href="?action=complete&id=' . $todo['id'] . '">Mark as completed</a>';
                    }

                    // Tampilkan link untuk menghapus Todo
                    echo ' ';
                    echo '<a href="?action=delete&id=' . $todo['id'] . '">Delete</a>';
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <form method="POST" action="?action=add">
        <input type="text" name="task" placeholder="New Task">
        <button type="submit">Add</button>
    </form>
</body>
</html>
```

# Membuat Todo Controller Class
Tambahkan logika _routing_ di `index.php` agar pengguna dapat mengakses fungsi yang sesuai.

```php
<?php
// index.php

/**
 * File ini adalah titik awal dari aplikasi.
 *
 * Ia menggunakan kelas TodoController untuk menangani berbagai aksi
 * dan kemudian merender tampilan dengan daftar tugas.
 */

// Memanggil file TodoController.php untuk menggunakan class TodoController
require_once 'controllers/TodoController.php';

$controller = new TodoController();
$action = $_GET['action'] ?? null;

// Menangani parameter aksi
switch ($action) {
    case 'add':
        // Dapatkan tugas dari request
        $task = $_POST['task'] ?? '';

        // Tambahkan tugas ke daftar
        $controller->add($task);
        break;
    case 'complete':
        // Dapatkan id dari request
        $id = $_GET['id'] ?? '';

        // Tandai tugas sebagai selesai
        $controller->markAsCompleted($id);
        break;
    case 'delete':
        // Dapatkan id dari request
        $id = $_GET['id'] ?? '';

        // Hapus tugas dari daftar
        $controller->delete($id);
        break;
}

// Dapatkan daftar tugas
$todos = $controller->index();

// Merender tampilan
require 'views/listTodos.php';
```

# Kesimpulan

Dengan menyelesaikan case study ini, Anda telah mempelajari:
1. Cara menerapkan OOP dan MVC di PHP untuk aplikasi Todo List.
2. Cara mengelola interaksi antara_ model, view,_ dan _controller._
3. Integrasi sederhana dari _template engine _untuk memisahkan logika bisnis dan tampilan.

Selanjutnya: Aplikasi ini dapat dikembangkan lebih lanjut, misalnya dengan menambahkan fitur
- pencarian atau filter tugas berdasarkan status (_completed atau pending_).