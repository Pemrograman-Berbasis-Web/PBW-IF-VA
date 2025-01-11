<?php

// Definisi kelas Mobil
class Mobil
{
    // Properti untuk menyimpan warna mobil
    public $warna;

    // Konstruktor untuk mengatur warna saat objek dibuat
    public function __construct($warna)
    {
        $this->warna = $warna;
    }

    // Metode untuk menjalankan mobil ke arah tertentu
    public function jalan($arah = 'depan')
    {
        return 'Mobil berwarna ' . $this->warna . ' berjalan ke arah ' . $arah;
    }
}

// Membuat objek dari kelas Mobil dengan warna merah
$avanza = new Mobil('merah');

// Memanggil metode jalan tanpa parameter (arah default 'depan')
echo $avanza->jalan(); 
echo PHP_EOL;

// Memanggil metode jalan dengan parameter (arah 'belakang')
echo $avanza->jalan('belakang'); 
echo PHP_EOL;
