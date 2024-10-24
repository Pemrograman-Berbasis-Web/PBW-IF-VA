var kecilSekali = -Infinity;
var besarSekali = Infinity;

//perkalian data numerik dengan string //menghasilkan NaN
var x = 10 * "20";
console.log(x);

//operasi numerik yang melibatkan NaN //akan menghasilkan NaN juga
var y = 10 * 10 + NaN;
console.log(y);

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

console.log(b); //1

var i = 1;
console.log(i++ == 1); //true
console.log(i); //2

var i = 1;
console.log(++i == 1); //false
console.log(i); //2

var i = 1;
console.log(i-- == 0); //false
console.log(i); //0

var i = 1;
console.log(--i == 0); //true
console.log(i); //0
