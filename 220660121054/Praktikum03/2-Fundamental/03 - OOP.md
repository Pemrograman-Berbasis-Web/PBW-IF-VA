# OOP

- [OOP](#oop)
  - [Introduksi](#introduksi)
  - [Object Properties \& Methods](#object-properties--methods)
  - [Constructor Function](#constructor-function)
  - [Inheritance](#inheritance)


## Introduksi
JavaScript adalah bahasa yang unik. Di satu sisi bahasa ini memiliki karakteristik bahasa *functional* di mana function adalah *first-class object*.

Di sisi lain, JavaScript mendukung konsep *OOP* yaitu turunan (*inheritance*) dalam bentuk *prototype* yang dikenal dengan istilah *prototypal inheritance*. 

Dalam bab ini kita akan belajar mengenai *implementasi OOP* dalam JavaScript.

## Object Properties & Methods
Kita bisa membuat objek baru di luar yang sudah ada (*built-in*) dalam JavaScript dengan menggunakan notasi *object-literal* atau function.

Sebagai contoh, misalnya kita ingin membuat *tipe data Car* dengan notasi *object-literal*.

Semua key dalam object ini disebut properti dari objek Car.

Setelah objek ini dibuat kita bisa mengubah, menambah dan menghapus properti.

```javascript
// Membuat objek Car dengan properti brand, type, dan year
var Car = {
    brand: 'honda',
    type: 'jazz',
    year: 2011
};

console.log(Car);

// Memperbarui properti objek yang telah dibuat
Car.brand = 'Toyota';
Car.type = 'Fortuner';

// Menghapus properti year
delete Car.year;

// Menambah properti baru
Car.odometer = 100000;

console.log(Car);
```
`RUN` dan lihat Hasil eksekusi kode di atas.

Objek bisa memiliki properti berupa *function*. Dalam konteks OOP, properti ini disebut sebagai *method*.

```javascript
var car = {
    brand: 'honda',
    type: 'jazz',
    year: 2011,
    drive: function() {
        console.log('driving');

        //object tidak memiliki scope-chain //jadi kita perlu menggunakan 'this' //sebagai referensi ke objek ini sendiri 
        this.odometer++;
    },
    stop: function() {
        console.log('stopped');
    }
};

car.drive(); //driving
car.stop(); //stopped
console.log(car.odometer); //100001
```
`RUN` dan lihat Hasil eksekusi kode di atas

## Constructor Function
Dari contoh sebelumnya bisa kita lihat bahwa semua properti dari objek yang dibuat dengan notasi object-literal tidak memiliki proteksi yang dikenal dengan nama *access-modifier* dalam bahasa lain.

Hal ini tidak menjadi masalah kalau objek yang kita buat adalah objek yang hanya kita gunakan untuk menyimpan struktur data sederhana. Untuk objek yang lebih kompleks hal ini sangat tidak disarankan, terutama jika objek yang bersangkutan diakses di banyak bagian program yang lain.

Selain itu, dengan menggunakan *object-literal*, kita tidak bisa membuat lebih dari satu objek tanpa melakukan *copy-paste*. Tentu sangat merepotkan jika suatu waktu kita ingin menambah atau menghapus properti, kita harus melakukannya berulang kali sesuai jumlah objek yang ada.

Sebagai solusinya, kita bisa membuat class menggunakan *constructor function*. *Class* adalah cetak biru dari sebuah objek. Kita bisa membuat banyak objek dari satu class dengan menggunakan keyword `new`.

Di bawah ini contoh implementasinya dalam pembuatan class `Car` dan cara membuat objek dari class ini.

Untuk membuat properti dan *function* yang bisa diakses dari luar objek (public), kita harus menggunakan *keyword* `this`.

```javascript
var Car = function() {

    this.brand = 'Honda';
    this.type = 'jazz';
    this.year = 2011;

    this.drive = function() {
        return 'driving';
    }

    this.stop = function() {
        return 'stopped';
    };

}

//buat objek Car
var car = new Car();
console.log(car.brand); //Honda
console.log(car.type); //jazz
console.log(car.year); //2011
console.log(car.drive()); //driving
console.log(car.stop()); //stopped

//buat objek Car baru
var car2 = new Car();
//ubah propertinya
car2.brand = 'Toyota';
car2.type = 'Fortuner';

console.log(car2.brand); //Toyota
console.log(car2.type); //Fortuner
console.log(car2.year); //2011
console.log(car2.drive()); //driving
console.log(car2.stop()); //stopped
```
`RUN` dan lihat Hasil eksekusi kode di atas..

Kita lihat *constructor function* sangat mempermudah pembuatan banyak objek dari class yang sama. Proses pembuatan objek dikenal dengan nama instansiasi dan objek yang dihasilkan disebut *instance* dari *class* yang bersangkutan.

Masalahnya, dengan cara di atas, objek yang kita buat tetap tidak memiliki proteksi dalam bentuk *private member* ( *variabel dan function*).

Properti objek tetap bisa diubah dengan bebas oleh objek atau kode lain seperti *object literal*. Solusinya adalah :

- Menggunakan keyword *var* untuk *private variable*
- Membuat *function* yang merupakan c*hild-function* bukan properti

Misalkan kita ingin membuat properti `odomete`r sebagai *private property* yang hanya bisa dibaca namun tidak bisa diubah langsung dari luar. Nilai `odometer` hanya bisa berubah pada saat function `drive` dieksekusi.

Perubahan kedua adalah penambahan *private function* `brake()` yang juga tidak bisa diakses langsung dari luar.

Kita tahu dari pembahasan *function* yang lalu, bahwa *child function* tidak bisa diakses dari luar, jadi kita buat `brake` sebagai *child function* di dalam *constructor*. *Class*` Car` kita ubah seperti berikut:

```javascript
var Car = function() {

    this.brand = 'Honda';
    this.type = 'jazz';
    this.year = 2011;

    //private property, gunakan keyword var, bukan 'this' 
    var odometer = 0;

    //public function
    this.drive = function() {
        odometer++;
        return 'driving';
    }

    this.stop = function() {
        //panggil private function
        brake();
        return 'stopped';
    };

    this.getOdo = function() {
        return odometer;
    }

    //private function, dalam bentuk
    //child function
    function brake() {
        console.log('braking');
    }
};

//TESTING

var car = new Car();
console.log(car.brand); //Honda
console.log(car.type); //jazz
console.log(car.year); //2011

console.log(car.getOdo()); //0 
console.log(car.drive()); //driving 
console.log(car.stop()); //braking, stopped

//setelah drive(), nilai odometer berubah 
console.log(car.getOdo()); //1


//coba ubah langsung odometer
car.odometer = 1000;
//odometer tetap 1
console.log(car.getOdo()); //1
//coba panggil brake()
car.brake(); //!ERROR undefined
```
```console
Output:

Honda
jazz
2011
0
driving
braking
stopped
1
1

/index.js:53
car.brake(); //!ERROR undefined
    ^

TypeError: car.brake is not a function
```

## Inheritance
**Inheritance** atau turunan adalah objek yang dibuat berdasarkan objek lain sehingga objek yang turunan tersebut memiliki karakteristik yang serupa dengan objek asalnya.

JavaScript tidak mendukung *inheritance* berdasar class tetapi berdasar objek.

*Class* dalam JavaScript berbentuk *function* dan *function* adalah sebuah objek, jadi pada dasarnya kita membuat turunan dari sebuah objek bukan dari class objek tersebut.

Ini berbeda dengan bahasa lain misalnya Java, PHP, dan ActionScript 3.

Untuk membuat turunan sebuah objek, misalnya objek B sebagai turunan objek A, kita lakukan dua langkah:

1. Mengeset objek A sebagai prototype class B
2. Mereset constructor class B.

Di bawah ini kode untuk membuat class baru yaitu **Tank** sebagai turunan class **Car**.

```javascript
var Car = function() {

    this.brand = 'Honda';
    this.type = 'jazz';
    this.year = 2011;

    //private
    var odometer = 0;

    this.drive = function() {
        odometer++;
        return 'driving';
    }

    this.stop = function() {
        brake();
        return 'stopped';
    };

    this.getOdo = function() {
        return odometer;
    }
    //private
    function brake() {
        console.log('braking');
    }
};

//buat turunan Car
var Tank = function() {
    this.fire = function() {
        return 'firing';
    }
};
//1. Set objek Car sebagai prototype
Tank.prototype = new Car();
//2. Reset constructor
Tank.prototype.constructor = Car;

//TESTING

var myTank = new Tank();
myTank.brand = "Abrams"
myTank.type = "Main battle tank";
console.log(myTank.brand); //Abrams 
console.log(myTank.type);//Main battle tank //function yang diwarisi oleh Tank dari Car 
console.log(myTank.getOdo());//0 
console.log(myTank.drive());//driving 
console.log(myTank.stop());//braking,stopped 
console.log(myTank.getOdo());//1

//function yang hanya ada di Tank, tidak ada di Car 
console.log(myTank.fire());//firing
```

`RUN` dan lihat Hasil eksekusi kode di atas..

> Semoga Anda mendapatkan banyak ilmu dari materi ini! 