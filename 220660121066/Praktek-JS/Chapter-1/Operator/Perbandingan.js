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