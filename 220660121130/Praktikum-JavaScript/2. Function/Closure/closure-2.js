var fn_B;

function fn_A() {
  var b = "hello";
  //buat closure & simpan sebagai fn_B
  fn_B = function () {
    return b;
  };
}

fn_A();
console.log(fn_B()); //hello
