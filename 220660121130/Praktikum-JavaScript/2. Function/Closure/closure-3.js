// Closure yang dihasilkan tidak memiliki referensi langsung ke i
// tetapi memiliki referensi ke x yang nilainya sama dengan i pada saat self-invoking function dieksekusi.

function fn() {
  var a = [];
  var i;
  for (i = 0; i < 3; i++) {
    //buat closure & simpan dalam array
    a[i] = (function (x) {
      return function () {
        return x;
      };
    })(i); //kirim i sebagai argumen
  }

  return a;
}

var myArray = fn();
console.log(myArray[0]()); //0
console.log(myArray[1]()); //1
console.log(myArray[2]()); //2
