# Aplikasi Todo List

Ini adalah aplikasi Todo List sederhana yang memungkinkan pengguna untuk mengelola tugas dengan menambahkan, mengedit, menghapus, dan menandai tugas sebagai selesai atau belum selesai. Proyek ini dibangun menggunakan PHP, MySQL, jQuery, dan Bootstrap.

## Fitur

- Menambahkan tugas baru dengan judul, deskripsi, dan deadline.
- Menandai tugas sebagai selesai atau belum selesai.
- Mengedit detail tugas.
- Menghapus tugas.
- Pencarian dan penyaringan tugas.
- Dukungan pagination (5, 10, atau 15 tugas per halaman).
- Desain responsif untuk perangkat desktop dan mobile.

## Teknologi yang Digunakan

- **Frontend**:
  - HTML, CSS (Bootstrap)
  - jQuery
  - Font Awesome untuk ikon
  - DataTables untuk interaksi tabel (pengurutan, pagination)

- **Backend**:
  - PHP (Arsitektur MVC)
  - MySQL Database

## Persyaratan

- PHP >= 7.4
- MySQL atau MariaDB
- Web server (Apache, Nginx, dll.)

## Instruksi Pengaturan

### 1. Clone Repository

Clone proyek ini ke mesin lokal Anda menggunakan perintah berikut:

```bash
git clone https://github.com/username/todolist.git
2. Buat Database
Buat database MySQL untuk aplikasi Todo List Anda:

sql
Copy code
CREATE DATABASE todo_list;
3. Konfigurasi Koneksi Database
Di folder proyek, buka file Database.php dan sesuaikan parameter koneksi database (host, username, password, nama database).

4. Setel Skema Database
Jalankan SQL berikut untuk membuat tabel yang diperlukan di database:

sql
Copy code
CREATE TABLE todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    deadline DATE,
    is_completed BOOLEAN DEFAULT 0
);
5. Menjalankan Aplikasi
Untuk menjalankan aplikasi, cukup tempatkan folder proyek di direktori root server web Anda (misalnya, htdocs untuk XAMPP atau www untuk WAMP) dan akses file index.php atau file PHP terkait melalui browser.

Contoh:

arduino
Copy code
http://localhost/todolist/
6. Dependensi
Bootstrap untuk desain responsif dan styling.
Font Awesome untuk ikon.
jQuery untuk manipulasi DOM.
DataTables untuk tabel interaktif dengan pengurutan dan pagination.
7. Catatan
Aplikasi ini menggunakan arsitektur MVC yang sederhana.
Aplikasi menyimpan data todo dalam database MySQL.
Pastikan PHP Anda mendukung PDO untuk interaksi dengan database.
Penggunaan
Menambahkan Tugas: Isi judul, deskripsi, dan deadline, lalu klik "Add".
Menandai Selesai: Klik "Mark as Complete" untuk tugas yang belum selesai.
Menandai Belum Selesai: Klik "Mark as Pending" untuk tugas yang sudah selesai.
Mengedit Tugas: Klik "Edit" untuk mengubah detail tugas.
Menghapus Tugas: Klik "Delete" untuk menghapus tugas.