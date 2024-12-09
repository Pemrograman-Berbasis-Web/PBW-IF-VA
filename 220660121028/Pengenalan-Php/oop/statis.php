<?php
class Singa // Ini adalah kelas yang merepresentasikan seekor singa.
{
    public static $KAKI = 4; /* Properti statis untuk jumlah kaki singa.
Nilai ini berlaku untuk semua objek Singa dan kelas Singa itu sendiri. */
    public function kaki1()
    {
        echo Singa::$KAKI; /* Mengakses properti statis $KAKI menggunakan nama kelas.
Ini akan selalu mengembalikan nilai 4. */
    }
    public function kaki2()
    {
        echo self::$KAKI;  /* Mengakses properti statis $KAKI menggunakan kata kunci self.
`self` mengacu pada kelas saat ini, jadi sama dengan Singa::$KAKI. */
    }
    public function kaki3()
    {
        echo static::$KAKI; /* Mengakses properti statis $KAKI menggunakan kata kunci static.
`static` juga mengacu pada kelas saat ini, sama seperti self.
Kata kunci static sering digunakan dalam konteks pewarisan. */
    }
}
$singa = new Singa(); // Membuat objek Singa baru.
echo $singa->kaki1(); // Memanggil method kaki1() pada objek $singa.
echo PHP_EOL;
echo $singa->kaki2(); // Memanggil method kaki2() pada objek $singa.
echo PHP_EOL;
echo $singa->kaki3(); // Memanggil method kaki3() pada objek $singa.
echo PHP_EOL;