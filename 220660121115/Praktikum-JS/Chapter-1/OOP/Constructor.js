var Car = function() {

    this.brand = 'Mazda';
    this.type = 'RX-7';
    this.year = 2016;

    this.drive = function() {
        return 'driving';
    }

    this.stop = function() {
        return 'stopped';
    };

}

//buat objek Car
var car = new Car();
console.log(car.brand); 
console.log(car.type); 
console.log(car.year); 
console.log(car.drive()); 
console.log(car.stop()); 

//buat objek Car baru
var car2 = new Car();
//ubah propertinya
car2.brand = 'Toyota';
car2.type = 'Fortuner';

console.log(car2.brand); 
console.log(car2.type); 
console.log(car2.year); 
console.log(car2.drive()); 
console.log(car2.stop()); 