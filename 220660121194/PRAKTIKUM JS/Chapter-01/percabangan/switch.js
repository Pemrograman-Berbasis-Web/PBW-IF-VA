function checkType(n) {
    console.log("-------");
    var status;
    var t = typeof n;
  
    switch (t) {
      case "string":
        status = "anda memasukkan string";
        break;
      case "number":
        status = "anda memasukkan angka";
        break;
      default:
        //jika t bukan string ataupun number
        status = "anda memasukkan object";
    }
    console.log(status);
  }
  
  checkType("a"); //anda memasukkan string
  checkType(100); //anda memasukkan angka
  checkType("100"); //anda memasukkan string
  checkType(null); //anda memasukkan object
  checkType(undefined); //anda memasukkan object
  checkType([1, 2, 3]); //anda memasukkan object