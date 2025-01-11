// Pada dasarnya, closure adalah mekanisme untuk mengubah scope sebuah variabel atau function pada saat eksekusi.
function fn_A() {
    var b = "hello";
    //closure
    return function () {
      return b;
    };
  }
  //simpan hasil eksekusi fn_A sebagai variabel
  //fn_B di global space
  var fn_B = fn_A();
  //fn_B sekarang memiliki akses ke
  //variabel b dalam scope fn_A
  console.log(fn_B()); //hello
  
  console.log(b); //undefined