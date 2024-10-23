function checkType(n) {
    console.log('-------');
    var status;
    
    // Periksa null secara eksplisit
    if (n === null) {
        status = 'anda memasukkan null';
    } else {
        var t = typeof n;

        switch (t) {
            case 'string':
                status = 'anda memasukkan string';
                break;
            case 'number':
                status = 'anda memasukkan angka';
                break;
            default:
                // Jika t bukan string ataupun number
                status = 'anda memasukkan object';
        }
    }
    console.log(status);
}

checkType('a'); //anda memasukkan string
checkType(100); //anda memasukkan angka
checkType('100'); //anda memasukkan string
checkType(null); //anda memasukkan null
checkType(undefined); //anda memasukkan object
checkType([1, 2, 3]); //anda memasukkan object
