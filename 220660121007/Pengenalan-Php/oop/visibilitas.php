
<?php
class Mobil
{
	private $roda = 4;

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;

/* Visibilitas adalah salah satu fitur penting yang ada pada OOP. Fitur ini mengatur hak akses 
terhadap property maupun method dari sebuah class. Hak akses disini berbeda dengan hak akses 
pada aplikasi. */