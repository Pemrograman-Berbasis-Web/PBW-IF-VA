function fn_A() {
    console.log("Hello");
    return function () {
      console.log("World");
    };
  }
  
  var myFunc = fn_A(); //Hello
  
  //myFunc sekarang berisi function yang //dikirim kembali oleh fn_A
  myFunc(); //output: World