![html5](https://wallpaperaccess.com/full/9147315.png)

## Daftar Isi

- [Tujuan Pembelajaran](#tujuan-pembelajaran)
  - [Apa Itu HTML ?](#apa-itu-html-)
- [Element](#element)
- [Attribute](#attribute)
- [Heading](#heading)
- [Paragraph](#paragraph)
- [Style](#style)
- [Quoting](#quoting)
- [Formating](#formating)
- [Comment](#comment)
- [Image](#image)
- [Link](#link)
- [Table](#table)
- [List](#list)
- [Audio](#audio)
- [Video](#video)
- [Case Studies](#case-studies)
    - [Studi Kasus: Membangun Halaman Web Portofolio Pribadi](#studi-kasus-membangun-halaman-web-portofolio-pribadi)
      - [Deskripsi](#deskripsi)
      - [Struktur Halaman](#struktur-halaman)
      - [Pelajari Kode berikut:](#pelajari-kode-berikut)
    - [Penjelasan Kode](#penjelasan-kode)
    - [Kesimpulan](#kesimpulan)
  - [Referensi](#referensi)

# Tujuan Pembelajaran

Setelah praktikum ini dilakukan Anda diharapkan dapat:

1. Memahami Peran dan Fungsi HTML dalam Pengembangan Web:
   
   - Mampu menjelaskan konsep dasar HTML sebagai bahasa markup dan perannya dalam membangun struktur dasar dari sebuah situs web.
   - Mampu mengidentifikasi hubungan antara HTML, CSS, dan JavaScript dalam pengembangan web secara holistik.
  
2. Menganalisis Struktur Dokumen HTML:

   - Memahami elemen-elemen penting dalam HTML, termasuk `<html>`, `<head>`,` <body>`,`<title>`, serta elemen struktur lainnya.
  
3. Menggunakan Tag-Tag HTML Umum untuk Membangun Halaman
Web Dinamis:

   - Mampu menggunakan tag HTML dasar
   - Dapat membuat halaman web yang fungsional dengan menyertakan elemen-elemen multimedia dan interaktif.

4. Membangun Struktur Web yang Semantik dan Valid Secara
Teknikal:

   - Dapat menulis kode HTML dengan mengikuti standar web modern, termasuk menggunakan elemen semantik yang sesuai.
   - Memahami cara melakukan validasi HTML menggunakan alat seperti W3C Validator untuk memastikan kode bebas dari error sintaks.

5. Membuat Halaman Web yang Terstruktur dengan Baik untuk
Presentasi dan Publikasi:

   - Mampu menyusun proyek web sederhana berbasis HTML untuk di-hosting di server, baik lokal maupun online, sebagai bagian dari proyek atau presentasi.
   - Memahami cara mengatur dokumen HTML agar dapat digunakan dalam kerangka kerja pengembangan web modern (seperti Bootstrap atau integrasi dengan JavaScript dan CSS).

## Apa Itu HTML ?

HTML adalah singkatan dari **H**ypertext **M**arkup **L**anguage, yaitu bahasa markup standar untuk membuat dan menyusun halaman dan aplikasi web.

Pada umumnya penggunaan umum HTML adalah untuk menyusun bagian  *paragraf* ,  *heading* , maupun *link* pada halaman web. Tapi, meskipun susunannya seperti coding, perlu diketahui bahwa HTML bukanlah bahasa pemrograman.

HTML tidak dianggap sebagai bahasa pemrograman karena tidak bisa memberikan fungsi yang dinamis. Sekarang, bahasa markup ini dianggap sebagai standar web resmi, dikelola oleh World Wide Web Consortium (W3C), yang juga bertugas merilis pembaruan rutin HTML.

Untuk belajar HTML secara interaktif pada materi berikut-berikutnya, saya rekomendasikan belajar melalui : [www.w3schools.com](https://www.w3schools.com/html/tryit.asp?filename=tryhtml_intro)

# Element

Setelah mengetahui tentang HTML selanjutnya kita akan belajar,  *Element HTML* . Element HTML merupakan isi objek yang berada pada awalan tag pembuka dan tag penutup, contoh sebagai berikut :

```html
<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <strong>Pemrograman Berbasis Web</strong>
   </body>
</html>
```

![1727028193864](image/modul-html/1727028193864.png)

# Attribute

Setelah mengetahui tentang Element selanjutnya kita akan belajar,  *Attribute HTML* . Attribute HTML merupakan informasi tambahan yang digunakan didalam tag pembuka. attribute biasanya memiliki 2 bagian yaitu nilai dan nama. contoh :

```html
<h2 align="text-center">Pemrograman Berbasis Web</h2>
```

Pada contoh di atas, `align` dan `text-center` berperan sebagai *attribute*.

Attribute sendiri memiliki berbagai jenis diataranya sebagai berikut :

| Attribute      | Penjelasan                                                                                                            |
| -------------- | --------------------------------------------------------------------------------------------------------------------- |
| Src            | attribute yang digunakan untuk menunjukan*source* yang akan di tampilkan                                            |
| Width & Height | attribute yang digunakan untuk mengatur panjang dan lebar sebuah gambar                                               |
| Alt            | attribute yang digunakan untuk menampilkan sebuah text jika gambar gagal di tampilkan                                 |
| Style          | attribute yang digunakan untuk menambahkan sebuah style pada sebuah element, seperti warna, ukuran teks, dan lainnya. |
| Lang           | attribute yang digunakan untuk mendefinisikan sebuah bahasa yang digunakan pada halaman web                           |
| Title          | attribute yang digunakan untuk beberapa informasi tambahan tentang suatu elemen                                       |

# Heading

Heading merupakan element atau tag html yang berfungsi untuk menampilkan bagian penting pada halaman web. Element HTML sendiri memiliki beberapa tingkatan yaitu `<h1>, <h2>, <h3>, <h4>, <h5>` dan `<h6>`. perbedaan dari tingkatan element tersebut berupa ukuran teks yang di tampilkan.

```html
<!DOCTYPE html>
<head>
   <title>Pemrograman Berbasis Web</title>
</head>
<body>
   <h1> Ini adalah Heading 1</h1>
   <h2> Ini adalah Heading 2</h2>
   <h3> Ini adalah Heading 3</h3>
   <h4> Ini adalah Heading 4</h4>
   <h5> Ini adalah Heading 5</h5>
   <h6> Ini adalah Heading 6</h6>
</body>
</html>
```

![1727028519184](image/modul-html/1727028519184.png)

# Paragraph

Paragraph merupakan suatu elemen yang terdapat didalam HTML. dalam paragraph itu sendiri terdapat 3 element yang bisa dikombinasikan langsung dengan tag paragraph yaitu :` align="left", align="right", align="center",` dan `align="justify"`.

contohnya kurang lebih seperti berikut ini :

```html
<!DOCTYPE html>
<html>
   <head>
      <title>Pemrograman Berbasis Web</title>
   </head>
   <body>
      <p align="left">penulisan paragraf rata kiri dalam html</p>
      <p align="right">penulisan paragraf rata kanan dalam html</p>
      <p align="center">penulisan paragraf rata tengah dalam html</p>
      <p align="justivy">penulisan paragraf rata kiri kanan dalam html</p>
   </body>
</html>
```

![1727028799176](image/modul-html/1727028799176.png)

# Style

Pada HTML kita bisa menambahkan sebuah *attribute* *style* pada suatu *element* agar *element* yang kita miliki terlihat lebih bagus, *attribute* *style* sendiri memiliki beragam fungsinya baik itu berupa,  *color* ,  *font* , size, dan masih banyak lagi.

contoh :

```html
<p>I am normal</p>
<p style="color:red;">I am red</p>
<p style="color:blue;">I am blue</p>
<p style="font-size:50px;">I am big</p>
```

![1727028918808](image/modul-html/1727028918808.png)

# Quoting

Pada HTML kita juga bisa membuat sebuah *quote* dari berbagai sumber menggunakan *tag* `blockquote`.

Contoh:

```html
<p>ini adalah sebuah quote sari website www.goodreads.com:</p>
<blockquote cite="https://www.goodreads.com/quotes">
   “Stay hungry. Stay foolish. Never let go of your appetite to go after new ideas, new experiences, and new adventures.”
   ― Steve Jobs
</blockquote>
```

![1727029614140](image/modul-html/1727029614140.png)

# Formating

Pada HTML kita juga bisa membuat beberapa *element* sepesial dari sebuah kalimat atau  *text* . Formating sendiri terdiri dari beberapa element diantaranya :

| Element      | Kegunaan                                                                |
| ------------ | ----------------------------------------------------------------------- |
| `<b>`      | *Text* yang bersifat tebal                                            |
| `<strong>` | *Text* penting pada sebuah kata / kalimat dan bersifat tebal          |
| `<i>`      | *Text* miring                                                         |
| `<em>`     | *Text* yang ditekankan pada sebuah kata / kalimat dan bersifat miring |
| `<mark>`   | *Text* yang ditandai pada sebuah kata / kalimat                       |
| `<small>`  | Ukuran*text* yang lebih kecil                                         |
| `<del>`    | *Text* yang digaris pada hurufnya                                     |
| `<ins>`    | *Text* yand digaris bawahi                                            |
| `<sub>`    | *Text y*ang diletakan pada bagian bawah                               |
| `<sup>`    | *Text* yang diletakan pada bagian atas                                |

Berikut adalah contoh formatting dalam HTML yang menggunakan berbagai elemen diatas:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Formatting dalam HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .formatted-text {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="formatted-text">
        <h1>Contoh Formatting dalam HTML</h1>
        <p>
            Ini adalah contoh teks menggunakan berbagai elemen formatting:
        </p>
        <p>
            <b>Teks tebal dengan <b></b> dan <strong>teks tebal dengan <strong></strong>.
        </p>
        <p>
            <i>Teks miring dengan <i></i> dan <em>teks miring dengan <em></em>.
        </p>
        <p>
            Teks yang <mark>ditandai dengan <mark></mark>.
        </p>
        <p>
            Teks yang lebih <small>kecil dengan <small></small>.
        </p>
        <p>
            Teks yang <del>dihapus dengan <del></del> dan teks yang <ins>ditambahkan dengan <ins></ins>.
        </p>
        <p>
            Teks dengan <sub>subskrip dengan <sub></sub> dan <sup>superskrip dengan <sup></sup>.
        </p>
    </div>
</body>
</html>
```

Silakan coba jalankan kode ini di browser Anda untuk melihat hasilnya!

# Comment

Pada HTML kita juga dapat menuliskan sebuah kalimat / kata yang ingin kita tulis sebagai dokumentasi akan tetapi tidak di tampilkan pada halaman web disebut komentar, penggunaan tag komentar sendiri cukup sederhana yaitu : `<!-- tulis komentar anda -->`

```html
<!-- section image -->

<Img src="logo-fti.png" alt="Fakultas Teknologi Informasi">
<!-- end section image -->
```

Pada kode diatas jika kita menjalankannya pada sebuah browser maka element yang di tampilkan hanyalah sebuah ` tag Image` yang kita buat

# Image

Pada HTML kita juga menyisipkan sebuah gambar menggunakan sebuah tag `<image>` . tag tersebut biasanya digunakan untuk menampilkan sebuah gambar pada sebuah webiste.

Contoh:

```html
<img src="logo-fti.png" alt="Fakultas Teknologi Informasi">
```

Pada kode diatas kita membuat sebuah tag `<image>` dengan 2 buat attribute yaitu : `src` dan `alt`. Pada *attribut* `src` digunakan untuk menargetkan sebuah gambar yang ingin kita tampilkan, sedangkan untuk `alt` digunakan untuk jika gambar pada *attribute* `src` gagal di tampilkan maka *attribute* `alt` yang akan di tampilkan.

# Link

Pada HTML kita juga bisa membuat sebuah link yang dapat menargetkan sebuah dokumen, web dan lain sebagainya, menggunakan Tag `<a href="">`

Contoh:

```html
<a href="https://fti.unsap.ac.id">`Website Fakultas Teknologi Informasi`</a>
```

Pada kode diatas kita memiliki sebuah **tag** `a` dan `href` sebagai *attribute*, `href` disini memiliki peran penting sebagai *link* / indikasi dokumen yang akan kita tuju.

# Table

Pada HTML kita bisa membuat sebuah table yang berfungsi untuk menampilkan data dalam bentuk baris dan kolom, Pada pembuatanya sendiri tergolong cukup mudah, berikut cara pembuatan `table` sederhana pada HTML :

```html
<table>
  <tr>
    <th>Nama</th>
    <th>Negara</th>
  </tr>
  <tr>
    <td>fti unsap</td>
    <td>Indonesia</td>
  </tr>
</table>
```

# List

Pada HTML saat kita ingin membuat sebuah `list` data kita bisa menggunakan tag *element* `ul` dan `ol`, penggunaan `ul` digunakan untuk `list` berupa point sedangkan `ol` digunakan untuk angka

contoh : penggunaan list sederhana dalam HTML menggunakan **daftar terurut (ordered list)** dan **daftar tidak terurut (unordered list).**

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Daftar Tidak Terurut</title>
</head>
<body>
    <h1>Hobi Saya</h1>
    <ul>
        <li>Membaca buku</li>
        <li>Olahraga</li>
        <li>Memasak</li>
        <li>Berjalan-jalan</li>
    </ul>
</body>
</html>
```

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Daftar Terurut</title>
</head>
<body>
    <h1>Langkah-langkah Membuat Kopi</h1>
    <ol>
        <li>Rebus air</li>
        <li>Masukkan kopi ke dalam cangkir</li>
        <li>Tuangkan air panas ke dalam cangkir</li>
        <li>Aduk dan nikmati</li>
    </ol>
</body>
</html>
```

Penjelasan
-` <ul>` digunakan untuk membuat daftar tidak terurut, dengan item-itemnya ditandai dengan`<li>`.

- `<ol>` digunakan untuk membuat daftar terurut, yang juga menggunakan `<li>` untuk item-itemnya, tetapi dengan urutan yang ditentukan.

Anda bisa menyalin kode di atas ke dalam file HTML dan membukanya di browser untuk melihat hasilnya!

# Audio

Pada HTML kita juga bisa menyisipkan sebuah audio dengan menggunakan *tag* `<audio/>`. *tag* tersebut bisanya digunakan untuk memutar sebuah audio dihalaman web

contoh :

```html
<audio controls>
  <source src="testing.mp3" type="audio/mpeg">
</audio>
```

Pada kode diatas `controls` merupakan sebuah element untuk mengatur sebuah audio kita seperti `auto play`, `volume` , `pause` dan masih banyak lagi. sedangkan *source* merupakan element untuk menargetkan file audio kita.

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Audio</title>
</head>
<body>
    <h1>Putar Musik</h1>
    <audio controls>
        <source src="musik.mp3" type="audio/mpeg">
        <source src="musik.ogg" type="audio/ogg">
        Browser Anda tidak mendukung elemen audio.
    </audio>
</body>
</html>
```

Pesan "*Browser Anda tidak mendukung elemen audio*" akan ditampilkan jika browser tidak mendukung elemen audio.

Pastikan untuk mengganti `musik.mp3` dan ` musik.ogg` dengan path yang benar menuju file audio yang ingin Anda gunakan.

# Video

Pada HTML selain kita bisa menyisipkan sebuah audio kita juga bisa menyisipkan sebuah video dengan menggunakan tag `<video/>`. tag tersebut bisanya digunakan untuk menampilkan sebuah video dihalaman web.

Contoh:

```html
<video controls>
  <source src="testing.mp4" type="video/mp4">
</video>
```

Pada kode diatas `controls` merupakan sebuah element untuk mengatur sebuah video kita seperti `auto play`, `width` , `height` dan `muted`. sedangkan `source` merupakan element untuk menargetkan file video kita.

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Video</title>
</head>
<body>
    <h1>Putar Video</h1>
    <video width="640" height="360" controls>
        <source src="video.mp4" type="video/mp4">
        <source src="video.ogg" type="video/ogg">
        Browser Anda tidak mendukung elemen video.
    </video>
</body>
</html>
```

Pastikan untuk mengganti `video.mp4` dan `video.ogg` dengan path yang benar menuju file video yang ingin Anda gunakan.

Selamat mencoba! 👌

# Case Studies

### Studi Kasus: Membangun Halaman Web Portofolio Pribadi

#### Deskripsi

Anda diminta untuk membuat halaman web portofolio pribadi yang menampilkan informasi tentang diri Anda, pengalaman, hobi, serta contoh karya yang telah Anda buat. Halaman ini harus mencakup berbagai elemen HTML, atribut, dan fitur lainnya yang telah dipelajari.

#### Struktur Halaman

1. **Elemen Dasar**

   - Buatlah struktur dasar HTML dengan elemen `<html>`, `<head>`, dan `<body>`.
2. **Heading**

   - Gunakan elemen heading (`<h1>`, `<h2>`, `<h3>`, dll.) untuk judul dan subjudul.
3. **Gaya (Style)**

   - Tambahkan beberapa gaya sederhana menggunakan atribut `style` untuk memberikan warna dan ukuran pada teks.
4. **Quoting**

   - Sertakan kutipan dari orang lain tentang Anda menggunakan elemen `<blockquote>`.
5. **Formatting**

   - Gunakan elemen formatting seperti `<strong>` untuk menekankan kata-kata penting dan `<em>` untuk penekanan.
6. **Comment**

   - Tambahkan komentar di dalam kode untuk menjelaskan bagian tertentu.
7. **Image**

   - Masukkan gambar profil menggunakan elemen `<img>` dan atur lebar dan tinggi.
8. **Link**

   - Buat link ke media sosial atau blog Anda menggunakan elemen `<a>`.
9. **Table**

   - Buat tabel yang menunjukkan pengalaman kerja Anda dengan kolom untuk posisi, perusahaan, dan tahun.
10. **List**

    - Daftarkan hobi Anda menggunakan daftar tidak terurut (`<ul>`) dan daftar terurut (`<ol>`).
11. **Audio**

    - Tambahkan pemutar audio untuk menampilkan lagu favorit Anda.
12. **Video**

    - Sematkan video pendek yang menunjukkan salah satu karya Anda menggunakan elemen `<iframe>`.

#### Pelajari Kode berikut:

```html
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
</head>

<body>
    <div class="container">
        <!-- Judul Halaman -->
        <h1 class="text-center">Portofolio Pribadi</h1>

        <!-- Gambar Profil -->
        <div class="text-center">
            <img src="profil.jpg"
                alt="Gambar Profil">
        </div>

        <!-- Tentang Saya -->
        <h2 class="text-center">Tentang Saya</h2>
        <p class="text-center">Selamat datang di portofolio saya! Saya adalah seorang pengembang web yang penuh
            semangat.</p>
        <blockquote class="text-center">"Kreativitas adalah intelijensi yang bersenang-senang." - Albert Einstein
        </blockquote>

        <!-- Pengalaman Kerja -->
        <h2 class="text-center">Pengalaman Kerja</h2>
        <table>
            <tr>
                <th>Posisi</th>
                <th>Perusahaan</th>
                <th>Tahun</th>
            </tr>
            <tr>
                <td>Web Developer</td>
                <td>PT. Teknologi</td>
                <td>2020-2023</td>
            </tr>
            <tr>
                <td>Junior Developer</td>
                <td>PT. Inovasi</td>
                <td>2018-2020</td>
            </tr>
        </table>

        <!-- Hobi -->
        <h2>Hobi Saya</h2>
        <ul>
            <li>Membaca</li>
            <li>Olahraga</li>
            <li>Fotografi</li>
        </ul>
        <ol>
            <li>Belajar Bahasa Asing</li>
            <li>Menulis Blog</li>
            <li>Melukis</li>
        </ol>

        <!-- Audio -->
        <h2 class="text-center">Lagu Favorit</h2>
        <audio controls>
            <source src="lagu.mp3" type="audio/mpeg">
            Browser Anda tidak mendukung pemutar audio.
        </audio>

        <!-- Embed Audio -->
        <div class="audio-embed">
            <iframe src="#"
                style="display:block; border-radius: 6px; border: none; height: 204px; width: 600px;"></iframe>
            <a href='#'
                style="text-align: center; display: block; color: #A4ABB6; font-size: 12px; font-family: sans-serif; line-height: 16px; margin-top: 8px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">embed-musik</a>
        </div>

        <!-- Video Karya -->
        <h2 class="text-center">Video Karya</h2>
        <iframe width="640" height="360" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
            allowfullscreen></iframe>

        <!-- Link ke Media Sosial -->
        <h2 class="text-center">Ikuti Saya</h2>
        <p class="text-center">
            <a href="https://www.instagram.com/username" target="_blank">Instagram</a> |
            <a href="https://www.linkedin.com/in/username" target="_blank">LinkedIn</a>
        </p>

        <!-- Footer -->
        <footer>
            &copy; 2024 Portofolio Pribadi. Semua hak dilindungi.
        </footer>
    </div>
</body>

</html>
```

### Penjelasan Kode

- **Struktur HTML**: Menggunakan elemen dasar HTML untuk menyusun halaman.
- **Heading dan Style**: Menentukan judul dan menggunakan gaya sederhana untuk mempercantik tampilan.
- **Quoting dan Formatting**: Menyertakan kutipan serta menekankan beberapa teks.
- **Comment**: Memberi catatan dalam kode untuk kejelasan.
- **Image dan Link**: Memasukkan gambar profil dan membuat link ke media sosial.
- **Table dan List**: Menampilkan informasi pengalaman kerja dan hobi dengan jelas.
- **Audio dan Video**: Menambahkan pemutar audio dan video ke dalam halaman.

### Kesimpulan

Dengan mengikuti studi kasus ini, Anda dapat memahami dan menerapkan berbagai elemen HTML dasar dalam konteks yang praktis, dan siap untuk menggunakannya dalam proyek pengembangan web nyata serta melanjutkan pembelajaran ke tahap lebih lanjut, seperti CSS, JavaScript, dan framework modern.

Selamat belajar! 🥳🥳

## Referensi

- [w3schools.com](https://www.w3schools.com/html/default.asp)
- [Code Editor w3schools (HTML/CSS/JS)](https://www.w3schools.com/tryit/)
- [codechef (HTML/CSS/JS)](https://www.codechef.com/html-online-compiler)