<?php

// Definisi kelas Mobil
class Mobil
{
    // Properti
    public $roda;
    public $warna;
    public $merek;

    // Konstruktor (opsional untuk menginisialisasi properti)
    public function __construct($merek, $warna, $roda = 4)
    {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->roda = $roda;
    }

    // Metode untuk menjalankan mobil
    public function jalan()
    {
        echo "Mobil {$this->merek} berjalan.\n";
    }

    // Metode untuk menghentikan mobil
    public function berhenti()
    {
        echo "Mobil {$this->merek} berhenti.\n";
    }

    // Metode untuk menampilkan detail mobil
    public function tampilkanDetail()
    {
        echo "Detail Mobil:\n";
        echo "Merek : {$this->merek}\n";
        echo "Warna : {$this->warna}\n";
        echo "Jumlah Roda : {$this->roda}\n";
    }
}

// Membuat objek Mobil
$avanza = new Mobil("Toyota Avanza", "Hitam");
$innova = new Mobil("Toyota Innova", "Putih");

// Menampilkan detail mobil
$avanza->tampilkanDetail();
$innova->tampilkanDetail();

// Menjalankan mobil
$avanza->jalan();
$innova->jalan();

// Menghentikan mobil
$avanza->berhenti();
$innova->berhenti();
