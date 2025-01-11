# UTS To-Do List

---

Sigit Pangestu
220660121169

---

Aplikasi To-Do List ini memungkinkan pengguna untuk menambahkan, menyelesaikan, mengedit, mencari, dan menghapus tugas dengan mudah. Aplikasi ini juga menyimpan riwayat tugas yang sudah diselesaikan atau dihapus.

## Fitur

1. **Tambah Tugas** - Menambahkan tugas baru ke dalam daftar.
2. **Cari Tugas** - Memungkinkan pencarian tugas berdasarkan kata kunci.
3. **Edit Tugas** - Mengubah isi dari tugas yang sudah ada.
4. **Selesaikan Tugas** - Menandai tugas sebagai selesai, dan tugas akan dipindahkan ke tabel riwayat.
5. **Hapus Tugas** - Menghapus tugas dari daftar dan memindahkannya ke tabel riwayat.
6. **Riwayat Tugas** - Menampilkan tugas yang sudah selesai atau dihapus, serta status masing-masing tugas tersebut.

## Struktur Proyek

- **listtodos.php** - Halaman utama HTML yang memuat tampilan aplikasi.
- **style.css** - File CSS yang mengatur tampilan dan gaya dari aplikasi.
- **script.js** - File JavaScript yang berisi fungsi-fungsi untuk menjalankan logika aplikasi.

## Cara Kerja

1. **HTML (listtodos.php)**

   File `listtodos.php` mengatur struktur utama dari aplikasi ini, termasuk form untuk menambah tugas, input pencarian, tabel daftar tugas, dan tabel riwayat tugas.

2. **CSS (style.css)**

   File `style.css` mengatur tampilan aplikasi, termasuk layout dan warna. Tabel daftar tugas memiliki gaya yang berbeda tergantung pada status tugas. Ada juga gaya responsif agar tampilan tetap nyaman di perangkat mobile.

3. **JavaScript (script.js)**

   - **Pengelolaan Tugas**: JavaScript digunakan untuk menangani tugas-tugas yang ditambahkan, termasuk penyimpanan dalam array `tasks` untuk tugas yang aktif, dan `completedTasks` untuk tugas yang sudah diselesaikan atau dihapus.
   
   - **Render Tugas**: Fungsi `renderTasks()` digunakan untuk menampilkan tugas yang sedang berlangsung berdasarkan pencarian, dan `renderTaskHistory()` untuk menampilkan riwayat tugas yang sudah selesai atau dihapus.

   - **Tambah Tugas**: Ketika form di-submit, tugas baru ditambahkan ke dalam array `tasks` dengan status `In Progress` dan waktu penambahan.

   - **Selesaikan Tugas**: Mengklik tombol "Complete" pada tugas mengubah status tugas menjadi `Completed` dan memindahkannya ke tabel riwayat dengan status `Success`.

   - **Edit Tugas**: Tombol "Edit" memungkinkan pengguna untuk mengubah teks tugas melalui prompt.

   - **Hapus Tugas**: Tombol "Delete" akan menghapus tugas dari daftar dan memindahkannya ke tabel riwayat dengan status `Failed`.

   - **Pencarian Tugas**: Input pencarian memfilter tugas berdasarkan teks yang dimasukkan, memudahkan pengguna untuk menemukan tugas tertentu.

## Penggunaan

1. Buka `listtodos.php` di browser Anda.
2. Tambahkan tugas baru menggunakan form yang tersedia.
3. Gunakan input pencarian untuk mencari tugas tertentu.
4. Gunakan tombol "Complete" untuk menyelesaikan tugas, "Edit" untuk mengubah tugas, dan "Delete" untuk menghapus tugas.
5. Riwayat tugas selesai dan dihapus akan muncul di tabel `Task History`.

## Instalasi dan Pengaturan

1. Pastikan Anda sudah memiliki server lokal (seperti XAMPP atau WAMP) untuk menjalankan file PHP.
2. Tempatkan folder proyek ini di dalam folder `htdocs` (untuk XAMPP).
3. Akses `http://localhost/[nama-folder]/listtodos.php` di browser Anda untuk melihat aplikasi.