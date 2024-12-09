<?php
class Lingkaran // Ini adalah kelas yang merepresentasikan sebuah lingkaran.
{

    public const PI = 3.14; /* Konstanta PI dengan nilai 3.14
Konstanta bersifat statis dan nilainya tidak bisa diubah setelah didefinisikan. */

    public static function luas($jari)
    {
        echo self::PI * $jari * $jari; /* Menghitung dan menampilkan luas lingkaran
Menggunakan konstanta PI dan jari-jari yang diberikan.
Kata kunci self mengacu pada kelas Lingkaran itu sendiri. */
    }
}

echo Lingkaran::PI; // Langsung mengakses konstanta PI melalui nama kelas.
echo PHP_EOL;
Lingkaran::luas(7); // Memanggil fungsi luas secara statis dengan jari-jari 7.
echo PHP_EOL;