# Praktikum Framework Laravel

## Deskripsi
Praktikum ini berfokus pada penggunaan framework Laravel dalam pengembangan aplikasi web. Di dalamnya terdapat beberapa topik seperti otentikasi, reset password, pengujian (testing), serta pengelolaan user dan konten di aplikasi. Tujuan dari praktikum ini adalah untuk memahami cara kerja dan memanfaatkan fitur-fitur yang disediakan oleh Laravel untuk membangun aplikasi yang dinamis dan aman.

## Fitur Utama
- **Autentikasi Pengguna**: Login, logout, dan registrasi pengguna.
- **Pengaturan Password**: Pengguna dapat mengubah password mereka atau mereset password yang lupa.
- **Pengujian Otomatis (Testing)**: Memastikan aplikasi berjalan dengan baik menggunakan unit dan feature tests.
- **Manajemen Konten**: Menambahkan, mengubah, dan menghapus konten melalui interface yang disediakan.
  
## Penggunaan

Setelah aplikasi berhasil diinstal, Anda dapat mengaksesnya di `http://127.0.0.1:8000`. Berikut adalah rute yang tersedia untuk login, registrasi, dan pengelolaan konten:
### Tampilan Awal
![Tampilan Awal ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20153116.png)

### Tampilan Login
- Akses: `http://127.0.0.1:8000/login`
- Deskripsi: Halaman untuk melakukan login ke aplikasi.
![Tampilan login ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20170511.png)

### Tampilan Register
- Akses: `http://127.0.0.1:8000/register`
- Deskripsi: Halaman untuk mendaftar sebagai pengguna baru.
![Tampilan Register ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20153128.png)


### Tampilan Dashboard
- Akses: `http://127.0.0.1:8000/dashboard`
- Deskripsi: Halaman utama setelah login, yang berisi konten dan pengaturan aplikasi yang dapat diakses oleh pengguna yang sudah terautentikasi.
- ![Tampilan Dasboard ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-06%20231716.png)


### Tampilan Profile
- Akses: `http://127.0.0.1:8000/profile`
- Deskripsi: Halaman untuk melihat dan mengedit profil pengguna yang sudah login.
![Tampilan Profile ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20171651.png)

### Tampilan Post
- Akses: `http://127.0.0.1:8000/posts`
- Deskripsi: Halaman untuk menampilkan daftar semua postingan yang ada.
![Tampilan Post ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20153332.png)


### Tampilan Create
- Akses: `http://127.0.0.1:8000/posts/create`
- Deskripsi: Halaman untuk menampilkan formulir yang memungkinkan pengguna untuk membuat postingan baru.
![Tampilan Create ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20153204.png)

### Tampilan Database
![Tampilan Database ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20153801.png)
Bisa kita lihat bawa create yang tadi masuk ke database

### Testing
![Testing ](https://github.com/RaniSitiNabila/Gambar-PBW/blob/main/Screenshot%202024-12-09%20162212.png)