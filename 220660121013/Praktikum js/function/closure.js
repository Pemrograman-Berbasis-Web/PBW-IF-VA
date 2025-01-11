function fn_A() {
    var b = 'hello';
    //closure
    return function() {
        return b;
    }
}


var fn_B = fn_A();

console.log(fn_B()); //hello

console.log(b); //undefined