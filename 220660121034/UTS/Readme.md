# UTS PBW TO-DO LIST
Assalamualaikum, perkenalkan nama saya Rani Siti Nabila  NPM 220660121034 Kelas IF-VA
## Deskripsi 
Proyek ini adalah aplikasi Todo List berbasis web yang memungkinkan pengguna untuk mengelola daftar tugas harian secara efisien. Aplikasi ini dikembangkan menggunakan PHP sebagai backend, MySQL sebagai database, serta HTML, CSS, dan JavaScript untuk tampilan antarmuka. Fitur-fitur utama aplikasi ini meliputi:
1. Menambah Tugas Baru - Pengguna dapat menambahkan tugas baru yang ingin dicatat dalam daftar Todo.
2. Menandai Tugas Selesai - Pengguna dapat menandai tugas yang telah selesai, sehingga daftar terlihat lebih teratur dan terfokus.
3. Menghapus Tugas - Pengguna dapat menghapus tugas yang tidak diperlukan lagi dari daftar.
4. Memperbarui Tugas - Pengguna dapat mengedit atau memperbarui deskripsi tugas yang ada.
## Struktur Proyek
1. Model-View-Controller (MVC) - Aplikasi ini menggunakan pola MVC yang memisahkan logika aplikasi, pengaturan tampilan, dan data. Hal ini memudahkan pemeliharaan dan pengembangan lebih lanjut.
2. Model: Mengelola akses data dan fungsi terkait database, seperti mengambil, menambah, mengubah, dan menghapus data dari database.
3. Controller: Menangani logika aplikasi dan menjadi penghubung antara view (tampilan) dan model.
4. View: Menyediakan antarmuka pengguna untuk berinteraksi dengan aplikasi.
## Teknologi yang Digunakan
1. PHP - Digunakan untuk menangani logika bisnis dan berinteraksi dengan database.
2. MySQL - Digunakan untuk menyimpan data tugas yang dikelola pengguna.
3. HTML, CSS, JavaScript - Digunakan untuk membangun tampilan antarmuka dan menangani interaksi pengguna.
## Fitur Tambahan:
1. Konfirmasi Penghapusan - Fitur ini memastikan pengguna tidak menghapus tugas secara tidak sengaja.
2. Status Tugas - Tugas yang sudah selesai ditampilkan dengan line-through untuk membedakan tugas yang sudah diselesaikan dan belum.
3. Formulir Dinamis untuk Edit - Pengguna dapat mengedit tugas dengan mudah melalui formulir dinamis yang ditampilkan saat pengguna memilih tugas untuk diperbarui.
## Database To-DO List
![Tampilan Database](https://github.com/RaniSitiNabila/Gambar-UTS-PBW/blob/main/Cuplikan%20layar%202024-11-08%20131823.png)

## Alur Dari To-Do List
### 1. Tampilan Awal
![Tampilan awal](https://github.com/RaniSitiNabila/Gambar-UTS-PBW/blob/main/Cuplikan%20layar%202024-11-08%20131506.png) 
Tampilan ini adalah antarmuka sederhana untuk aplikasi Todo List, dengan judul "Todo List" di bagian atas, kotak input untuk menambahkan tugas baru, dan tombol "Add" berwarna biru di sebelahnya. Pengguna bisa mengetik deskripsi tugas di kotak teks dan menambahkannya ke daftar dengan menekan tombol tersebut

### 2. Menambah Tugas Baru
![Tampilan Tambah Tugas](https://github.com/RaniSitiNabila/Gambar-UTS-PBW/blob/main/Cuplikan%20layar%202024-11-08%20131559.png)
Pada saat sudah menambahkan tugas baru, tugas tugasnya akan terlihat dan tugas tersebut bisa di delete, edit dan diselesaikan.

### 3. Tampilan Edit Tugas
![Tampilan Edit](https://github.com/RaniSitiNabila/Gambar-UTS-PBW/blob/main/Cuplikan%20layar%202024-11-08%20131620.png)

Formulir edit ini muncul di bawah area input untuk tugas baru, sehingga pengguna dapat dengan cepat beralih antara menambahkan dan mengedit tugas. Kolom teks di dalam formulir edit telah diisi sebelumnya dengan deskripsi tugas yang ada, memberi kemudahan bagi pengguna untuk memodifikasi informasi tersebut. Tombol untuk menyimpan perubahan dan membatalkan (atau menutup) formulir edit ditempatkan secara jelas

### 4. Tampilan Hapus Tugas
![Tampilan Hapus](https://github.com/RaniSitiNabila/Gambar-UTS-PBW/blob/main/Cuplikan%20layar%202024-11-08%20131636.png)

Saat tombol hapus diklik, muncul jendela konfirmasi yang meminta pengguna untuk memastikan apakah mereka benar-benar ingin menghapus tugas tersebut, dengan pesan seperti "Apakah Anda yakin ingin menghapus tugas ini?". Desain ini bertujuan memberikan pengalaman pengguna yang aman dan memastikan bahwa penghapusan hanya dilakukan setelah pertimbangan yang matang, mengurangi risiko kehilangan data secara tidak sengaja.
### 5. Tampilan Penyelesaian Tugas

![Tampilan Selesai](https://github.com/RaniSitiNabila/Gambar-UTS-PBW/blob/main/Cuplikan%20layar%202024-11-08%20131654.png)

Setiap tugas memiliki sebuah ikon centang yang terletak di sebelah kiri nama tugas, yang memungkinkan pengguna untuk menandai tugas sebagai selesai dengan sekali klik. Ketika tugas ditandai selesai, teks tugas akan dicoret menggunakan garis horizontal, memberikan indikasi visual yang jelas bahwa tugas tersebut telah diselesaikan. 