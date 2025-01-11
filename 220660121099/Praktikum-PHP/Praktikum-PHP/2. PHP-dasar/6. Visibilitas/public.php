<?php

class Mobil
{
    public $roda;

    // Constructor yang memerlukan argumen
    public function __construct($roda)
    {
        $this->roda = $roda; // Menginisialisasi properti roda
    }

    public function jalan()
    {
        echo 'Mobil berjalan';
    }
}

// Membuat objek dan memberikan argumen untuk constructor
$avanza = new Mobil(4);

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->roda; 
echo PHP_EOL;

?>
