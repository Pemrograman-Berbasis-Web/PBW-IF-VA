var a = 5;

function check(n) {
    console.log('----------');

    if (n > 0) {
        console.log(n + ' lebih besar dari 0');

    } else {
        console.log(n + ' tidak lebih besar dari 0')
    };

    if (n > a) {
        console.log(n + ' lebih besar dari ' + a);

    } else if (n < a) {
        console.log(n + ' kurang dari ' + a);

    } else {
        console.log(n + ' sama dengan ' + a);
    }
}


check(1);
check(10);
check(-1);
check(5);