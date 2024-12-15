var a = true;
var b = true;

console.log(a && b);//true

a = false;
console.log(a && b);//false

a = b = false;
console.log(a && b);//false

a = b = true;
var c = false;
console.log(a && b && c);//false