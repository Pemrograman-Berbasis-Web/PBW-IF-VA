<?php

class Lingkaran
{
    // Konstanta PI yang nilainya tidak akan berubah dan berlaku untuk seluruh objek Lingkaran
    const PI = 3.14;

    // Metode untuk menghitung luas lingkaran
    public function luas($jari)
    {
/* Menggunakan self::PI untuk mengakses konstanta PI dari kelas Lingkaran itu sendiri
Sehingga kita selalu menggunakan nilai PI yang sama meskipun ada variabel lain bernama PI */
        echo self::PI * $jari * $jari;
    }
}

// Membuat objek baru dari kelas Lingkaran
$lingkaran = new Lingkaran(); 

// Mengakses konstanta PI secara langsung melalui nama kelas karena PI adalah konstanta statis
echo Lingkaran::PI;
echo PHP_EOL;

// Memanggil metode luas pada objek $lingkaran dengan jari-jari 7
$lingkaran->luas(7); 
echo PHP_EOL;