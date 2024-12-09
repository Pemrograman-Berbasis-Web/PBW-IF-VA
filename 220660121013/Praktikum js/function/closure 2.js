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

// function fn() {
//     var a = [];
//     var i;
//     for (i = 0; i < 3; i++) {
//         //buat closure & simpan dalam array
//         a[i] = (function(x) {

//             return function() {

//                 return x;

//             };
//         }(i)); //kirim i sebagai argumen
//     }

//     return a;
// }

// var myArray = fn();
// console.log(myArray[0]()); //0
// console.log(myArray[1]()); //1
// console.log(myArray[2]()); //2







// //global function (getter & setter)
// var getName, setName;

// (function() {

//         //variabel lokal, tidak bisa diakses langsung var name = 'boss';

//         //closure untuk mengakses local variable getName = function(){
//         return name;
//     }; setName = function(value) {
//         //name harus berupa string
//         if (typeof value == 'string') {
//             name = value;
//         }
//     };

// }());

// console.log(getName()); //boss

// setName('bob');
// console.log(getName()); //bob

// setName(123);

// //name tidak berubah karena 123 bukan string 
// console.log(getName());//bob