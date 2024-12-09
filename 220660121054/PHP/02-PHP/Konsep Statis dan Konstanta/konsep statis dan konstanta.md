Konsep Statis dan Konstanta
================
Pada bab ini kita akan membahas mengenai konsep static pada OOP, cara penerapannya hingga tingkatan visibilitasnya. Selain itu juga kita akan membahas tentang konstanta dan bagaimana mendefinisikan konstanta menggunakan bahasa pemrograman PHP.

- [Konsep Statis dan Konstanta](#konsep-statis-dan-konstanta)
- [Apa itu Konsep Statis](#apa-itu-konsep-statis)
- [Contoh Penerapan Konsep Statis](#contoh-penerapan-konsep-statis)
- [Visibilitas pada Konsep Statis](#visibilitas-pada-konsep-statis)
- [Apa itu Konstanta](#apa-itu-konstanta)
- [Contoh Penerapan Konsep Konstanta](#contoh-penerapan-konsep-konstanta)
- [Visibilitas pada Konsep Konstanta](#visibilitas-pada-konsep-konstanta)

 # Apa itu Konsep Statis

Dalam pemrograman berbasis objek segala sesuatu diibaratkan atau dimodelkan dalam _class_ dan untuk merealisasikannya kita harus melakukan instansiasi. 

Sebagai contoh ketika kita ingin mengetahui jumlah roda pada _class_ Mobil kita harus melakukan instansiasi _class_ `Mobil` dan memasukkannya kedalam variable baru kemudian kita memanggilnya _method_ `jumlahRoda()`. 

Itu adalah aturan dasar dari konsep OOP dimana segala sesuatu dimodelkan kedalam _class_ atau _object_.

Konsep statis atau *_static_* adalah sebuah konsep yang keluar dari aturan dasar dari konsep OOP tersebut. Pada konsep *_static_* kita tidak perlu melakukan instansiasi untuk dapat memanggil sebuah _property_ atau _method_. 

Karena tidak perlu melakukan instansiasi, maka kita dapat langsung memanggil _property_ atau _method_ dengan menggunakan nama _class_ diikuti` ::` (_scope resolution operation_) diikuti _property_ atau _method_ (`NamaClass::$propertyStatic`).

 # Contoh Penerapan Konsep Statis

Untuk mendefinisikan sebuah _property_ atau _method_ menjadi statis, kita menggunakan _keyword_ `static` seperti pada contoh berikut:

```php
<?php

class Singa
{
	const KAKI = 4;

	public static function lari()
	{
		echo 'Singa berlari';
	}
}

echo Singa::KAKI; 
echo PHP_EOL;
Singa::lari(); 
echo PHP_EOL;
```
Bila program diatas dijalankan maka akan menghasilkan _output_ sebagai berikut:

```**output**
php Singa.php

Output: 
4
Singa berlari
```
_Silahkan coba Anda jalankan program diatas_

Untuk mengakses _property_ atau _method_ _static_ pada lingkup _class_ kita dapat menggunakan 3 cara yaitu dengan menggunakan nama _class_ seperti cara diatas, menggunakan _keyword_ `self` atau bisa juga menggunakan _keyword_ `static`. 

Perhatikan contoh berikut:

```php
<?php

class Singa
{
	public static $KAKI = 4;

	public function kaki1()
	{
		echo Singa::$KAKI;
	}

	public function kaki2()
	{
		echo self::$KAKI;
	}

	public function kaki3()
	{
		echo static::$KAKI;
	}
}

$singa = new Singa();

echo $singa->kaki1(); 
echo PHP_EOL;
echo $singa->kaki2(); 
echo PHP_EOL;
echo $singa->kaki3(); 
echo PHP_EOL;
```
Bila program diatas dijalankan maka _output_ dari _method_ `kaki1()`, `kaki2` maupun `kaki3` akan sama yaitu `4.`

_Silahkan coba Anda jalankan program diatas_

 # Visibilitas pada Konsep Statis

 Sama seperti _property_ atau _method_ pada umumnya yang memiliki visibilitas, _property_ atau _method_ yang statis pun tetap memiliki visibilitas. 
 
 Tingkatan visibilitasnya pun sama seperti pada _property_ atau _method_ biasa yaitu private, _protected_, _public_ dan _default_. Tidak ada perbedaan antara statis maupun non statis pada _property_ dan _method_ selain pada cara mengaksesnya saja.

 # Apa itu Konstanta

 Bila kita kembali ke pelajaran jaman SMA, konstanta adalah sebuah nilai yang tidak berubah dan telah ditetapkan nilainya dari sejak awal. 
 
 Contoh konstanta adalah `PI `yang nilainya `3.14` ada juga gaya gravitasi yang nilainya `9.8.` Tidak jauh berbeda dengan konsep diatas, pada OOP konstanta adalah sebuah nilai yang tidak dapat dirubah selama proses runtime.

 # Contoh Penerapan Konsep Konstanta

 Untuk mendefinisikan sebuah konstanta kita menggunakan _keyword_ `const` dan untuk mengakses konstanta didalam _class_ kita menggunakan _keyword_ `self` dan diluar _class_ kita menggunakan nama _class_. 
 
 Perhatikan contoh berikut:

 ```php
<?php

class Lingkaran
{
	public const PI = 3.14;

	public static function luas($jari)
	{
		echo self::PI * $jari * $jari;
	}
}

echo Lingkaran::PI;
echo PHP_EOL;
Lingkaran::luas(7); 
echo PHP_EOL;
```
```****
Output: 
3.14
153.86
```
_Silahkan coba Anda jalankan program diatas_

 # Visibilitas pada Konsep Konstanta

 Sama seperti _property_ atau _method_ pada umumnya yang memiliki visibilitas, _property_ atau _method_ yang statis pun tetap memiliki visibilitas. 

Tingkatan visibilitasnya pun sama seperti pada _property_ atau _method_ biasa yaitu private, _protected_, _public_ dan _default_. Tidak ada perbedaan antara statis maupun non statis pada _property_ dan _method_ selain pada cara mengaksesnya saja.

Namun, perlu diingat bahwa konstanta hanya dapat memiliki visibilitas _public_ karena tidak dapat diakses menggunakan _keyword_ `self` atau `static` jika memiliki visibilitas _private_ atau _protected_. 

Contoh berikut menunjukkan bagaimana visibilitas pada konstanta:

```php
<?php

class Lingkaran
{
	private const PI_PRIVATE = 3.14;
	protected const PI_PROTECTED = 3.14;
	public const PI_PUBLIC = 3.14;

	public static function luas()
	{
		echo self::PI_PUBLIC;
	}
}

echo Lingkaran::PI_PUBLIC;
echo PHP_EOL;
Lingkaran::luas(); 
echo PHP_EOL;
```
Pada contoh diatas, konstanta `PI_PRIVATE` dan `PI_PROTECTED` tidak dapat diakses secara langsung dari luar _class_ karena memiliki visibilitas _private_ dan _protected_.