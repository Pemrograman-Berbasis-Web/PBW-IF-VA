# To-Do List Project

1. **Menambah Action Toggle untuk Status `is_completed`**
   - Fitur toggle status `is_completed` pada database ditambahkan untuk memungkinkan pengguna menandai tugas sebagai selesai atau belum selesai.
   - Action ini diterapkan di `index.php` dengan penambahan:
     ```php
     header("Location: index.php");
     exit;
     ```
     yang berfungsi untuk mencegah pengulangan perintah sebelumnya ketika halaman di-refresh.

2. **Penambahan Icon pada Tampilan**
   - Menambahkan beberapa ikon pada judul halaman di elemen `<h2>` dan juga pada `status-icon` di `listTodo.php` untuk memperjelas status penyelesaian setiap tugas.

3. **Penambahan Fungsi `getTodoById`**
   - Fungsi `getTodoById` ditambahkan pada `TodoModel` untuk memudahkan dalam mengambil, mengedit, atau menghapus tugas tertentu berdasarkan ID dari database.
   - Fungsi ini juga berguna untuk implementasi fungsi `toggleStatus` pada `TodoController.php` guna menjalankan action toggle pada status `is_completed`.

4. **Penambahan `styles.css` untuk Tampilan UI**
   - Menambahkan file `styles.css` untuk mengatur tampilan seperti:
     - Membuat container utama yang lebih rapi.
     - Mengganti font agar terlihat lebih menarik.
     - Membuat tombol dengan efek hover.
     - Mendesain daftar tugas dengan ikon `X` untuk delete dan ikon `unchecked.png` / `checked.png` untuk membedakan status `is_completed`.

5. **Penambahan `script.js` untuk Validasi Input**
   - Menambahkan file `script.js` dengan program validasi yang memberikan notifikasi alert ketika `input-box` kosong saat menambahkan tugas baru. Ini berfungsi untuk memastikan teks harus diisi sebelum menambah tugas ke daftar.
