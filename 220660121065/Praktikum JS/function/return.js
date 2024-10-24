function fn_A() {
    console.log('Hello');
    return function() {
        console.log('World');
    }
}

var myFunc = fn_A(); //Hello


myFunc(); //output: World