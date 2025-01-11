Keyword $this dan self
======================
Bab ini akan membahas salah satu fitur yang wajib ada dalam bahasa pemrograman yang mendukung konsep OOP yaitu $`this` dan `self` serta perbedaan keduanya dalam bahasa pemrograman PHP.

- [Keyword $this dan self](#keyword-this-dan-self)
- [Apa itu $this](#apa-itu-this)
- [Apa itu self](#apa-itu-self)


# Apa itu $this

Pada pembahasan sebelumnya kita sudah cukup banyak menggunakan _keyword_ $`this` ketika memanggil _property_ dalam lingkup _class_ seperti pembahasan tentang visibilitas. Perhatikan kembali contoh dibawah ini:

```php
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
```
Pada pemrograman berbasis objek, konsep _keyword_ `$this` pasti ada walaupun cara penulisan dan atau syntax-nya mungkin berbeda. Pada OOP, _keyword_ `$this` adalah sebuah _variable_ yang merujuk pada object yang diinstansiasi. 

_Variable_ `$this` nantinya akan diganti dengan variable hasil instansiasi ketika sebuah object terbentuk. 

Pada contoh diatas, variable `$this` akan diganti oleh variable `$avanza`. Untuk lebih memahaminya, mari kita lihat contoh dibawah ini:

```php
<?php

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
```
Bila program diatas dieksekusi, maka akan menghasilkan _output_ sebagai berikut:

```bash
php Printer.php

Aku printer satu 
Aku printer dua 
Aku printer satu
```
Silahkan coba Anda jalankan program diatas.

Dari contoh diatas dapat kita pahami bahwa keyword `$this` itu merujuk pada spesifik _object_ dan tidak bercampur antara satu _object_ dengan _object_ lainnya. 

Ini dibuktikan dengan hasil _output_ antara `$printer1` dan `$printer2` yang berbeda walaupun keduanya sama-sama menginisiasi class Printer. 

Nilai `$content` pada `$printer1` tidak akan tertimpa oleh nilai `$content` pada `$printer2` karena keduanya merupakan _object_ yang berbeda.

Secara mudah, _keyword_ `$this `adalah sebuah _keyword_ yang digunakan untuk merujuk pada _obejct_ yang belum diketahui dan digunakan untuk mempermudah kita dalam menuliskan code. 

_Keyword_ `$this` hanya dapat diakses dari internal _class_ dan tidak dapat diakses dari luar class atau pada lingkup _object_. 

Selain itu, keyword `$this` bersifat _read only_ seperti halnya konstanta sehingga kita tidak dapat mengubah nilainya.

# Apa itu self

Sama seperti _keyword_ `$this` , _keyword_ `self` juga memiliki pengertian dan fungsi yang sama. Yang membedakannya dengan _keyword_ `$this` adalah bahwa _keyword_ `self` hanya digunakan untuk memanggil _property_ atau _method_ yang bersifat statis dan juga untuk memanggil konstanta. 

Perhatikan kembali contoh berikut:

```php
<?php

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
```
Silahkan coba Anda jalankan program diatas.

Sama seperti _keyword_ `$this` , _keyword_ `self` hanya dapat digunakan pada _class_ self juga hanya dapat digunakan pada lingkup class dan tidak dapat digunakan pada lingkup object.