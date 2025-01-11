function sum(a, b) {
    //signature, nama = sum, parameter = a & b
    return a + b;
    //body
};


//eksekusi function, tampilkan hasilnya di console 
console.log(sum(1,2));//3

var sum = function(a,b){
	return a + b;
};

//nilai balik eksplisit
function fn_A() {
    return undefined;
}

//nilai balik implisit
function fn_B() {

}
function getCircleArea(r) {

    function pi_r() {
        return Math.PI * r;
    };

    return 2 * pi_r();
};