# Return Value

Setelah membaca bab ini diharapkan Anda akan memahami apa itu *return* *value* dan bagaimana cara mendefinisikan *return* *value* menggunakan bahasa pemrograman PHP.

- [Return Value](#return-value)
- [Apa itu Return Value](#apa-itu-return-value)
- [Contoh Penggunaan Return Value](#contoh-penggunaan-return-value)

 
 # Apa itu Return Value

 Sebelum kita mengenal apa itu _return value_, ada baiknya saya sedikit bercerita sebagai penggandaian dari return value.

 > Jhon Doe adalah seorang petani kedelai. Ia menanam benih kedelai kemudian merawatnya hingga benih itu tumbuh. Setelah tumbuh, ia memupuknya hingga pohon kedelai itu siap untuk dipanen. Jhon kemudian memanen kedelai tersebut setelah dirasa kedelai tersebut siap untuk dipanen.

 Dari pengandaian diatas, kita dapat mengibaratkan bahwa proses menanam hingga panen adalah sebuah proses yang terjadi didalam _method_ atau fungsi. Sedangkan kedelai yang dihasilkan adalah _return value_ dari proses tersebut.

 Dalam OOP, _return value_ adalah sebuah nilai yang dikembalikan oleh sebuah method ketika method tersebut dipanggil. Tipe data dari _return value_ tidak harus sama dengan tipe data yang dimasukkan melalui parameter. 
 
 Bahkan ketika sebuah method tidak memiliki parameter sekalipun, method tersebut tetap dapat mengembalikan _return value_.

 # Contoh Penggunaan Return Value

 Untuk membuat sebuah method dapat mengembalikan sebuah nilai kita menggunakan _keyword_ `return` . Perhatikan kembali contoh _class_ `Lingkaran` berikut:

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

$lingkaran->luas(7); 
echo PHP_EOL;
```
Pada _class_ `Lingkaran` diatas, _method_ `luas()` langsung mengeluarkan _output_ berubah `echo` hasil dari perkalian rumus luas lingkaran. 

Bila kita hendak mengubah agar _method_ `luas(` tersebut mengembalikan _return value_ maka kita harus mengganti `echo` dengan _keyword_ `return` seperti contoh dibawah ini:

```php
<?php

class Lingkaran
{
	const PI = 3.14;

	public function luas($jari)
	{
		return self::PI * $jari * $jari;
	}
}

$lingkaran = new Lingkaran();

echo $lingkaran->luas(7); 
echo PHP_EOL;
```
Kita juga dapat memasukkan _return value_ kedalam sebuah _variable_ sebagai berikut:

```php
<?php

class Lingkarancara-penggunaan
{
	const PI = 3.14;

	public function luas($jari)
	{
		return self::PI * $jari * $jari;
	}
}

$lingkaran = new Lingkaran();
$luas = $lingkaran->luas(7);

echo $luas;
echo PHP_EOL;
```
Bagaimana dapat dipahami kan? Mudah bukan? Mari kita masuki dunia OOP PHP lebih dalam lagi.