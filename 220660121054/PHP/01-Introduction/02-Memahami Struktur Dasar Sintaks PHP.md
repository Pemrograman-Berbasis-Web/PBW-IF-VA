Memahami Struktur Dasar Sintaks PHP
=======
Memahami struktur dasar sintaks PHP sangat penting untuk mulai menulis kode.

Kita akan belajar membuat program `hello_world.php` dengan kode seperti ini:

```php
<?php 
echo "Hello World!";
?>
```
kode di atas adalah contoh program PHP yang paling sederhana.

Program tersebut hanya berfungsi untuk menampilkan teks `Hello World` saja.

Tapi…

Apa maksudnya `<?php` dan `?>?`

Apa itu `echo?`

…dan kenapa harus ditulis seperti itu?

Karena itu…untuk menjawab semua pertanyaan tersebut, kita harus memahami sintak dasar PHP.

Apa itu sintak?

Sintak adalah aturan penulisan kode program.

Pada dasarnya setiap bahasa pemrograman itu sama, yang membedakan adalah sintak dan fitur.

# Struktur Program PHP yang Paling Dasar

Ini adalah bentuk paling dasar program PHP:

```php
<?php

echo "Hello World!";
```
Keterangan:

- `<?php` ini adalah pembuka program PHP. Pembuka ini wajib ada di setiap program PHP.

- `echo "Hello World!";` adalah sebuah statement atau perintah untuk menampilkan teks.

Tunggu dulu…

Kenapa tidak ditutup dengan `?>` ?

Tutup sebenarnya bersifat opsional. Tutup program dibutuhkan saat kita menggabungkan **kode PHP** dengan **HTML**

# Menulis Kode HTML dan PHP

Saat kita menulis kode PHP di dalam HTML, maka wajib hukumnya membuat tutup program.

Contoh :

```php
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Belajar PHP" ?></title>
    </head>
    <body>
        <?php
            echo "saya sedang belajar PHP<br>";
            echo "<p>Belajar PHP hingga jadi master</p>";
        ?>
    </body>
</html>
```
Perhatikan contoh di atas!

Apa yang akan terjadi bila kita menghapus tutup PHP (`?>`)?

Tentunya program akan error.

Oya, PHP yang ditulis di dalam HTML, filenya harus disimpan dengan ekstensi `.php` bukan `.html` meskipun isinya HTML dan PHP.

Lalu ada juga yang menulis seperti ini:

Nah kalau yang ini bisa tidak ditutup, karena kode HTML-nya ditulis di dalam sintak PHP.

# Penulisan Statement dan Ekspresi

Statement dan ekspresi adalah instruksi yang akan diberikan ke komputer. Setiap statement dan ekspresi di PHP harus diakhiri dengan titik koma (`;`).

Contoh:

```php
<?php
echo "ini statement 1";
echo "ini statement 2";
$a = $b + $c;
```
Gimana kalau kita lupa menuliskan titik koma?

Ya tentu programnya akan error.

# Aturan Penulisan Case PHP

PHP adalah bahasa pemrograman yang bersifat *case sensitive*. Artinya, huruf besar (kapital) dan huruf kecil akan dibedakan.

Contoh:

```php
<?php

$nama = "Pemrograman Berbasis Web";
$NAMA = "Jhon";

?>
```
Variabel `$nama` dan `$NAMA` adalah dua variabel yang berbeda. Mereka tidak sama.

Penulisan **huruf besar** dan **kecil** dalam program harus diperhatikan, karena bisa menyebabkan *error* bila salah.

Contoh:

```php
$umur = 19;

echo "Umur saya adalah $Umur";
```
Lihat!

Pada kode di atas, kita membuat variabel `$umur` dengan huruf kecil. Lalu saat menggunakan variabel kita menggunakan `$Umur`.

Jelas sekali ini akan menyebabkan error.

Untuk menghindari ini, kita harus konsisten dalam penamaan *variabel* dan *konstanta*.

Gunakan nama *variabel* dengan **huruf kecil saja** dan *konstanta* dengan **huruf kapital**.

Contoh:

```php
const INI_KONSTANTA = 123;
$ini_variabel = 23;
$iniJugaVariabel = 49;
```
Eh, kok ada huruf kapital di `$iniJugaVariabel`?

Ini namanya `camelCase`.

Jika *variabel* terdiri dari dua atau lebih suku kata, maka kita bisa memisahnya dengan huruf kapital atau bisa juga dengan garis bawah (*underscore*).

# Penulisan Komentar di PHP

Komentar adalah bagian yang tidak akan dieksekusi oleh komputer. Biasanya digunakan untuk keterangan, penjelasan, dan dokumentasi kode program.

Komentar di PHP dapat ditulis dengan dua cara:

- Menggunakan tanda `//` untuk komentar satu baris;
- Menggunakan tanda `/*` untuk komentar lebih dari satu baris.

Contoh:

```php
<?php 

// ini adalah komentar
echo "Hello world";

/*
ini adalah komentar 
yang lebih dari satu 
baris
*/

?>
```
# Penulisan Blok Program

Blok program merupakan kumpulan dari *statement* dan ekspresi. Blok program di PHP dibungkus dengan kurung kurawal `{ ... }`.

Program di atas adalah contoh blok kode `if` yang berisi tiga *statement*.

Dengan memahami struktur dasar ini, Anda akan lebih mudah dalam menulis dan membaca kode PHP.