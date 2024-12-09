<?php

class Mobil
{
    public $roda; // Property untuk menyimpan jumlah roda

    // Konstruktor untuk menginisialisasi property
    public function __construct($roda)
    {
        $this->roda = $roda;
    }

    // Method untuk menggambarkan aksi mobil
    public function jalan()
    {
        echo 'Mobil berjalan';
    }

    // Method untuk menampilkan jumlah roda
    public function jumlahRoda()
    {
        return $this->roda;
    }
}

// Contoh penggunaan class Mobil
$mobilSaya = new Mobil(4); // Membuat objek Mobil dengan 4 roda
echo $mobilSaya->jalan(); // Menampilkan pesan "Mobil berjalan"
echo ' dengan ' . $mobilSaya->jumlahRoda() . ' roda.'; // Menampilkan jumlah roda
?>