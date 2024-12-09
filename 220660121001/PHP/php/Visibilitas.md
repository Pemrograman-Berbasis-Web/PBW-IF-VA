Visibilitas
===========
Bab ini akan membahas tentang apa itu visibilitas dalam OOP, tingkatan visibilitas serta bagaimana mendefinisikan visibilitas dalam bahasa pemrograman PHP.

- [Visibilitas](#visibilitas)
- [Apa itu Visibilitas](#apa-itu-visibilitas)
- [Tingkatan Visibilitas pada PHP](#tingkatan-visibilitas-pada-php)
- [Tips Visibilitas](#tips-visibilitas)

# Apa itu Visibilitas

Visibilitas adalah salah satu fitur penting yang ada pada OOP. Fitur ini mengatur hak akses terhadap _property_ maupun _method_ dari sebuah *class*. Hak akses disini berbeda dengan hak akses pada aplikasi, hak akses disini adalah hak akses yang ada pada level bahasa pemrograman.

Visibilitas dalam OOP berperan penting dalam menjamin keamanan informasi yang terdapat pada _property_ maupun _method_. Dengan fitur ini, programmer dapat membatasi dan mengatur programmer lainnya tentang bagaimana mengakses sebuah _property_ atau _method_ dari sebuah *class* atau fitur yang dibuatnya.

# Tingkatan Visibilitas pada PHP

Dalam bahasa PHP, *Visibilitas* dibedakan menjadi 4 yaitu *private, protected, public* dan *default* atau tidak didefinisikan. 

Berikut adalah penjelasan masing-masing *visibilitas*.

- Private

*Visibilitas* private adalah *visibilitas* paling rendah pada OOP. Sebuah *property* atau method yang diberikan *visibilitas* *private* maka *property* atau *method* tersebut hanya dapat diakses dari lingkup class dimana property atau method tersebut didefinisikan. 

Untuk memberikan *visibilitas* *private* pada *property* atau *method* kita dapat menggunakan keyword private didepan *property* atau *method*. Perhatikan contoh berikut:

```php
<?php

class Mobil
{
	private $roda = 4;

	private function jalan()
	{
		echo 'Mobil berjalan';
	}
}

$avanza = new Mobil();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->roda; 
echo PHP_EOL;
```
Bila program diatas dijalankan, maka akan muncul error `PHP Fatal error: Uncaught Error: Call to private method Mobil::jalan() from context. `


Hal ini terjadi karena kita mencoba mengakses fungsi `jalan()` yang memiliki visibilitas *private* diluar lingkup *class* yaitu dipanggil dari lingkup object. Hal yang sama juga akan terjadi pada *property* `$roda` dimana *property* tersebut juga memiliki visibilitas *private*.

Silahkan coba Anda jalankan program diatas.

Untuk mengakses *property* atau *method* dalam lingkup *class* digunakan keyword `$this` yang akan dibahas secara spesifik pada bab terpisah. Perhatikan contoh berikut:

```php
<?php

class Mobil
{
	private $roda = 4;

	private function jalan()
	{
		echo 'Mobil berjalan';
	}

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;
```

_Silahkan coba Anda jalankan program diatas._

Bila program diatas dieksekusi, maka akan muncul output `4 `sebagaimana nilai dari *property* `$roda`.

- Protected

Sebuah _property_ atau method yang diberikan visibilitas protected maka _property_ atau method tersebut dapat diakses dari lingkup class dimana _property_ atau method tersebut didefinisikan serta turunan dari class tersebut. 

Untuk memberikan visibilitas *protected* pada _property_ atau method kita dapat menggunakan keyword `protected` didepan _property_ atau method. Perhatikan contoh berikut:

```php
<?php

class Mobil
{
	private $roda = 4;

	protected function jalan()
	{
		echo 'Mobil berjalan';
	}

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil();
echo $avanza->jalan(); 
echo PHP_EOL;
```
Bila program diatas dijalankan, maka akan muncul error PHP `Fatal error: Uncaught Error: Call to protected method Mobil::jalan() rom context. `

Hal ini terjadi karena kita mencoba mengakses fungsi `jalan()` yang memiliki visibilitas *protected* diluar lingkup class yaitu dipanggil dari lingkup *object*.

_Silahkan coba Anda jalankan program diatas_

- Public

Visibilitas public adalah visibilitas tertinggi pada OOP. Sebuah _property_ atau _method_ yang diberikan visibilitas public maka _property_ atau _method_ tersebut dapat diakses baik dari lingkup _class_ maupun _object_. Untuk memberikan visibilitas public pada _property_ atau _method_ kita dapat menggunakan keyword `public` didepan _property_ atau _method_. Mari kita melihat kembali contoh berikut:

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
Method `jumlahRoda()` diberikan visibilitas *public* sehingga method tersebut dapat diakses dari luar class yaitu dalam lingkup object. 

Sehingga bila program diatas dieksekusi, maka akan muncul *output* `4` sebagaimana nilai dari *property* `$roda .
`

_Silahkan coba Anda jalankan program diatas_

- Default atau tidak didefinisikan

Bila kita tidak mendefinisikan visibilitas pada _property_ atau method secara eksplisit, maka PHP secara default akan memberikan visibilitas pada _property_ atau method tersebut dengan visibilitas public. 

Sehingga `public function jumlahRoda()` sama dengan f`unction jumlahRoda()` yaitu sama-sama memiliki visibilitas *public*.

# Tips Visibilitas

Tips diatas sangat berguna untuk menghindari kebingungan dan menjaga konsistensi code.

maka ada baiknya Anda menerapkan tips berikut:

- Definisikan visibilitas secara eksplisit.

- Gunakan visibilitas *private* atau *protected* pada *property*.

- Hindari penggunaan visibilitas public pada *property*, gunakan hanya jika memang benar-benar diperlukan.

- Batasi visibilitas pada *method* jika memungkinkan.