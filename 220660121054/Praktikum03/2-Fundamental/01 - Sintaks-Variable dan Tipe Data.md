# Sintaks, Variable dan Tipe Data

- [Sintaks, Variable dan Tipe Data](#sintaks-variable-dan-tipe-data)
	- [Variable](#variable)
	- [String](#string)
	- [Number](#number)
	- [Array](#array)
	- [Object](#object)
	- [Intropeksi](#intropeksi)
	- [Boolean dan Kondisional](#boolean-dan-kondisional)
	- [Perulangan](#perulangan)

  
## Variable

Variabel adalah kode yang merujuk pada sebuah lokasi di memori (RAM) di mana sebuah data berada. Variabel tidak berisi data tetapi hanya merupakan referensi atau rujukan sebuah data di memori. Jadi secara teknis, pernyataan "variabel A bernilai 2" sebenarnya kurang tepat namun pernyataan ini lebih mudah dipahami dan ditulis daripada "variabel A merujuk pada data numerik bernilai 2 di memori".

Satu buah data bisa dirujuk oleh lebih dari satu variabel. Dalam kode berikut, variabel `myCar` dan `wifeCar` sama-sama merujuk pada satu data yaitu objek `Car` yang sama:

```javascript
var myCar = new Car();
var wifeCar = myCar;
```
Ada dua langkah yang diperlukan untuk menggunakan variabel yaitu:

1. Deklarasi
2. Inisialisasi atau definisi

Kita mendeklarasikan variabel dengan menggunakan kata kunci *(keyword) *var seperti contoh berikut:

```javascript
var firstName;
var last_name;
var email;
var wheel4;
```

Kita bisa menggunakan kombinasi huruf, angka, dan *underscore* untuk nama variabel tetapi nama variabel tidak boleh diawali dengan angka. Contoh berikut ini tidak valid:

`var 2wheel;`

Pada saat variabel dideklarasikan, nilainya adalah `undefined` sampai kita melakukan inisialisasi. Inisialisasi sebuah variabel berarti memberi nilai awal pada variabel tersebut. Inisialisasi dan deklarasi bisa dilakukan dalam satu baris atau baris yang terpisah.

```javascript
//Deklarasi & inisialisasi dalam satu baris 
var car_brand = 'Honda'

//Inisialisasi terpisah
var car_brand;
car_brand = 'Honda';
```
Kita juga bisa mendeklarasikan beberapa variabel sekaligus hanya dengan satu `keyword` var di mana antara satu variabel dengan yang lain dipisahkan dengan koma. Seperti contoh berikut:

```javascript
//semua dalam satu baris
var brand = 'honda',type='mpv', numberOfWheels = 4, price;

//baris terpisah (lebih baik daripada satu baris)
var brand = 'honda',
type='mpv',
numberOfWheels = 4,
price;
```
JavaScript memungkinkan kita membuat data dengan `dua notasi yaitu literal dan konstruktor` (*dengan keyword `new`*). Notasi literal lebih disukai untuk tipe data dasar seperti `Object`, `Array`, `Number`, dan `String` sedangkan untuk notasi konstruktor kita gunakan untuk *custom type* ( tipe data yang kita buat sendiri ).

```javascript
//notasi literal
var a = [1,2,3];
var obj = {};
var n = 123;

//notasi objek (tidak disarankan)
var a = new Array(1,2,3);
var obj = new Object();
var n = new Number(123);
```

Berikut adalah contoh cara melakukan `embedding variabel JavaScript pada HTML:`

**Contoh 1: Menyematkan Variabel dengan Alert Box**

Anda dapat membuat variabel JavaScript dan kemudian menampilkan mereka menggunakan alert box atau menulisnya ke dalam HTML.

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar Variabel dalam Javascript</title>
</head>
<body>
	<h1>Variabel dan Nilainya</h1>
	
	<script>
		var name = "Pemrograman Berbasis Web";
		var visitorCount = 50322;
		var isActive = true;
		
		alert("Selamat datang di " + name);
		
		document.write("<p>Nama Situs: " + name + "</p>");
		document.write("<p>Jumlah Pengunjung: " + visitorCount + "</p>");
		document.write("<p>Status Aktif: " + isActive + "</p>");
		
		console.log(name, visitorCount, isActive);
	</script>
</body>
</html>
```

**Contoh 2: Menyematkan Variabel dengan InnerHTML**

Anda juga dapat menampilkan variabel JavaScript menggunakan innerHTML untuk menulis kontennya ke dalam elemen HTML.

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar Variabel dalam Javascript</title>
</head>
<body>
	<h1>Variabel dan Nilainya</h1>
	
	<div id='result'></div>
	
	<script>
		let name = "Pemrograman Berbasis Web";
		let visitorCount = 50322;
		let isActive = true;
		
		const resultElement = document.getElementById('result');
		
		resultElement.innerHTML += `
		  <p>Nama Situs: ${name}</p>
		  <p>Jumlah Pengunjung: ${visitorCount}</p>
		  <p>Status Aktif: ${isActive.toString()}</p>`;
		  
	  console.log(name, visitorCount, isActive);
	  
	  // Alternatif dengan template literal (tidak direkomendasikan karena kurang fleksibel):
	  // resultElement.innerHTML = '<p>' + name + '</p><p>' + visitorCount + '</p>';
	  // ...
   </script>
   
   <!-- Juga bisa menggunakan alert -->
   <button onclick="showAlert()">Show Alert</button>

   <script>
     function showAlert(){
       alert(`Selamat datang di ${name}`);
     }
   </script>
</body>
</html>

```

Dengan demikian, Anda telah berhasil menyematkan variabel JavaScript ke dalam sebuah halaman web HTML menggunakan teknik-teknik dasar seperti alert box dan innerHTML

## String

String adalah data yang berisi deretan karakter yang digunakan untuk merepresentasikan sebuah teks. String diawali dan diakhiri dengan tanda kutip ganda atau kutip tunggal.

```javascript
//dengan tanda kutip ganda
var brand = "Honda";
//dengan tanda kutip tunggal
var brand = 'Honda';

//angka yang dilingkupi tanda kutip berubah menjadi string (teks) jadi kita tidak bisa melakukan operasi matematika
var n = '123456';

//penjumlahan string dengan number menyebabkan number dikonversi menjadi string hasilnya adalah penggabungan string
var j = ''+123456; //hasilnya sama dengan string '123456'

//teks yang berisi tanda kutip tunggal harus diawali dan diakhiri dengan kutip ganda 
var error = "Can't find user";

//atau menggunakan escape character "\"
var error = 'Can\'t find user';
```
Contoh:

```javascript
// Deklarasi variabel string  
let nama = "John Doe";  
  
// Menggunakan metode string  
console.log(nama.length); // Output: 8  
console.log(nama.toUpperCase()); // Output: JOHN DOE  
console.log(nama.toLowerCase()); // Output: john doe  
console.log(nama.charAt(0)); // Output: J  
console.log(nama.indexOf("Doe")); // Output: 4  
console.log(nama.substring(0, 4)); // Output: John  
console.log(nama.split(" ")); // Output: ["John", "Doe"]  
console.log(nama.replace("John", "Jane")); // Output: Jane Doe  
console.log(nama.trim()); // Output: John Doe (menghilangkan spasi di awal dan akhir string)
```
Pada contoh di atas, kita dapat melihat beberapa metode yang dapat digunakan pada variabel string, seperti:

- `length`: mengembalikan panjang string
- `toUpperCase()`: mengubah string menjadi huruf besar
- `toLowerCase()`: mengubah string menjadi huruf kecil
- `charAt()`: mengembalikan karakter pada posisi tertentu
- `indexOf()`: mengembalikan posisi awal dari substring
- `substring()`: mengembalikan substring dari string
- `split()`: membagi string menjadi array
- `replace()`: mengganti substring dengan string lain
- `trim()`: menghilangkan spasi di awal dan akhir string

Dengan menggunakan metode-metode ini, kita dapat melakukan berbagai operasi pada `string` di JavaScript.

Penjelasan singkat tentang apa yang dilakukan oleh kode tersebut:

- `nama.length` mengembalikan panjang string "John Doe", yaitu 8.
- `nama.toUpperCase()` mengubah string "John Doe" menjadi huruf besar, yaitu "JOHN DOE".
- `nama.toLowerCase()` mengubah string "John Doe" menjadi huruf kecil, yaitu "john doe".
- `nama.charAt(0)` mengembalikan karakter pertama dari string "John Doe", yaitu "J".
- `nama.indexOf("Doe")` mengembalikan posisi awal dari substring "Doe" dalam string "John Doe", yaitu 4.
- `nama.substring(0, 4)` mengembalikan substring dari string "John Doe" mulai dari posisi 0 hingga 4, yaitu "John".
- `nama.split(" ")` membagi string "John Doe" menjadi array berdasarkan spasi, yaitu ["John", "Doe"].
- `nama.replace("John", "Jane")` mengganti substring "John" dengan "Jane" dalam string "John Doe", yaitu "Jane Doe".
- `nama.trim()` menghilangkan spasi di awal dan akhir string "John Doe", yaitu "John Doe".
  
Berikut adalah contoh kode `"String"` pada `JavaScript` yang dapat membantu Anda memahami cara kerja dan penggunaan `string`, dengan kode `embed` pada `HTML`:

```html
<!DOCTYPE html>  
<html>  
<head>  
  <title>Contoh Kode String pada JavaScript</title>  
</head>  
<body>  
  <h1>Contoh Kode String pada JavaScript</h1>  
  <script>  
   // Deklarasi variabel string  
   let nama = "John Doe";  
  
   // Menggunakan metode string  
   console.log(nama.length); // Output: 8  
   console.log(nama.toUpperCase()); // Output: JOHN DOE  
   console.log(nama.toLowerCase()); // Output: john doe  
   console.log(nama.charAt(0)); // Output: J  
   console.log(nama.indexOf("Doe")); // Output: 4  
   console.log(nama.substring(0, 4)); // Output: John  
   console.log(nama.split(" ")); // Output: ["John", "Doe"]  
   console.log(nama.replace("John", "Jane")); // Output: Jane Doe  
   console.log(nama.trim()); // Output: John Doe (menghilangkan spasi di awal dan akhir string)  
  
   // Menampilkan hasil pada halaman web  
   document.write("Panjang string: " + nama.length + "<br>");  
   document.write("String dalam huruf besar: " + nama.toUpperCase() + "<br>");  
   document.write("String dalam huruf kecil: " + nama.toLowerCase() + "<br>");  
   document.write("Karakter pertama: " + nama.charAt(0) + "<br>");  
   document.write("Posisi awal substring 'Doe': " + nama.indexOf("Doe") + "<br>");  
   document.write("Substring dari posisi 0 hingga 4: " + nama.substring(0, 4) + "<br>");  
   document.write("Array dari string: " + nama.split(" ") + "<br>");  
   document.write("String dengan 'John' diganti 'Jane': " + nama.replace("John", "Jane") + "<br>");  
   document.write("String dengan spasi di awal dan akhir dihilangkan: " + nama.trim() + "<br>");  
  </script>  
</body>  
</html>
```
Silahkan lihat Output: nya

Dengan contoh ini, Anda dapat memahami cara kerja dan penggunaan string dalam bahasa `pemrograman JavaScrip`t.

## Number

Number adalah representasi data numerik. Dalam JavaScript, data ini secara default berjenis *floating point* (desimal) tetapi kita juga bisa menggunakan bilangan oktal (basis 8) dan heksadesimal (basis 16).

```javascript
var n = 1;
var mass = 1.5;

//oktal berawalan 0
var o = 0377;

//heksadesimal berawalan 0x
var color = 0xFFFFFF;
```

JavaScript memiliki dua tipe data khusus yang berkaitan dengan number yaitu `Infinity` dan `NaN`. Infinity adalah data numerik yang nilainya sangat besar (atau sangat kecil) tidak terhingga, melebihi batas yang bisa diproses oleh JavaScript. Infinity bisa bernilai positif atau negatif. `NaN` adalah singkatan dari Not a Number yang merupakan nilai ekuivalen dari undefined tetapi khusus untuk data numerik.

```javascript
var kecilSekali = -Infinity;
var besarSekali = Infinity;

//perkalian data numerik dengan string //menghasilkan NaN
var a = 10 * "20";

//operasi numerik yang melibatkan NaN //akan menghasilkan NaN juga
var b = 10 * 10 + NaN
```

Selain operator matematika standar ( *, /, +, -,% ), kita juga bisa menggunakan beberapa *shortcut* seperti contoh berikut.

```javascript
var a = 10;

//kalikan a dengan 2 dan simpan dalam variabel a lagi sama dengan a = a * 2
a *= 2;
console.log(a); // 20

var b = 20;

//bagi b dengan 2 dan simpan hasilnya dalam variabel b lagi sama dengan b = b / 2
b /= 2;
console.log(b); //10

//jumlahkan a dengan 1 dan simpan hasilnya 
//dalam variabel a lagi
//sama dengan a = a + 1 atau ++a
a++;
console.log(a); //21

//kurangi b dengan 1 dan simpan hasilnya 
//dalam variabel b lagi
//sama dengan b = b - 1 atau --b
b--;
console.log(b); //9

//ambil sisa pembagian b dengan 2 (modulus) dan simpan 
//hasilnya dalam variabel b lagi 
//sama dengan b = b % 2
b %= 2;

console.log(b);//1
```
Kita perlu berhati-hati dalam menggunakan operator `--` dan `++` dalam operasi perbandingan karena posisi mereka terhadap variabel yang bersangkutan akan mempengaruhi hasil akhirnya. Berikut ini contohnya.

```javascript
var i = 1;
console.log(i++ == 1); //true
console.log(i);//2

var i = 1;
console.log(++i == 1); //false
console.log(i);//2

var i = 1;
console.log(i-- == 0); //false
console.log(i);//0

var i = 1;
console.log(--i == 0); //true
console.log(i);//0

```
Jika posisi operator `++` dan `--` ada di belakang variabel, maka variabel tersebut akan dibandingkan terlebih dahulu, baru kemudian nilainya dinaikkan (`++`) atau diturunkan (`--)`. Kedua operasi ini disebut *post-increment* dan `post-decremen`t.

## Array

Array adalah struktur data sederhana berisi deretan data (elemen) yang bisa diakses dengan menggunakan nomor indeks atau key. Indeks sebuah array dimulai dari nol.

```javascript

//buat array 3 elemen
var a = [1,2,3];

//tampilkan data pada index pertama (0)
console.log(a[0]);//output: 1

//tampilkan data pada index terakhir (2)
console.log(a[2]);//output: 3
```

Array yang menggunakan key `(string)` sebagai identitas, disebut `associative-array`. Untuk mengakses elemennya kita harus menggunakan `key` bukan nomor indeks. Key ditulis dalam tanda kurung siku atau diawali dengan tanda titik (`dot-notation`).

```javascript
var info = [];
info['name'] = 'John';
info['age'] = 40;
//dengan dot notation
info.sex = 'male';

console.log(info['sex']);//male
console.log(info.name);//John

//Associative-array tidak mengenal indeks 
console.log(info[0]);//undefined
```

- ### Array Function

Array memiliki banyak *built-in* function untuk memanipulasi elemen, membuat duplikat, dan lain-lain. Beberapa di antaranya bisa kita coba dengan kode berikut.

```javascript
var myArray = [0];
//tambahkan elemen di index 1
myArray[1] = 5;
console.log(myArray);//0,5

//tambahkan elemen baru di belakang
myArray.push(10);
console.log(myArray); //0,5,10

//tambahkan elemen baru di depan
myArray.unshift(100);
console.log(myArray); //100,0,5,10

//tambahkan elemen baru di depan elemen terakhir
myArray.splice(myArray.length - 1, 0, 300);
console.log(myArray); //100,0,5,300,10

//hapus elemen terakhir
myArray.pop();
console.log(myArray); //100,0,5,300

//hapus elemen pertama
myArray.shift();
console.log(myArray); //0,5,300

//gabungkan dengan array lain
var otherArray = ['a', 'b', 'c'];
myArray = myArray.concat(otherArray);
console.log(myArray); //0,5,300,a,b,c

//buat array baru berisi sebagian elemen myArray
//antara index 0 - terakhir
var partial = myArray.slice(1, myArray.length - 1);
console.log(partial); //5,300,a,b
//myArray tidak berubah
console.log(myArray); //0,5,300,a,b,c

//buat duplikat
var myCopy = myArray.concat();
console.log(myCopy); //0,5,300,a,b,c

//buat string dari array dengan pemisah '|'
var s = myArray.join('|');
console.log(s); //0|5|300|a|b|c
```
`RUN` dan lihat Hasil eksekusi kode di atas.

## Object

`Object` adalah "`mbahnya`" semua tipe data dalam JavaScript. Dengan kata lain, semua tipe data adalah turunan dari Object. Untuk membuat objek, kita menggunakan notasi literal `{ }`.

```javascript
var car = {};
```
`Objek` memiliki properties dan untuk membuat properties kita bisa menggunakan cara yang sama dengan `associative-array` atau menggunakan notasi objek `(key-value) `seperti contoh berikut.

```javascript
//notasi objek, lebih disukai

//setiap properti dipisahkan oleh koma & key-value dipisahkan //oleh titik-dua.

//Tidak boleh menggunakan keyword var var myCar = {
brand: 'Honda',
    year: 2011
};

//cara yg sama dengan sintaks associative-array
var yourCar = {};
yourCar['brand'] = 'Toyota';
yourCar['year'] = 2012;
```
Sama seperti *associative-array*, kita mengakses properti dengan key dalam kurung siku atau dot-notation.

```javascript
console.log(yourCar.brand);
console.log(yourCar['brand']);
```

```javascript
//contoh implementasi objek

//notasi objek
var person = {
    nama: 'John Doe',
    umur: 25,
    alamat: 'Jl. Raya No. 1'
};

//associative-array
var orang = {};
orang['nama'] = 'Jane Doe';
orang['umur'] = 30;
orang['alamat'] = 'Jl. Raya No. 2';

console.log(person);
console.log(orang);
```
## Intropeksi

Introspeksi adalah proses pengecekan sebuah objek yang kita lakukan ketika kita ingin mengetahui apa tipe data sebuah objek dan apa saja variabel dan function yang ada di dalamnya. JavaScript memiliki tiga `built-in function` untuk melakukan introspeksi yaitu:

- `typeof` : memeriksa tipe data sebuah variabel
- `instanceof` : untuk mengecek apakah sebuah data merupakan instance (objek) dari sebuah kelas
- `hasOwnProperty` : untuk mengecek apakah sebuah objek memiliki properti (key)

```javascript
var a = {
    name: 'bob',
    die: function() {}
};

console.log(a.hasOwnProperty('name')); //true console.log(a.hasOwnProperty('die'));//true console.log(a.hasOwnProperty('kill'));//false

var b = 100;
var c = '100';
var d = function() {};

console.log(typeof a); //object

console.log(typeof b); //number

console.log(typeof c); //string

console.log(typeof d); //function

var myClass = function() {
    var name;

}

var myObject = new myClass();

console.log(myObject instanceof myClass); //true
```
`RUN` dan lihat Hasil eksekusi kode di atas.

Salah satu kegunaan introspeksi adalah untuk melakukan validasi data. Misalkan kita membuat function yang hanya menerima data bertipe string, maka kita bisa melakukan validasi menggunakan `typeof` seperti contoh berikut:

```javascript
function validateName(value) {
    if (typeof value == 'string){
        //kode yang dieksekusi jika value benar bertipe string
    }
}
```
## Boolean dan Kondisional

Operasi kondisional adalah proses eksekusi kode jika suatu syarat terpenuhi. Jika syarat tidak terpenuhi dan ada kode alternatif, maka kode alternatif itulah yang akan dieksekusi. Untuk melakukan operasi kondisional kita menggunakan data bertipe *Boolean* yaitu data yang hanya bisa bernilai `true` atau `false`.

```javascript
var a = true;
typeof a; //boolean

//sama seperti Number, nilai boolean yang dibungkus //oleh tanda petik berubah menjadi string
var b = 'true';
typeof b; //string
```

- ### Logika

JavaScript memiliki tiga operator logika yaitu:

1. `!` : kebalikan (negasi)
2. `&&` : logika AND
3. `||` : logika OR

Operator `!` akan menghasilkan nilai kebalikan dari data di mana operator tersebut disematkan.

```javascript
var a = true;
console.log(a);//true
console.log(!a);//false

var b = false;
console.log(!b);//true
```
Logika AND (`&&`) menghasilkan nilai true hanya jika kedua ekspresi di sebelah kiri dan kanan operator tersebut bernilai true.

```javascript
var a = true;
var b = true;

console.log(a && b);//true

a = false;
console.log(a && b);//false

a = b = false;
console.log(a && b);//false

a = b = true;
var c = false;
console.log(a && b && c);//false
```
Logika OR ( `||` ) menghasilkan nilai true jika minimal salah satu dari ekspresi di sebelah kiri dan kanan bernilai true.

```javascript
var a = true;
var b = true;

console.log(a || b);//true

a = false;
console.log(a || b);//true

a = b = false;
console.log(a || b);//false

b = true;
var c = false;
console.log(a || b || c);//true
```
Sebagai kuis, coba perkirakan apa tampilan di console (`true` atau `false`) tanpa menjalankan kode berikut di browser.

```javascript
var a = true;
var b = false;
var c = false;
var d = true;

console.log(a || b && !c && !d)
```

- ### Perbandingan
Berikut ini beberapa operator perbandingan yang tersedia dalam JavaScript berikut contoh kodenya.
| OPERATOR | TRUE jika...                                                                                                                                                                                   |
| -------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| ` == `   | Data di sisi kiri sama dengan yang di sisi kanan. Sebelum perbandingan dilakukan JavaScript engine akan mencoba melakukan konversi tipe data sehingga kedua operand bertipe sama jika mungkin. |
| `===`    | Data di sisi kiri sama dengan yang di sisi kanan dan keduanya mengacu pada data yang sama. Perbandingan dilakukan tanpa konversi.                                                              |
| `!=`     | Data di sisi kiri tidak sama dengan yang di sisi kanan setelah konversi tipe data.                                                                                                             |
| `!==`    | Data di sisi kiri tidak sama dengan yang di sisi kanan ATAU keduanya bernilai sama tetapi berbeda tipe data. Operasi ini tanpa konversi tipe data.                                             |
| `>`      | Data di sisi kiri lebih besar daripada data di sisi kanan                                                                                                                                      |
| ` >=`    | Data di sisi kiri lebih besar daripada atau sama dengan data di sisi kanan                                                                                                                     |
| `<`      | Data di sisi kiri kurang dari data di sisi kanan                                                                                                                                               |
| `<=`     | Data di sisi kiri kurang dari atau sama dengan data di sisi kanan                                                                                                                              |

```javascript
var myClass = function () {
	name: 'bob'
};

var myClass2 = function () {
	name: 'bob'
};

var a = new myClass();
var b = a;
var c = myClass2();

console.log(a == b); //true
console.log(a == c); //false
console.log(a === c); //false
console.log(a != b); //false
console.log(b !== c); //true

var d = '1';
var e = 1;

console.log(d == e); //true karena ada konversi tipe data 
console.log(d != e);//false karena ada konversi 
console.log(d === e); //false, tidak ada konversi 
console.log(d !== e);//true, tidak ada konversi

console.log( 1 > 2 );//false
console.log( 2 > 1 );//true
console.log( 2 >= 1 );//true
console.log( 1 <= 1 );//true

//kasus menarik, NaN tidak sama dengan apapun bahkan dirinya sendiri
console.log( NaN == NaN );//false
```
`RUN` dan lihat Hasil eksekusi kode di atas.

- ### Pencabangan
Kode program yang kita tulis tidak akan terlepas dari pencabangan. Dua pernyataan yang kita gunakan untuk pencabangan adalah `if` dan `if-else`.


```javascript
var a = 5;

function check(n) {
    console.log('----------');

    if (n > 0) {
        console.log(n + ' lebih besar dari 0');

    } else {
        console.log(n + ' tidak lebih besar dari 0')
    };

    if (n > a) {
        console.log(n + ' lebih besar dari ' + a);

    } else if (n < a) {
        console.log(n + ' kurang dari ' + a);

    } else {
        console.log(n + ' sama dengan ' + a);
    }
}


check(1);
check(10);
check(-1);
check(5);
```
`RUN` dan lihat Hasil eksekusi kode di atas.

- ### Ternary Operator
Operator ini digunakan sebagai jalan pintas ( *shortcut* ) untuk pencabangan sederhana.

Sebagai contoh, misalkan kita punya *function* seperti berikut.

```javascript
	function check(c) {

		if (c > 0) {
			console.log('ok');
		} else {
			console.log('not ok');
		};

	}
```
Kode di atas bisa ditulis dengan ternary operator seperti berikut. Di mana baris `(c > 0 ) ? true : false` fungsinya sama dengan blok kode *if-else* di atas.

- ### Switch-case
  *Switch-case* kita gunakan untuk pencabangan dengan banyak kondisi sebagai pengganti *if-else*. Sintaks dasarnya adalah
  
	```javascript
	switch (variabel yang diuji) {
		case kondisi pertama:

			//kode yang dieksekusi jika kondisi pertama terpenuhi break;//keluar dari switch-case
		case kondisi kedua:

			//kode yang dieksekusi jika kondisi kedua terpenuhi break
		default:

			//kode yang dieksekusi jika kondisi-kondisi di atas tidak //ada yang terpenuhi
	}
	```
	Di bawah ini contoh *switch-case* sederhana di mana variabel `status` berisi pesan berbeda-beda tergantung tipe data yang dikirim ke *function* `checkType`.

```javascript
	function checkType(n) {
		console.log('-------');
		var status;
		var t = typeof n;

		switch (t) {
			case 'string':
				status = 'anda memasukkan string';
				break;
			case 'number':
				status = 'anda memasukkan angka';
				break;
			default:
				//jika t bukan string ataupun number
				status = 'anda memasukkan object';
		}
		console.log(status);
	}

	checkType('a'); //anda memasukkan string
	checkType(100); //anda memasukkan angka
	checkType('100'); //anda memasukkan string
	checkType(null); //anda memasukkan object
	checkType(undefined); //anda memasukkan object
	checkType([1, 2, 3]); //anda memasukkan object
```
`RUN` dan lihat Hasil eksekusi kode di atas.

## Perulangan
Perulangan adalah pemrosesan sekumpulan data atau eksekusi kode sebanyak beberapa kali. JavaScript memiliki empat operator perulangan yaitu `for, for-in, while,dan do-while.`

  - ### for
  for kita gunakan untuk melakukan perulangan dengan batas yang kita tentukan. Batas ini harus berupa angka.

```javascript
var a = [];

for (var i = 0; i < 10; i++) {
    a.push(i);
}

console.log(a);
console.log('panjang a = ' + a.length + " elemen");

//gandakan nilai a dan simpan hasilnya dalam array b var b = [];
for (var j = 0; j < a.length; j++) {
    b.push(a[j] * 2);
}

console.log(b);

//cari data bernilai 5 dalam array a dan hentikan pencarian //begitu data ditemukan
var c;

//sintaks alternatif, lebih efisien karena panjang array a //disimpan dalam variabel len

for (var k = 0, len = a.length; k < len; k++) {
    if (a[k] === 5) {
        c = a[k];

        //data ditemukan, hentikan loop dan keluar dari loop break;
    }
}

//perhatikan nilai k terakhir tidak sama dengan //panjang array a
console.log('data: ' + c + ' ditemukan di indeks ' + k);
```
  - ### for-in
  `for-in` hanya bisa digunakan untuk memproses *array* atau *object*. Berbeda dengan `for, while`, dan `do-while` yang bersifat generik. Berikut ini contoh perulangan *for-in* atas sebuah *array*.
  
 ```javascript
var list = ['a', 'b', 'c'];
var message;
for (var i in list) {
    message = 'indeks ' + i + ' berisi data ' + list[i];
    console.log(message);
};
 ```
  `RUN` dan lihat Hasil eksekusi kode di atas.

`for-in` juga bisa kita gunakan untuk memproses semua atribut *(key)* sebuah object seperti contoh berikut ini.

```javascript
var person = {
    'name': 'boss',
    'age': 40,
    'sex': 'male'
}

var message;

for (var attr in person) {

    message = 'atribut ' + attr + ' berisi data ' + person[attr];
    console.log(message);
}
```
`RUN` dan lihat Hasil eksekusi kode di atas.

  - ### while
  `while` adalah perulangan yang paling sederhana. Perulangan dilakukan selama kondisi untuk berhenti *(break condition)* belum terpenuhi. Dalam eksekusinya, *break condition* diuji terlebih dahulu baru kemudian kode dijalankan. Berikut ini contohnya.

```javascript
var a = [];
var i = 0;

//selama i kurang dari 4
//break condition : i == 4
while (i < 4) {
    //simpan i dalam array
    a.push(i);

    //naikkan i untuk proses selanjutnya
    i++;
};

console.log(a); //[0,1,2,3]
```
Kode di atas juga bisa kita tulis dalam bentuk berikut.

```javascript
var a = [];
var i = 0;

while (i++ < 4) {
    a.push(i);
};

console.log(a); //0,1,2,3
```
Jika kita mengganti `i++` dalam contoh di atas dengan `++i` maka kita akan mendapat hasil yang berbeda. Jadi kita perlu berhati-hati dalam menggunakan *while* dengan shortcut seperti itu. Ini juga berlaku untuk operasi kondisional seperti yang kita pelajari dalam bab sebelumnya.

Berikut ini contoh kode di atas dengan ekspresi `++i` sebagai pengganti `i++`.

```javascript
var a = [];
var i = 0;

while (++i < 4) {
    a.push(i);
};

console.log(a); //1,2,3
```
  - ### do-while

*do-while* sedikit berbeda dengan while tetapi kalau kita tidak paham perbedaannya, kode kita tidak akan bekerja dengan benar. Berikut contoh do-while yang mirip dengan contoh while di atas.

```javascript
var a = [];
var i = 0;

do {
    a.push(i);
    i++;

} while (i < 4);

console.log(a); //[0,1,2,3]
```
Hasil eksekusinya memang sama, tetapi ada perbedaan mendasar antara *do-while* dan *while*. 

*Do-while* akan memproses blok kode di dalamnya terlebih dahulu, baru kemudian menguji break condition sehingga blok kode diproses minimal satu kali. 

Sebaliknya *while* akan menguji break condition dulu baru memproses blok kode dan mungkin saja blok kode tidak pernah diproses. Berikut contoh yang menunjukkan perbedaan keduanya.

```javascript
var b = [];

var i = 5;
while (i < 4) {
    b.push(i);
    i++;
}

//b tidak memiliki elemen (kosong) karena blok kode tidak pernah dieksekusi
console.log(b); //[]

var a = [];

var i = 5;

do {
    a.push(i);
    i++;
} while (i < 4);

//a memiliki satu elemen karena blok kode //dieksekusi minimal satu kali 
console.log(a); //[5]
```