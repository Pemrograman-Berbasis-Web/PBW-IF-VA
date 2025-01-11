function add(a, b) {
    var sum = a() + b();
    console.log(sum);
}

function fn_A() {
    return 1;
}

function fn_B() {
    return 2;
}

//perhatikan : fn_A dan fn_B tanpa
//tanda kurung di belakangnya karena

//kita ingin mengirim function bukan hasil eksekusinya 
add(fn_A, fn_B);//output: 3

//callback anonim

// function add(a, b) {
//     var sum = a() + b();
//     console.log(sum);
// }

// function fn_A() {
//     return 1;
// }

// //fn_B diganti oleh function anonim
// add(fn_A, function() {
//     return 2;
// });