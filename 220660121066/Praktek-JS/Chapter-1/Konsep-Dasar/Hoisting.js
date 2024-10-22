// 1. HOISTING VARIABLE
let age = 'Budi';
console.log(age);
// Output: Budi
const score = 70;
console.log(score);
// Output: 70


// 2. HOISTING FUNCTION
sayHello();
function sayHello() {
  console.log('Hello!');
}


// 3. HOISTING CLASS
const myCar = new Car();
class Car {
  constructor() {
    this.make = 'Toyota';
  }
  displayMake() {
    console.log(this.make);
  }
}