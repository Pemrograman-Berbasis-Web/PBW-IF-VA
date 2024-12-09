# Case Study Todo List Menggunakan OOP dan MVC

![Todo List](todolist_project/assets/img/img_todos.png)

# Tujuan dari Proyek Todo List

1. Menerapkan prinsip _Object-Oriented Programming_ (OOP) dalam PHP.
2. Memahami konsep _Model-View-Controller_ (MVC) dalam pengembangan aplikasi web.
3. Mengintegrasikan template _engine_ untuk pemisahan logika dan tampilan.
4. Membuat aplikasi _Todo List_ sederhana yang dapat melakukan operasi _CRUD (Create, Read, Update, Delete)._

# Struktur Direktori Proyek Todo List

Berikut ini adalah struktur direktori proyek Todo List yang akan kita buat:

```graphql
/todolist_project
├── index.php                    # Entry point aplikasi
├── core
│   └── Database.php             # Koneksi database menggunakan PDO
├── models
│   ├── Todo.php                 # Model Todo yang merepresentasikan setiap task
│   └── TodoModel.php            # Model untuk operasi CRUD pada database
├── controllers
│   └── TodoController.php       # Controller untuk mengatur logika bisnis Todo
├── views
│   └── listTodos.php            # Template/view untuk menampilkan daftar Todo
└── assets
    ├── css
    │   └── style.css            # (Opsional) file CSS untuk styling
    └── js
        └── script.js            # (Opsional) file JavaScript untuk interaksi tambahan
```

# Penjelasan Struktur

- **index.php**: Merupakan entry point aplikasi, mengelola routing permintaan ke controller.
- **core/Database.php**: File yang mengatur koneksi ke database MySQL menggunakan PDO.
- **models/**:
  - **Todo.php**: Class Todo yang merepresentasikan setiap task.
  - **TodoModel.php**: Model untuk melakukan operasi CRUD terhadap database.
- **controllers/TodoController.php**: Controller yang mengatur logika bisnis aplikasi Todo.
- **views/listTodos.php**: Template untuk menampilkan daftar Todo ke pengguna.
- **assets/**:
  - **css/style.css**: (Opsional) Berisi style CSS untuk mempercantik tampilan aplikasi.
  - **js/script.js**: (Opsional) Berisi script JavaScript untuk interaksi tambahan pada tampilan aplikasi.

Anda dapat menambahkan `css/style.css` atau `js/script.js` sesuai kebutuhan untuk mempercantik tampilan atau menambahkan fungsionalitas JavaScript pada aplikasi Todo List.

Struktur ini membantu menjaga organisasi kode dengan memisahkan logika, tampilan, dan koneksi ke database.