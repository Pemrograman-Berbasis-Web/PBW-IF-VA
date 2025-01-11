# Todo List - Ujian Tengah Semester

### Nama: Siti Rachmania Putri  
### NIM: 220660121066

## Deskripsi
Aplikasi **Todo List** ini memungkinkan pengguna untuk menambahkan, menandai sebagai selesai, dan menghapus tugas. Aplikasi ini menggunakan PHP untuk backend dan menyimpan data tugas sementara dalam array. Desain antarmuka yang minimalis dan interaktif membuat pengalaman pengguna lebih menyenangkan.

## Fitur:
- **Menambahkan Tugas Baru** ➕
- **Menandai Tugas sebagai Selesai** ✅
- **Menghapus Tugas** ❌
- **Desain Responsif** 📱💻
- **Efek Visual** ✨

## Cara Kerja Fungsionalitas:

### 1. **Menambahkan Tugas Baru (Add Task) ➕**
   - Pengguna dapat menambahkan tugas baru melalui form input di bagian atas aplikasi.
   - Setelah mengetikkan nama tugas dan menekan tombol **Add**, data akan dikirim melalui metode **POST** ke server, yang kemudian akan diproses oleh backend PHP.
   - Tugas baru akan ditambahkan ke dalam **array data tugas** dan ditampilkan di daftar tugas (`ul.todo-list`).

### 2. **Menandai Tugas sebagai Selesai (Checkbox) ✅**
   - Setiap item tugas dilengkapi dengan **checkbox** di sampingnya.
   - Ketika pengguna mencentang checkbox tersebut, status tugas akan berubah menjadi "selesai". Di sisi frontend, ini ditandai dengan garis coret di teks tugas dan tampilan yang lebih transparan.
   - Pada backend, status `is_completed` untuk tugas tersebut akan diperbarui (dari `0` menjadi `1` jika dicentang, atau sebaliknya). Hal ini diproses menggunakan PHP dan kemudian status tersebut disimpan kembali dalam database.

### 3. **Menghapus Tugas (Delete Task) ❌**
   - Setiap tugas juga dilengkapi dengan tombol **Delete** di sampingnya.
   - Saat tombol **Delete** diklik, sistem akan menampilkan modal konfirmasi yang meminta pengguna untuk memastikan bahwa mereka ingin menghapus tugas tersebut.
   - Jika pengguna menekan **Yes**, tugas akan dihapus dari **array tugas** dan database.
   - Tugas yang dihapus tidak akan lagi muncul di daftar dan diperbarui secara otomatis di frontend.

### 4. **Penyimpanan Data Tugas**
   - Data tugas disimpan sementara di dalam **array** PHP. Pada aplikasi ini, penyimpanan menggunakan server lokal dan tidak ada database permanen. 
   - Setiap perubahan pada status tugas (misalnya, menandai tugas selesai atau menghapusnya) akan diproses di server PHP dan ditampilkan kembali ke pengguna setelah refresh halaman.
   
### 5. **Desain Responsif dan Interaktif** 📱💻
   - Aplikasi ini memiliki desain yang responsif, yang berarti tampilan aplikasi dapat menyesuaikan diri dengan baik di perangkat desktop maupun mobile.
   - Interaksi seperti hover pada tombol dan checkbox memberikan pengalaman pengguna yang lebih menarik.
   - Tugas yang selesai akan terlihat dengan teks yang dicoret dan tampilannya sedikit lebih transparan, memberikan indikasi visual yang jelas tentang status tugas.

## Alur Kerja Fungsionalitas:
1. Pengguna mengisi kolom input dan menekan **Add** untuk menambahkan tugas baru.
2. Backend PHP menambahkan tugas tersebut ke dalam array dan database.
3. Tugas baru muncul di halaman dengan checkbox untuk menandai selesai.
4. Ketika checkbox dicentang, tugas menampilkan garis coret dan berubah transparansi.
5. Pengguna dapat menghapus tugas melalui tombol **Delete**, yang memunculkan modal konfirmasi.
6. Jika pengguna setuju, tugas dihapus dari array dan database.

## Teknologi yang Digunakan:
- **PHP** untuk backend dan proses logika aplikasi.
- **HTML** dan **CSS** untuk tampilan antarmuka pengguna.
- **JavaScript** untuk beberapa interaksi di frontend.

---

**Ujian Tengah Semester**  
Siti Rachmania Putri | 220660121066
