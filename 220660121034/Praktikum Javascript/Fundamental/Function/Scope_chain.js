var x = 100;

function fn_A() {
    var y = 50;

    function fn_B() {
        var z = 200;

        function fn_C() {
            var sum = x + y + z;
            console.log('sum = ' + sum)
        }

        function fn_D() {

            var total = sum * 0.5; //ERROR!
            console.log('total = ' + total)
        }

        fn_C();
        fn_D();
    }

    fn_B();
}
fn_A();