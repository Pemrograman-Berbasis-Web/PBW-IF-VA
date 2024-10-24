// Hoisting class
const myCar = new Car();
class Car {
  constructor() {
    this.make = 'Ford';
  }
  displayMake() {
    console.log(this.make);
  }
}