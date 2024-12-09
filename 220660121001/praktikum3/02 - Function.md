# Function
- [Function](#function)
  - [Introduksi](#introduksi)
  - [Function Sederhana](#function-sederhana)
  - [Scope Chain](#scope-chain)
  - [Callback](#callback)
  - [Self-Invoking Function](#self-invoking-function)
  - [Return Function](#return-function)
  - [Closure](#closure)

<a name="introduksi"></a>
## Introduksi
Dalam JavaScript, `function` adalah *first-class object*. Artinya, `function` bisa digunakan secara mandiri (standalone) atau sebagai bagian dari objek atau `function` lain. Secara default, function yang kita tulis adalah global function yang bisa diakses dari kode lain dalam satu *window* yang sama kecuali jika *function* tersebut merupakan bagian dari sebuah object atau function lain.

*Global function* yang kita buat dalam sebuah file `script1.js` bisa diakses/dieksekusi oleh kode lain yang berada dalam file misalnya `script2.js` dan sebaliknya, jika kedua skrip tersebut dimuat oleh halaman html yang sama.

<a name="function-sederhana"></a>
## Function Sederhana

Setiap *function* terdiri dari dua bagian yaitu signature dan body. *Signature* sebuah function adalah nama dan parameter sedangkan *body* adalah seluruh kode di antara kurung kurawal.

```javascript
function sum(a, b) {
    //signature, nama = sum, parameter = a & b
    return a + b;
    //body
};


//eksekusi function, tampilkan hasilnya di console 
console.log(sum(1,2));//3
```
Karena *function* juga merupakan sebuah data, kita bisa menulis kode di atas sebagai sebuah variabel yang berisi *function* tanpa nama (anonim) seperti berikut:

```javascript
var sum = function(a,b){
	return a + b;
};
```
Setiap function memiliki nilai balik (return value) yang dikirimkan ke kode yang mengeksekusinya. Kalau kita tidak secara eksplisit mendefinisikan nilai balik sebuah function, JavaScript engine akan membuatnya secara otomatis dengan nilai `undefined`. Dua function di bawah memiliki nilai balik yang sama, perbedaannya `fn_A` memiliki nilai balik eksplisit sedangkan `fn_B` implisit.

```javascript
//nilai balik eksplisit
function fn_A() {
    return undefined;
}

//nilai balik implisit
function fn_B() {

}
```
Sebuah *function* bisa menjadi bagian *(child)* dari function lain.

```javascript
function getCircleArea(r) {

    function pi_r() {
        return Math.PI * r;
    };

    return 2 * pi_r();
};
```
<a name="scope-chain"></a>
## Scope Chain

Setiap *function* yang dieksekusi memiliki *scope* atau ruang lingkup yang menentukan variabel dan function lain yang bisa diakses oleh function tersebut. Sama dengan variabel global, *global function* bekerja dalam konteks *window* dan bisa diakses dari manapun.

```javascript
var n = 10;
var fn_A = function() {
    console.log(this); //window
    console.log(n); //10
}
```
Sebuah `child` function bisa mengakses variabel atau function yang dimiliki oleh parent `function`. Sebaliknya parent function tidak bisa mengakses variabel atau function yang dimiliki oleh child.

```javascript
var fn = function() {
    var a = 10;

    function fn_test() {
        var b = 20;
        console.log('#fn_test');
        console.log(a);
    }

    function fn_test2() {
        console.log('#fn_test2');
        //karena function ini tidak punya variabel a

        //yang dipakai adalah variabel a milik root function 
        console.log(a);

        function fn_test2_child() {
            console.log('##fn_test2_child');
            console.log('a');
            //a bisa diakses karena a berada dalam //scope chain


            console.log(a); //10
            console.log('##call fn_test()');
            //fn_test() ada dalam scope chain
            //sehingga bisa diakses juga
            fn_test();
        }

        fn_test2_child();
    }

    fn_test();
    fn_test2();

    console.log('fn');

    //b tidak dikenali oleh root function 
    console.log(b);//undefined
}

//jalankan function fn()
fn();
```
Ketika sebuah *function* tidak bisa menemukan variabel atau function di dalam scope-nya sendiri, function tersebut akan mencari variabel atau function di dalam scope parent function kemudian parent dari parent function dan seterusnya sampai global scope.

Struktur ini disebut *scope chain*. Jika sampai *global scope* variabel atau function yang dicari tidak ditemukan maka variabel atau *function* tersebut bernilai `undefined.`

![42uwcacky](/img/42uwcacky-JavaScript-OneCompiler-10-13-2024_12_39_AM.png)

```javascript
var x = 100;

function fn_A() {
    var y = 50;

    function fn_B() {
        var z = 200;

        function fn_C() {
            var sum = x + y + z;
            console.log('sum = ' + sum)
        }

        function fn_D() {

            var total = sum * 0.5; //ERROR!
            console.log('total = ' + total)
        }

        fn_C();
        fn_D();
    }

    fn_B();
}
fn_A();
```
```console
Output:

sum = 350

/index.js:16
            var total = sum * 0.5; //ERROR!
                        ^

ReferenceError: sum is not defined
    at fn_D (/index.js:16:25)
    at fn_B (/index.js:21:9)
    at fn_A (/index.js:24:5)
    at Object.<anonymous> (/index.js:26:1)
    at Module._compile (node:internal/modules/cjs/loader:1103:14)
    at Object.Module._extensions..js (node:internal/modules/cjs/loader:1157:10)
    at Module.load (node:internal/modules/cjs/loader:981:32)
    at Function.Module._load (node:internal/modules/cjs/loader:822:12)
    at Function.executeUserEntryPoint [as runMain] (node:internal/modules/run_main:77:12)
    at node:internal/main/run_main_module:17:47
```
Dalam contoh kode di atas, `fn_C` tidak memiliki variabel `x,y`, dan `z` sehingga function ini akan mencari variabel-variabel tersebut dalam scope chain.

Variabel z ditemukan di *parent function* ( `fn_B` ), variabel y ditemukan di parent dari` fn_B` yaitu `fn_A`, dan variabel` x` ditemukan di parent dari `fn_A` ( window/global ).

Variabel `sum` yang ada di scope `fn_C` tidak bisa ditemukan oleh `fn_D` karena hubungan antara` fn_D` dan `fn_C `adalah *sibling*, bukan *parent-child*, sehingga `sum` akan bernilai *undefined*.

*Scope chain* `fn_C` dalam kode di atas dapat divisualisasikan dengan gambar berikut.

![crS6waM](https://i.imgur.com/crS6waM.png)

<a name="callback"></a>
## Callback

Dalam praktek pemrograman JavaScript, kita akan menemui banyak sekali penggunaan *callback* yaitu sebuah function yang dikirim ke function lain sebagai argumen sehingga bisa dieksekusi oleh function tujuan.

Berikut ini contoh *callback*.

```javascript
function add(a, b) {
    var sum = a() + b();
    console.log(sum);
}

function fn_A() {
    return 1;
}

function fn_B() {
    return 2;
}

//perhatikan : fn_A dan fn_B tanpa
//tanda kurung di belakangnya karena

//kita ingin mengirim function bukan hasil eksekusinya 
add(fn_A, fn_B);//output: 3
```
*Callback* juga bisa diimplementasikan dengan *function anonim*. Contoh di atas bisa kita tulis sebagai berikut:

```javascript
function add(a, b) {
    var sum = a() + b();
    console.log(sum);
}

function fn_A() {
    return 1;
}

//fn_B diganti oleh function anonim
add(fn_A, function() {
    return 2;
});
```

<a name="self-invoking-function"></a>
## Self-Invoking Function

`Self-invoking function` adalah function yang mengeksekusi dirinya sendiri segera pada saat kode function tersebut selesai dibaca oleh JavaScript engine.

Banyak developer yang lebih suka menyebutnya sebagai *Immediately-invoked Function Execution* (IIFE, dieja: iffy ) untuk menghindari kerancuan dengan istilah *recursive* function yang juga berarti function yang mengeksekusi dirinya sendiri tetapi dalam konteks yang berbeda.

Fitur ini adalah fitur unik dalam bahasa JavaScript yang setahu saya tidak ada dalam bahasa lain kecuali mungkin bahasa functional seperti *Haskell* dan *Erlang*.

```javascript
(function() {
    console.log('self-invoking function');
}());

//self-invoking function dengan parameter 
(function(name) {
    console.log('halo,' + name);

}('Teman-teman Semester V - Fakultas Teknologi Informasi'));
```
`RUN` dan lihat Hasil eksekusi kode di atas.

<a name="return-function"></a>
## Return Function

Seperti telah kita bahas dalam materi sebelumnya, *function* dalam JavaScript adalah sebuah **tipe data** sama seperti `Object,` `String`,`Array`, dan `Number`. 

Karena itu kita bisa membuat *function* yang memiliki nilai balik berupa sebuah *function*.

```javascript
function fn_A() {
    console.log('Hello');
    return function() {
        console.log('World');
    }
}

var myFunc = fn_A(); //Hello

//myFunc sekarang berisi function yang //dikirim kembali oleh fn_A 
myFunc(); //output: World
```

<a name="closure"></a>
## Closure

`Closure` adalah konsep yang sedikit sulit dipahami karena tidak ada penjelasan formal dalam spesifikasi JavaScript yang dengan gamblang mendeskripsikannya.

Pada dasarnya, *closure* adalah mekanisme untuk mengubah *scope* sebuah *variabel* atau *function* pada saat eksekusi.

Perhatikan contoh berikut:

```javascript
function fn_A() {
    var b = 'hello';
    //closure
    return function() {
        return b;
    }
}
//simpan hasil eksekusi fn_A sebagai variabel 
//fn_B di global space
var fn_B = fn_A();
//fn_B sekarang memiliki akses ke
//variabel b dalam scope fn_A
console.log(fn_B()); //hello

console.log(b); //undefined
```
Kalau kita ketikkan perintah `fn_B` (tanpa tanda kurung di belakangnya) dalam konsol, kita bisa melihat struktur `fn_B` seperti di bawah ini yang berarti `fn_B` tetap berada dalam global scope.

Tentu timbul pertanyaan, kenapa `fn_B` dalam global scope memiliki akses ke variabel `b` dalam scope `fn_A`.

Padahal kalau kita lihat dalam contoh kode di atas, baris terakhir akan menghasilkan pesan `undefined` yang berarti `b` tidak dikenali dalam *global scope*.

```console
Output:

hello

/index.js:15
console.log(b); //undefined
            ^

ReferenceError: b is not defined
    at Object.<anonymous> (/index.js:15:13)
    at Module._compile (node:internal/modules/cjs/loader:1103:14)
    at Object.Module._extensions..js (node:internal/modules/cjs/loader:1157:10)
    at Module.load (node:internal/modules/cjs/loader:981:32)
    at Function.Module._load (node:internal/modules/cjs/loader:822:12)
    at Function.executeUserEntryPoint [as runMain] (node:internal/modules/run_main:77:12)
    at node:internal/main/run_main_module:17:47
```
Dalam contoh di atas, `fn_B` memiliki akses ke variabel `b` karena function `fn_A` menciptakan sebuah *closure* pada saat dieksekusi.

*Closure* tersebut memiliki referensi permanen terhadap variabel` b` dan tetap ada bahkan setelah `fn_A` selesai dieksekusi.

Contoh kode di atas juga bisa kita ubah sehingga `fn_A` langsung membuat *closure* dan menyimpannya sebagai *fn_B* seperti di bawah ini.

```javascript
var fn_B;

function fn_A() {
    var b = 'hello';
    //buat closure & simpan sebagai fn_B
    fn_B = function() {
        return b;
    }
};

fn_A();
console.log(fn_B()); //hello
```
Dari contoh di atas, jelas *closure* adalah fitur yang sangat bermanfaat karena fitur ini memungkinkan kita mengatur *scope* sebuah *function* sesuai kebutuhan.

Hanya perlu kita ingat, *closure* membuat kode kita kurang *readable* karena perubahan *scope* terjadi di belakang layar.

Jadi kita perlu hati-hati dalam menggunakannya dan sebaiknya semua pemakaian *closure* diberi komentar yang cukup.

Di bawah ini contoh kode di mana *closure* menimbulkan masalah kalau kita tidak cermat. 

Misalkan kita ingin membuat sebuah `array` berisi *closure* yang merekam `nilai variabel i` pada saat *closure* tersebut dibuat.

```javascript
function fn() {
    var a = [];
    var i;
    for (i = 0; i < 3; i++) {
        //buat closure & simpan dalam array
        a[i] = function() {
            return i;
        }
    }

    return a;
}

var myArray = fn();
console.log(myArray[0]()); //3
console.log(myArray[1]()); //3
console.log(myArray[2]()); //3
```
```console
Output:

3
3
3
```
Kita lihat hasil eksekusi closure dalam `myArray` di tiga baris terakhir semua menghasilkan nilai `3,` bukan **0,1,2** seperti yang kita harapkan. 

 Apa yang terjadi di sini adalah akibat *closure* berisi referensi ke variabel `i` dan bukan nilai sebenarnya.
 
 Pada saat `fn_A` selesai di eksekusi nilai variabel `i` adalah `3` jadi nilai inilah yang dikembalikan oleh semua *closure* pada saat mereka dieksekusi.

**Bug** tersebut bisa kita perbaiki dengan menggunakan *closure* tambahan sehingga kode menjadi seperti berikut ini di mana kita mengirim variabel` i` sebagai argumen ke sebuah *self-invoking function* yang kemudian membuat closure.

Closure yang dihasilkan tidak memiliki referensi langsung ke `i` tetapi memiliki referensi ke `x` yang nilainya sama dengan `i` pada saat *self-invoking function* dieksekusi.

```javascript
function fn() {
    var a = [];
    var i;
    for (i = 0; i < 3; i++) {
        //buat closure & simpan dalam array
        a[i] = (function(x) {

            return function() {

                return x;

            };
        }(i)); //kirim i sebagai argumen
    }

    return a;
}

var myArray = fn();
console.log(myArray[0]()); //0
console.log(myArray[1]()); //1
console.log(myArray[2]()); //2
```
`RUN` dan lihat Hasil eksekusi kode di atas.

Contoh pemakaian *closure* yang berikutnya adalah dalam membuat *global function* yang memiliki akses ke sebuah *local variable*.

Dengan kata lain, kita menyembunyikan sebuah variabel dan kita ingin variabel tersebut hanya bisa diakses melalui *global function* yang ditentukan, misalnya untuk keperluan validasi.

Dalam contoh ini, variabel `name` hanya bisa diubah melalui function `setName()` dan nilainya harus berupa `string`.

```javascript
//global function (getter & setter)
var getName, setName;

(function() {

        //variabel lokal, tidak bisa diakses langsung var name = 'boss';

        //closure untuk mengakses local variable getName = function(){
        return name;
    }; setName = function(value) {
        //name harus berupa string
        if (typeof value == 'string') {
            name = value;
        }
    };

}());

console.log(getName()); //boss

setName('bob');
console.log(getName()); //bob

setName(123);

//name tidak berubah karena 123 bukan string 
console.log(getName());//bob
```