<?php

class Mobil
{
    private $roda = 4; // Properti roda bersifat private

    // Metode jalan bersifat protected
    protected function jalan()
    {
        echo 'Mobil berjalan';
    }

    // Metode publik untuk menampilkan jumlah roda
    public function jumlahRoda()
    {
        echo $this->roda;
    }

    // Menambahkan metode publik untuk memanggil jalan()
    public function jalanMobil()
    {
        $this->jalan(); // Memanggil metode protected
    }
}

//$avanza = new Mobil();
$avanza->jalanMobil(); // Menggunakan metode publik untuk memanggil jalan()
echo PHP_EOL;
$avanza->jumlahRoda(); // Menampilkan jumlah roda
?>
