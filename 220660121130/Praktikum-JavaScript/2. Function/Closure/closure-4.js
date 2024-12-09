// Dalam contoh ini, variabel name hanya bisa diubah melalui
//function setName() dan nilainya harus berupa string.

//global function (getter & setter)
var getName, setName;

(function () {
  //variabel lokal, tidak bisa diakses langsung
  var name = "boss";

  //closure untuk mengakses local variable
  getName = function () {
    return name;
  };
  setName = function (value) {
    //name harus berupa string
    if (typeof value == "string") {
      name = value;
    }
  };
})();

console.log(getName()); //boss

setName("bob");
console.log(getName()); //bob

setName(123);

//name tidak berubah karena 123 bukan string
console.log(getName()); //bob
