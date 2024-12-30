![Gambar Tampilan Todolist](https://i.imgur.com/aZXPUhn.png)
![Gambar Tampilan postman](https://i.imgur.com/clCp4PG.png)

# **Todo List Project**

Aplikasi **Todo List** adalah aplikasi berbasis web dan REST API untuk mengelola daftar tugas. Aplikasi ini mendukung fitur seperti menambahkan, mengedit, menandai sebagai selesai, dan menghapus tugas. REST API juga disediakan untuk memungkinkan integrasi dengan aplikasi lain.

---

## **Fitur Utama**
### **Aplikasi Web**
- Menampilkan daftar tugas dengan tabel yang responsif.
- Menambahkan tugas baru dengan form input.
- Mengedit tugas (judul, tenggat waktu, deskripsi).
- Menandai tugas sebagai selesai atau belum selesai.
- Menghapus tugas.
- Pencarian tugas menggunakan input teks.
- Pagination dengan opsi jumlah data per halaman.

### **REST API**
- **GET /api?action=list**  
  Mengembalikan daftar semua tugas.
- **POST /api?action=add**  
  Menambahkan tugas baru dengan data JSON.
- **POST /api?action=complete**  
  Menandai tugas tertentu sebagai selesai.
- **POST /api?action=delete**  
  Menghapus tugas berdasarkan ID.

---

## **Struktur Proyek**

```
├── controllers/
│   ├── TodoController.php   # Controller untuk mengelola logika aplikasi
├── models/
│   ├── Todo.php             # Model untuk representasi data tugas
│   ├── TodoModel.php        # Model untuk operasi basis data
├── views/
│   ├── listTodos.php        # Tampilan untuk daftar tugas
├── core/
│   ├── Database.php         # Koneksi ke basis data
├── public/
│   ├── index.php            # Halaman utama aplikasi
│   ├── api.php              # REST API
│   ├── .htaccess            # Konfigurasi routing
├── assets/
│   ├── styles.css            # File CSS untuk styling
│   ├── scripts.js            # File JavaScript untuk interaktivitas
```

---

## **Instalasi**

### **Persyaratan**
1. PHP versi 7.4 atau lebih baru.
2. MySQL atau MariaDB sebagai basis data.
3. Server web seperti Apache atau Nginx.
4. Composer (opsional, jika menggunakan dependensi tambahan).

### **Langkah Instalasi**
1. **Clone repository ini**:
   ```bash
   git clone https://github.com/username/todolist.git
   cd todolist
   ```
2. **Konfigurasi Basis Data**:
   - Buat database baru dengan nama `todolist_db`.
   - Jalankan script berikut untuk membuat tabel:
     ```sql
     CREATE TABLE todos (
         id INT AUTO_INCREMENT PRIMARY KEY,
         title VARCHAR(255) NOT NULL,
         deadline DATE DEFAULT NULL,
         description TEXT DEFAULT NULL,
         is_completed TINYINT(1) DEFAULT 0,
     );
     ```

3. **Konfigurasi Koneksi Database**:
   - Buka file `core/Database.php` dan sesuaikan dengan informasi koneksi database Anda:
     ```php
     private $host = 'localhost';
     private $db_name = 'todolist_db';
     private $username = 'root';
     private $password = '';
     ```

4. **Jalankan Server**:
   - Gunakan PHP built-in server:
     ```bash
     php -S localhost:8000 -t public/
     ```

5. **Akses Aplikasi**:
   - Aplikasi web: [http://localhost:8000/](http://localhost:8000/)
   - REST API: [http://localhost:8000/api](http://localhost:8000/api)

---

## **Penggunaan REST API**

### **Endpoint dan Contoh**
1. **Mendapatkan Daftar Tugas**  
   - **Endpoint**: `GET /api?action=list`  
   - **Respons**:
     ```json
     [
         {
             "id": 1,
             "title": "Belajar REST API",
             "deadline": "2024-12-01",
             "description": "Menyelesaikan modul REST API",
             "is_completed": 0,
         }
     ]
     ```

2. **Menambahkan Tugas Baru**  
   - **Endpoint**: `POST /api?action=add`  
   - **Payload**:
     ```json
     {
         "task": "Belajar REST API",
         "deadline": "2024-12-01",
         "description": "Menyelesaikan modul REST API"
     }
     ```
   - **Respons**:
     ```json
     { "message": "Todo added successfully" }
     ```

3. **Menandai Tugas Selesai**  
   - **Endpoint**: `POST /api?action=complete`  
   - **Payload**:
     ```json
     { "id": 1 }
     ```
   - **Respons**:
     ```json
     { "message": "Todo marked as completed" }
     ```

4. **Menghapus Tugas**  
   - **Endpoint**: `POST /api?action=delete`  
   - **Payload**:
     ```json
     { "id": 1 }
     ```
   - **Respons**:
     ```json
     { "message": "Todo deleted" }
     ```

---

