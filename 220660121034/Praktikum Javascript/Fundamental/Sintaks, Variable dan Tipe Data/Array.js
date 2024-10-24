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