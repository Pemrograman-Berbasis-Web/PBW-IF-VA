var list = ["a", "b", "c"];
var message;
for (var i in list) {
  message = "indeks " + i + " berisi data " + list[i];
  console.log(message);
}