<?php 
class Mobil
{
    /* Ini adalah sebuah kelas yang merepresentasikan sebuah mobil.
    Kelas adalah blueprint atau cetak biru untuk membuat objek.
    */
    public function jalan($arah = 'depan')
    {
        /* Ini adalah sebuah method (fungsi di dalam kelas) bernama jalan.
        Method ini digunakan untuk membuat mobil berjalan.
        Parameter $arah digunakan untuk menentukan arah mobil berjalan.
        Jika tidak ada nilai yang diberikan untuk $arah, maka secara default akan bernilai 'depan'.
        */
        echo 'Mobil berjalan ke arah '.$arah;
    }
}

$avanza = new Mobil();
/* Di sini kita membuat sebuah objek baru dari kelas Mobil dan menyimpannya dalam variabel $avanza.
Artinya, kita sekarang memiliki sebuah mobil bernama Avanza.
*/
echo $avanza->jalan(); /* Memanggil method jalan pada objek $avanza tanpa memberikan parameter arah.
Jadi, mobil akan berjalan ke arah depan (default). */
echo PHP_EOL;
echo $avanza->jalan('belakang'); /* Memanggil method jalan pada objek $avanza dengan parameter arah 'belakang'.
Jadi, mobil akan berjalan ke arah belakang. */
echo PHP_EOL;