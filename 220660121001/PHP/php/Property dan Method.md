Property dan Method
================
Pembahasan yang akan dibahas pada bab ini adalah mengenai apa itu *property*, apa itu *method* serta memahami apa itu *parameter* dan bagaimana cara menyusun parameter yang baik.

- [Property dan Method](#property-dan-method)
- [Apa itu Property](#apa-itu-property)
- [Apa itu Method](#apa-itu-method)
- [Urutan Parameter pada Method](#urutan-parameter-pada-method)

# Apa itu Property
Seperti yang sudah disinggung pada pembahasan sebelumnya, *property* adalah sebuah variable dapat digunakan dalam lingkup class atau object. 

*Property* sering disebut juga sebagai segala sesuatu yang dimiliki oleh *class*. 

*Property* memiliki visibilitas serta dapat memiliki nilai default. 

Perhatikan kembali contoh class Mobil berikut:

```php
<?php

class Mobil
{
	public $roda;
}
```
Pada contoh diatas, *property* `$roda` memiliki visibilitas public dan tanpa nilai default atau nilai awal. 

Untuk memberikan nilai awal pada *property* `$roda` , kita dapat melakukannya sebagai berikut:

```php
<?php

class Mobil
{
	public $roda = 4;
}
```
Pada contoh diatas, kita memberikan nilai awal pada *property* `$roda` dengan nilai 4 . 

Maka ketika kita melakukan instansiasi, secara otomasi *property* `$roda` akan langsung mempunyai nilai 4 sebagaimana yang telah kita definisikan.

# Apa itu Method

Jika *property* adalah segala sesuatu yang dimiliki oleh class atau object, maka method adalah segala sesuatu yang dapat dilakukan oleh class atau object. Sama seperti *property*, method juga memiliki visibilitas serta dapat memiliki parameter. 

Parameter dapat memiliki nilai awal atau default value. Bila parameter tidak memiliki *default value* maka parameter tersebut dianggap sebagai *mandatory parameter*. Perhatikan kembali class Mobil berikut:

```php
<?php

class Mobil
{
	public function jalan()
	{
		echo 'Mobil berjalan';
	}
}
```
Pada contoh diatas, *method* `jalan()` memiliki visibilitas *public* dan tidak memiliki parameter. Untuk menambahkan parameter, kita dapat mendefinisikannya sebagai berikut:

```php
<?php

class Mobil
{
	public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}
}
```
Pada contoh diatas, kita menambahkan parameter `$arah` pada method `jalan()` serta menambahkan *default value* depan pada parameter tersebut. Kita dapat mengetes code diatas dengan cara sebagai berikut:

```php
<?php

class Mobil
{
	public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}
}

$avanza = new Mobil();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->jalan('belakang'); 
echo PHP_EOL;
```
Ketika program diatas dijalankan, maka *output-nya* adalah sebagai berikut:

```bash
php Mobil.php

Output:
Mobil berjalan ke arah depan 
Mobil berjalan ke arah belakang
```
Bila kita perhatikan, *default* *value* akan ditimpa oleh nilai yang kita masukkan. Dalam contoh diatas, kita memasukkan nilai sehingga parameter `$arah` yang tadinya berisi `depan` berganti menjadi `belakang`. 

Dalam contoh real, *default* *value* dapat digunakan untuk mengeset nilai awal *database* yang secara default adalah MySQL dari koneksi serta `$host` yang biasanya memiliki nilai awal `localhost` . Perhatikan contoh berikut:

```php
<?php

class Koneksi
{
	public function connect($username, $password, $host = 'localhost', $port = 3306)
	{
		//Logic koneksi
	}
}
```
Pada contoh diatas, parameter `$username` dan `$password` bersifat *mandotory* sehingga bila kita tidak memasukkan nilai tersebut ketika memanggil fungsi `connect()` maka akan terjadi *error*. Perhatikan code dibawah ini:

```php
<?php

class Koneksi
{
	public function connect($username, $password, $host = 'localhost', $port = 3306)
	{
		//Logic koneksi
	}
}

$koneksi = new Koneksi();
$koneksi->connect();
```

Bila kita menjalankan program diatas maka akan terjadi error PHP 

![output](https://i.imgur.com/ATqj0bJ.png)

```bash
php Koneksi.php

Output:
Fatal error: Uncaught Error: Too few arguments to function Koneksi::connect() 0 passed, 2 required in Koneksi.php on line 12
```
Ini terjadi karena kita tidak memasukkan nilai `$username` dan `$password` sedangkan parameter tersebut bersifat *mandatory*. 

Untuk memperbaikinya, kita cukup memasukkan nilai sebagai berikut:

```php
<?php

class Koneksi
{
	public function connect($username, $password, $host = 'localhost', $port = 3306)
	{
		//Logic koneksi
	}
}

$koneksi = new Koneksi();
$koneksi->connect('root', '');
```
Bila kita mengeksekusi program diatas maka tidak akan terjadi *error* dan tidak mengeluarkan *output* apapun karena memang kita hanya membuat sebuah *method* kosong.

```bash
Output:

Program did not output anything!
```

# Urutan Parameter pada Method

Sebenarnya tidak ada aturan yang baku yang mengatur tentang urutan *parameter* pada sebuah *method*. 

Kita bisa saja mendefinisikan sesuka kita *parameter*-*parameter* dari sebuah *method*, namun tips berikut dapat dipertimbangkan untuk menghindari *error* dan memudahkan kita pada saat pemanggilan `method`.

- *Parameter* yang *mandatory* diletakkan didepan *parameter* yang memiliki default value.

- Penamaan *parameter* harus spesifik dan memiliki arti yang jelas serta menunjukkan kegunaan dari *parameter* tersebut.

- Gunakan *type hinting* (akan dibahas pada bab terpisah) pada *parameter* untuk menghindari kesalahan ketika memberikan nilai pada *parameter*.

Bila Anda perhatikan, apakah *class* `Koneksi` telah menerapkan tips diatas? 

Jawabannya adalah iya. Hanya saja, kita belum menerapkan *type hinting* karena memang belum dibahas.
