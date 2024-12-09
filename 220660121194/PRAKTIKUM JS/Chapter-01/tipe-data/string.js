//dengan tanda kutip ganda
var brand = "Honda";
//dengan tanda kutip tunggal
var brand = "Honda";

//angka yang dilingkupi tanda kutip berubah menjadi string (teks) jadi kita tidak bisa melakukan operasi matematika
var n = "123456";

//penjumlahan string dengan number menyebabkan number dikonversi menjadi string hasilnya adalah penggabungan string
var j = "" + 123456; //hasilnya sama dengan string '123456'

//teks yang berisi tanda kutip tunggal harus diawali dan diakhiri dengan kutip ganda
var error = "Can't find user";

//atau menggunakan escape character "\"
var error = "Can't find user";

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