var a = [];

// Mengisi array a dengan angka 0-9
for (var i = 0; i < 10; i++) {
    a.push(i);
}

console.log(a); // Menampilkan array a
console.log('panjang a = ' + a.length + " elemen"); // Menampilkan panjang array a

// Gandakan nilai a dan simpan hasilnya dalam array b
var b = []; // Pastikan b dideklarasikan sebelum digunakan
for (var j = 0; j < a.length; j++) {
    b.push(a[j] * 2);
}

console.log(b); // Menampilkan array b

// Cari data bernilai 5 dalam array a dan hentikan pencarian jika data ditemukan
var c;

// Sintaks alternatif, lebih efisien karena panjang array a disimpan dalam variabel len
for (var k = 0, len = a.length; k < len; k++) {
    if (a[k] === 5) {
        c = a[k];
        // Data ditemukan, hentikan loop dan keluar dari loop
        break; // Menambahkan break untuk menghentikan loop
    }
}

// Perhatikan nilai k terakhir tidak sama dengan panjang array a
console.log('data: ' + c + ' ditemukan di indeks ' + k);
