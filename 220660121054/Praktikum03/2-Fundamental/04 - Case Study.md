# Case Study

## Implementasi *JavaScript* pada Website Portofolio

### Latar Belakang

Website portofolio adalah alat penting bagi seorang profesional atau kreator untuk menampilkan karya mereka. Dengan menggunakan JavaScript, kita dapat meningkatkan interaktivitas dan pengalaman pengguna.

Dalam studi kasus ini, kita akan membahas bagaimana JavaScript diterapkan dalam sebuah website portofolio.

> Silahkan buka kembali project web portofolio anda..

### Tujuan

+ Menyediakan pengalaman pengguna yang lebih baik.
+ Menampilkan konten secara dinamis.
+ Meningkatkan interaksi dengan elemen di halaman.

### Fitur Utama

- Animasi dan Transisi
   + Menambahkan efek transisi warana latar belakang halaman secara acak setiap kali halaman dimuat ulang.
   + Menampilkan pesan selamat datang. Pesan ini akan muncul setiap kali halaman dimuat.

### Kode 

 ```javascript
 // Fungsi untuk menghasilkan warna acak
        function generateRandomColor() {
            var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
            return randomColor;
        }

        // Mengubah warna latar belakang halaman secara acak
        function changeBackgroundColor() {
            document.body.style.backgroundColor = generateRandomColor();
        }

        // Memanggil fungsi changeBackgroundColor saat halaman dimuat ulang
        window.onload = function() {
            changeBackgroundColor();
        };
 ```
**Penjelasan**:

1. **Fungsi `generateRandomColor`**:
   - **Definisi**: Fungsi ini digunakan untuk menghasilkan warna acak dalam format hex.
   - **Sintaks**:
     ```javascript
     function generateRandomColor() {
     ```
   - **Variabel**:
     - `randomColor`: Merupakan variabel lokal yang menyimpan nilai warna acak yang dihasilkan.
   - **Proses**:
     - `Math.random()`: Menghasilkan angka acak antara 0 dan 1.
     - `Math.floor()`: Membulatkan angka ke bawah.
     - `16777215`: Merupakan nilai maksimum untuk warna dalam format hex (FFFFFF), yang setara dengan 2^24 - 1.
     - `toString(16)`: Mengonversi angka menjadi string dalam basis 16 (hexadecimal).
   - **Tipe Data**: 
     - `string`: Hasil dari `generateRandomColor()` adalah string yang merepresentasikan warna dalam format hex (misalnya, `#a1b2c3`).

2. **Fungsi `changeBackgroundColor`**:
   - **Definisi**: Fungsi ini mengubah warna latar belakang (background) halaman web menjadi warna acak yang dihasilkan oleh `generateRandomColor`.
   - **Sintaks**:
     ```javascript
     function changeBackgroundColor() {
     ```
   - **Proses**:
     - `document.body.style.backgroundColor`: Mengakses properti `backgroundColor` dari elemen `body` pada dokumen HTML, dan mengubah nilainya dengan warna acak yang dihasilkan.
   - **Tipe Data**:
     - `string`: Nilai warna yang diatur adalah string dalam format hex.

3. **Menyetel Event `onload`**:
   - **Sintaks**:
     ```javascript
     window.onload = function() {
         changeBackgroundColor();
     };
     ```
   - **Proses**:
     - `window.onload`: Event yang dipanggil ketika halaman selesai dimuat. Dalam hal ini, fungsi yang ditetapkan akan dijalankan saat halaman siap.
   - **Tipe Data**:
     - `function`: Kode di dalam `onload` adalah fungsi yang dipanggil saat event terjadi.

- **Fungsi**: Ada dua fungsi, `generateRandomColor` dan `changeBackgroundColor`, yang bekerja bersama untuk mengubah warna latar belakang halaman web secara acak setiap kali halaman dimuat ulang.
- **Variabel**: `randomColor` digunakan untuk menyimpan nilai warna acak.
- **Tipe Data**: Fungsi menghasilkan dan mengubah nilai dengan menggunakan string untuk warna hex, dan menggunakan fungsi serta event untuk interaksi dengan DOM.
---


```javascript
// Menampilkan pesan sambutan
    function showWelcomeMessage() {
        alert("Selamat datang di portofolio saya! Saya adalah seorang pengembang web yang penuh semangat.");
    }

    window.onload = function() {
        changeBackgroundColor();
        showWelcomeMessage(); // Panggil fungsi pesan sambutan
        displayProjects();
        displayExperience();
    };
```

**Penjelasan:**

1. Fungsi `showWelcomeMessage`:

Fungsi ini menggunakan `alert()` untuk menampilkan pesan selamat datang. Pesan ini akan muncul setiap kali halaman dimuat.

2. Panggil Fungsi dalam `window.onload`:

Fungsi `showWelcomeMessage()` dipanggil di dalam `window.onload`, sehingga pesan akan muncul setelah latar belakang halaman diubah dan sebelum proyek dan pengalaman kerja ditampilkan.

---

> Jangan ragu untuk mengeksplorasi dan menambahkan fungsi-fungsi baru ke dalam proyek ini!👀

> Kreativitasmu adalah batasan terbaik dalam pengembangan proyek ini, jadi manfaatkan peluang ini untuk menunjukkan keahlian dan inovasi yang kamu miliki!👌