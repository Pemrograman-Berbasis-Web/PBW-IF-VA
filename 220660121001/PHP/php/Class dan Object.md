Class dan Object
================
Bab ini akan menjabarkan tentang apa itu class, bagaimana cara membuat class, apa itu object, proses pembuatan object serta memahami perbedaan antara class dan _object.

- [Class dan Object](#class-dan-object)
- [Apa itu Class?](#apa-itu-class)
- [Contoh Class Pada PHP](#contoh-class-pada-php)
- [Anatomi Class](#anatomi-class)
- [Pembuatan Object (Instantiasi)](#pembuatan-object-instantiasi)

# Apa itu Class?

Secara mudah, *class* adalah cetakan atau blueprint dari objek. Didalam class terdapat *property* dan *method*. Dalam OOP, class merupakan kerangka dasar yang harus dibuat sebelum kita membuat real object. Untuk lebih jelas, perhatikan gambar berikut:

![alt text](https://ds055uzetaobb.cloudfront.net/image_optimizer/722c82aff075a14313be7fa7463f7fedad151a0a.png)
*Source*: [cloudfront.net](https://www.cloudfront.net)

Bila diperhatikan dari gambar diatas, dapat kita simpulkan bahwa sebuah class dapat memiliki banyak object. Dalam prakteknya, sebuah class memang dapat memiliki banyak object tergantung dari berapa kali kita melakukan instansiasi. 

Instansiasi adalah proses atau mekanisme pembuatan object dalam OOP. Pada OOP, instansiasi ditandai dengan penggunaan *keyword* `new` diikuti nama dari class yang akan kita instansiasi.

# Contoh Class Pada PHP

Untuk membuat sebuah class pada PHP kita menggunakan *keyword* `class` diikuti nama dari class tersebut. Sebagai contoh kita akan membuat sebuah *class* `Mobil` , maka kita dapat membuatnya sebagai berikut:

```php
<?php

class Mobil
{
}
```
Kita juga dapat menambahkan method atau function pada class sehingga class `Mobil` akan menjadi seperti berikut:

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
Seperti yang sudah disebutkan pada pembahasan sebelumnya, bahwa selain memiliki *method*, *class* juga dapat memiliki *property*. Untuk membuat *property* pada *class* kita dapat menambah *atribut* di dalam class tersebut dengan mendefinisikannya menggunakan kata kunci `public`, `protected`, atau `private`. 

Atribut ini biasanya diinisialisasi dalam konstruktor menggunakan metode` __construct()`, yang memungkinkan kita untuk memberikan nilai awal kepada property saat objek dibuat.

```php
class Mobil
{
    public $roda; // Property yang dapat diakses dari luar

    public function __construct($roda)
    {
        $this->roda = $roda; // Menginisialisasi property
    }

    public function jalan()
    {
        echo 'Mobil berjalan';
    }
}

// Membuat objek dari class Mobil
$mobilSaya = new Mobil(4);
echo $mobilSaya->jalan(); // Menampilkan pesan "Mobil berjalan"
```
Mudah sekali kan?

```php
<?php

class Mobil
{
    public $roda; // Property untuk menyimpan jumlah roda

    // Konstruktor untuk menginisialisasi property
    public function __construct($roda)
    {
        $this->roda = $roda;
    }

    // Method untuk menggambarkan aksi mobil
    public function jalan()
    {
        echo 'Mobil berjalan';
    }

    // Method untuk menampilkan jumlah roda
    public function jumlahRoda()
    {
        return $this->roda;
    }
}

// Contoh penggunaan class Mobil
$mobilSaya = new Mobil(4); // Membuat objek Mobil dengan 4 roda
echo $mobilSaya->jalan(); // Menampilkan pesan "Mobil berjalan"
echo ' dengan ' . $mobilSaya->jumlahRoda() . ' roda.'; // Menampilkan jumlah roda
?>
```

`RUN` dan lihat Hasil eksekusi kode di atas.

Anda juga dapat menjalankan program diatas secara online dengan membuka link berikut https://3v4l.org/RR865.

Dalam contoh kode di atas, saya menambahkan *konstruktor *untuk menginisialisasi jumlah roda saat objek dibuat. 

Selain itu, saya juga menambahkan method `jumlahRoda()` untuk menampilkan jumlah roda mobil. 

Anda dapat mengembangkan class ini lebih lanjut sesuai kebutuhan.

# Anatomi Class

Untuk lebih memahami tentang struktur dari `class`, mari kita coba membedah kembali class `Mobil` diatas.

```php
class Mobil
{
}
```
*Keyword* `class` adalah sebuah *keyword* yang digunakan PHP untuk menandai bahwa sebuah *class* didefinisikan. 

*Keyword* `class` diikuti oleh nama *class* dalam hal ini adalah Mobil dan diikuti oleh kurung kurawal `{}` . 

Didalam kurung kurawal itulah segala *method* maupun *property* dari sebuah *class* didefinisikan.

```php
public $roda;
```
*Keyword* `public` menandai bahwa sebuah *property* atau *method* memiliki visibilitas public. Di PHP terdapat 4 visibilitas yaitu *private, protected, public* dan default (tidak didefinisikan). 

Tentang visibilitas ini akan dibahas secara tersendiri pada pembahasan berikutnya. Setelah *keyword* `public` diikuti oleh variable `$roda` yang dalam konsep OOP disebut sebagai *property* yaitu sebuah variable yang dapat digunakan dalam lingkup *object*.

```php
public function jalan()
{
	echo 'Mobil berjalan';
}
```
Pada contoh diatas, terdapat keyword `public` yang fungsinya telah dijelaskan sebelumnya. 

Setelah keyword `public` diikuti keyword `function` yang digunakan untuk menandai bahwa sebuah fungsi atau *method* didefinisikan. 

*Keyword* `function` diikuti oleh nama *method* yaitu jalan dan ikuti dengan tanda kurung `()` dilanjutkan dengan kurung kurawal `{}`.

Diantara kurung kurawal `{}` terdapat baris program yaitu `echo 'oleh _object_ Mobil berjalan';` , itulah yang disebut sebagai badan *method*. 

Didalam badan *method* kita dapat mendefinisikan *variable*, memanggil *method* lain atau bahwa memanggil *class* lain. Mudahnya, didalam *method* kita dapat mendefinisikan apa saja yang kita dapat definisikan diluar *method*. 

Namun yang perlu diingat adalah bahwa segala *variable* yang didefinisikan dalam *method* bersifat *local* sehingga hanya dapat digunakan pada lingkup *method* tersebut. 

Jika Anda ingin membuat *variable* yang dapat diakses dalam lingkup *object* maka gunakanlah *property*.

Diantara tanda kurung `()` sebenarnya kita dapat mendefinisikan parameter yaitu variable yang akan dikirimkan ketika *method* tersebut dipanggil. 

Untuk contoh penggunaan parameter akan lebih jelas lagi pada pembahasan-pembahasan selanjutnya. Untuk saat ini kita cukup tahu dulu bahwa sebuah *method* dapat memiliki parameter.

# Pembuatan Object (Instantiasi)

Seperti yang sudah dijelaskan sebelumnya bahwa sebuah class hanyalah *blueprint*, maka untuk membuatnya menjadi real kita perlu melakukan instansiasi. 

Proses instansiasi atau pembuatan object pada PHP ditandai dengan keyword `new` diikuti dengan nama class. Perhatikan contoh berikut:

```php
<?php

class Mobil
{
	public $roda;

	public function jalan()
	{
		echo 'Mobil berjalan';
	}

}

$avanza = new Mobil();
```
Pada contoh diatas, kita menginstansiasi class `Mobil` dan memasukkannya kedalam variable `$avanza` . Selain cara diatas, kita juga dapat melakukan instansiasi tanpa menggunakan tanda kurung `()` setelah nama *class*.

```php
<?php

class Mobil
{
	public $roda;

	public function jalan()
	{
		echo 'Mobil berjalan';
	}
}

$avanza = new Mobil;
```
Untuk memanggil *method* maupun *property* yang bersifat public dapat dilakukan sebagai berikut:

```php
<?php

class Mobil
{
	public $roda;

	public function jalan()
	{
		echo 'Mobil berjalan';
	}
}

$avanza = new Mobil();
$avanza->roda = 4;

echo $avanza->jalan(); echo PHP_EOL;
echo $avanza->roda; echo PHP_EOL;
```
Sehingga bila program diatas dijalankan maka akan menghasilkan output sebagai berikut:

```bash
php Mobil.php

Output:
Mobil berjalan 
4
```
Anda juga dapat menjalankan program diatas secara online dengan membuka link berikut https://3v4l.org/RR865.