var Car = function() {

    this.brand = 'Honda';
    this.type = 'jazz';
    this.year = 2011;

    this.drive = function() {
        return 'driving';
    }

    this.stop = function() {
        return 'stopped';
    };

}

//buat objek Car
var car = new Car();
console.log(car.brand); //Honda
console.log(car.type); //jazz
console.log(car.year); //2011
console.log(car.drive()); //driving
console.log(car.stop()); //stopped

//buat objek Car baru
var car2 = new Car();
//ubah propertinya
car2.brand = 'Toyota';
car2.type = 'Fortuner';

console.log(car2.brand); //Toyota
console.log(car2.type); //Fortuner
console.log(car2.year); //2011
console.log(car2.drive()); //driving
console.log(car2.stop()); //stopped