// Hoisting
// Hoisting Variable
var age; // di hoisting kesini
console.log(age);
age = "Budi";
// Output: undefined

// Hoisting Function
sayHello();

function sayHello() {
  console.log("Hello!");
}

// Hoisting Class
const myCar = new Car();
class Car {
  constructor() {
    this.make = "Toyota";
  }
  displayMake() {
    console.log(this.make);
  }
}