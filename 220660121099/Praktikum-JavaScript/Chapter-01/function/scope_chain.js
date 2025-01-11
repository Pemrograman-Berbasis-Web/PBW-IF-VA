// var n = 10;
// var fn_A = function() {
//     console.log(this); //window
//     console.log(n); //10
// }

var fn = function () {
    var a = 10;
  
    function fn_test() {
      var b = 20;
      console.log("#fn_test");
      console.log(a);
    }
  
    function fn_test2() {
      console.log("#fn_test2");
      //karena function ini tidak punya variabel a
  
      //yang dipakai adalah variabel a milik root function
      console.log(a);
  
      function fn_test2_child() {
        console.log("##fn_test2_child");
        console.log("a");
        //a bisa diakses karena a berada dalam //scope chain
  
        console.log(a); //10
        console.log("##call fn_test()");
        //fn_test() ada dalam scope chain
        //sehingga bisa diakses juga
        fn_test();
      }
  
      fn_test2_child();
    }
  
    fn_test();
    fn_test2();
  
    console.log("fn");
  
    //b tidak dikenali oleh root function
    console.log(b); //undefined
  };
  
  //jalankan function fn()
  fn();