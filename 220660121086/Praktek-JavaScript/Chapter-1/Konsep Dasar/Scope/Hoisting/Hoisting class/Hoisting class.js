// Hoisting class
const myCar = new Car();
class Car {
  constructor() {
    this.make = 'Toyota';
  }
  displayMake() {
    console.log(this.make);
  }
}