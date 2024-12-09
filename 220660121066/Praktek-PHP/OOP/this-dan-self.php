<?php
// self
class Printer
{
	private $content;

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function cetak()
	{
		echo $this->content;
	}
}

$printer1 = new Printer();
$printer1->setContent('Aku printer satu');
$printer1->cetak(); 
echo PHP_EOL;

$printer2 = new Printer();
$printer2->setContent('Aku printer dua'); 
echo $printer2->cetak();
echo PHP_EOL;
$printer1->cetak(); 
echo PHP_EOL;

// $this
class Lingkaran
{
	const PI = 3.14;

	public function luas($jari)
	{
		echo self::PI * $jari * $jari;
	}
}

$lingkaran = new Lingkaran(); 

echo Lingkaran::PI;
echo PHP_EOL;

$lingkaran->luas(7); 
echo PHP_EOL;