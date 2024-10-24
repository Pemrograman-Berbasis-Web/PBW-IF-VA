// JavaScript memiliki tiga operator logika yaitu:
// ! : kebalikan (negasi)
// && : logika AND
// || : logika OR

// ! : kebalikan (negasi)
var x = true;
console.log(x); //true
console.log(!x); //false

var y = false;
console.log(!y); //true

// && : logika AND
var a = true;
var b = true;

console.log(a && b); //true

a = false;
console.log(a && b); //false

a = b = false;
console.log(a && b); //false

a = b = true;
var c = false;
console.log(a && b && c); //false

// || : logika OR
var c = true;
var d = true;

console.log(c || d); //true

c = false;
console.log(c || d); //true

c = d = false;
console.log(c || d); //false

d = true;
var e = false;
console.log(c || d || e); //true

//FALSE
var f = true;
var g = false;
var h = false;
var i = true;

console.log(f || (g && !h && !i));
