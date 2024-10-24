
//for
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


//for in
// var person = {
//     'name': 'boss',
//     'age': 40,
//     'sex': 'male'
// }

// var message;

// for (var attr in person) {

//     message = 'atribut ' + attr + ' berisi data ' + person[attr];
//     console.log(message);
// }

//while
// var a = [];
// var i = 0;

// while (i++ < 4) {
//     a.push(i);
// };

// console.log(a); //0,1,2,3

//do while

// var b = [];

// var i = 5;
// while (i < 4) {
//     b.push(i);
//     i++;
// }

// //b tidak memiliki elemen (kosong) karena blok kode tidak pernah dieksekusi
// console.log(b); //[]

// var a = [];

// var i = 5;

// do {
//     a.push(i);
//     i++;
// } while (i < 4);

// //a memiliki satu elemen karena blok kode //dieksekusi minimal satu kali 
// console.log(a); //[5]