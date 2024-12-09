<?php

class Lingkaran
{
    // Konstanta PI yang nilainya tidak akan berubah dan berlaku untuk seluruh objek Lingkaran
    const PI = 3.14;

    // Metode untuk menghitung luas lingkaran
    public function luas($jari)
    {
        /* Menghitung luas lingkaran menggunakan rumus luas = PI * jari * jari
        penting Menggunakan `return` untuk mengembalikan hasil perhitungan */
        return self::PI * $jari * $jari;
    }
}

// Membuat objek baru dari kelas Lingkaran
$lingkaran = new Lingkaran();

/* Memanggil metode luas dan menyimpan hasilnya dalam variabel $luas
 Hasil yang dikembalikan oleh metode luas akan disimpan di $luas */
$luas = $lingkaran->luas(7);

// Mencetak nilai luas yang telah dihitung
echo $luas;
echo PHP_EOL;