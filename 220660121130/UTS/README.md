# UTS TO-DO LIST PORJECT

Hallo Perkenalkan saya **Reni Kartika Suwandi** NPM 220660121130
Pada Tugas Ujian Tengah semester saya membuat aplikasi To-Do List
untuk penjelasan lebih detail saya lampirkan dibawah.

## 1. Deskripsi Proyek

Aplikasi ini bertujuan untuk mempermudah pengguna dalam mengelola tugas-tugas mereka sehari-hari dengan menggunakan konsep OOP (Object-Oriented Programming) dan arsitektur MVC (Model-View-Controller), serta di tambahkan style menggunakan css dan meningkatkan fungsionalitas oleh JavaScript

## 2. Fitur Utama

- Tambah Tugas
- Tambah Singkat Deskripsi Tugas
- Tandai sebagai Selesai
- Hapus Tugas
- Daftar Tugas
- Deadline

## 3. Teknologi yang Digunakan

1. PHP: PHP digunakan untuk menangani logika aplikasi di sisi server, seperti memproses permintaan HTTP, berinteraksi dengan database, dan mengirimkan respons ke klien.

2. MySQL: MySQL digunakan sebagai sistem manajemen basis data untuk menyimpan, mengelola, dan mengambil data tugas dalam aplikasi.

3. PDO (PHP Data Objects): PDO adalah ekstensi PHP yang menyediakan antarmuka yang aman dan fleksibel untuk berinteraksi dengan berbagai sistem manajemen database, termasuk MySQL.

4. OOP (Object-Oriented Programming): OOP adalah paradigma pemrograman yang memungkinkan pengorganisasian kode melalui objek dan kelas, yang membuat pengelolaan, pemeliharaan, dan pengembangan aplikasi menjadi lebih mudah dan terstruktur.

5. MVC (Model-View-Controller): MVC adalah pola desain perangkat lunak yang memisahkan aplikasi menjadi tiga komponen utama: Model (data dan logika bisnis), View (antarmuka pengguna), dan Controller (pengontrol alur aplikasi dan interaksi antar komponen)

6. JavaScript : JavaScript digunakan untuk meningkatkan interaktivitas dan fungsionalitas aplikasi, seperti menangani input pengguna secara dinamis, serta menggunakan local storage untuk menyimpan data sementara sebelum disinkronkan dengan database, sehingga mengurangi kemungkinan kehilangan data.

7. CSS: CSS digunakan untuk mengatur desain dan tata letak aplikasi, memastikan tampilan yang responsif dan menarik dengan penataan elemen-elemen visual seperti warna, ukuran, dan posisi

## Adapun Untuk Mekanisme dari aplikasi To-Do List nya

## 1. Tampilan Awal Aplikasi To-Do List

![Tampilan Awal](https://github.com/Reswn/Image-Project-PBW/blob/main/Screenshot_8-11-2024_94048_localhost.jpeg?raw=true)

Ini adalah tampilan awal dari aplikasi terdapat applikasi yang di wrapping dengan kontainer, didalamnya ada kontainer utama terdapat indikator angka untuk menghitung banyaknya tugas dan banyaknya yang diselesaikan, persentasi bar untuk meninjau berapa progress pengerjaan.

kontainer task form berisi, form untuk input tugas, input deskripsi singkat, dan deadline tugas

## 2. Tampilan Pada saat ditambahkan Tugas

![Tampilan Tugas](https://github.com/Reswn/Image-Project-PBW/blob/main/Screenshot_8-11-2024_95552_localhost.jpeg?raw=true)

Pada saat tugas diinput, list akan melakukan stack ke bawah task form supaya lebih rapih, pada kolom task terdapat fitur Edit, tandai Selesai, Dan Hapus.

pada circle untuk tugas juga bertambah menunjukan adanya tugas yang ditambahkan

## 3. Tampilan Pada saat Tugas ditandai Selesai

![Tampilan Selesai](https://github.com/Reswn/Image-Project-PBW/blob/main/Screenshot_8-11-2024_95614_localhost.jpeg?raw=true)

Saat Tugas ditandai selesai, akan ada respon dimana tugas, deskripsi, dan deadline dicoret, selain itu percentage bars untuk progress ada perubahan, serta circle tugas jug merespon dengan menunjukan ada tugas yang sudah ditandai selesai.

## 4. Tampilan Pada saat Tugas diedit

![Tampilan Edit](https://github.com/Reswn/Image-Project-PBW/blob/main/Screenshot_8-11-2024_95634_localhost.jpeg?raw=true)

Pada saat ingin mengedit Tugas, judul tugas, deskripsi, dan deadline. Inputan tersebut akan kembali masuk ke TaskForm supaya bisa di edit, dan stack nya akan hilang.

## 5. Tampilan Pada saat Tugas diedit

![Tampilan selesai Edit](https://github.com/Reswn/Image-Project-PBW/blob/main/Screenshot_8-11-2024_95651_localhost.jpeg?raw=true)

Apabila sudah di edit Tugas Akan kembali pada stack sebelumnya

## 6. Tugas Sama ditambahkan

![Tampilan selesai Edit](https://github.com/Reswn/Image-Project-PBW/blob/main/To-do%20List%20and%206%20more%20pages%20-%20Personal%20-%20Microsoft%E2%80%8B%20Edge%2008_11_2024%2010_00_23.png?raw=true)

Jika kita menambahkan tugas dengan Judul, Deskripsi dan Deadline sama akan muncul alert yang memberitahukan kalau tugas sudah ada

## 7. Tugas Dihapus

![Tampilan Tugas selesai ](https://github.com/Reswn/Image-Project-PBW/blob/main/Screenshot_8-11-2024_1013_localhost.jpeg?raw=true)

Saat tugas sudah selesai semua, kita bisa menghapusnya satu per-satu

## 8. Tugas Selesai

![Tampilan akhir](https://github.com/Reswn/Image-Project-PBW/blob/main/Screenshot_8-11-2024_94048_localhost.jpeg?raw=true)

Saat Tugas Sudah dihapus tampilan akan seperti semula.
