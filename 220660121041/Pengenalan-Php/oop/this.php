<?php
class Printer
{
    // Deklarasi properti privat untuk menyimpan konten
    private $content;

    // Metode setter untuk mengatur nilai properti content
    public function setContent($content)
    {
        // Menggunakan $this untuk mengakses properti content dari objek saat ini
        $this->content = $content;
    }

    // Metode untuk mencetak konten
    public function cetak()
    {
        // Menggunakan $this untuk mengakses properti content dari objek saat ini
        echo $this->content;
    }
}

// Membuat objek Printer pertama
$printer1 = new Printer();
// Mengatur konten printer1
$printer1->setContent('Aku printer satu');
// Memanggil metode cetak untuk printer1
$printer1->cetak();
echo PHP_EOL;

// Membuat objek Printer kedua
$printer2 = new Printer();
// Mengatur konten printer2
$printer2->setContent('Aku printer dua');
// Memanggil metode cetak untuk printer2 dan langsung mencetak hasilnya
echo $printer2->cetak();
echo PHP_EOL;
// Memanggil metode cetak untuk printer1 lagi
$printer1->cetak();
echo PHP_EOL;