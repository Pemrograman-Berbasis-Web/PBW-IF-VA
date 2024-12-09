var a = {
    name: "bob",
    die: function () {},
  };
  
  console.log(a.hasOwnProperty("name")); //true console.log(a.hasOwnProperty('die'));//true console.log(a.hasOwnProperty('kill'));//false
  
  var b = 100;
  var c = "100";
  var d = function () {};
  
  console.log(typeof a); //object
  
  console.log(typeof b); //number
  
  console.log(typeof c); //string
  
  console.log(typeof d); //function
  
  var myClass = function () {
    var name;
  };
  
  var myObject = new myClass();
  
  console.log(myObject instanceof myClass); //true