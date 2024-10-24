var Car = function() {

    this.brand = 'Honda';
    this.type = 'jazz';
    this.year = 2011;

    //private
    var odometer = 0;

    this.drive = function() {
        odometer++;
        return 'driving';
    }

    this.stop = function() {
        brake();
        return 'stopped';
    };

    this.getOdo = function() {
        return odometer;
    }
    //private
    function brake() {
        console.log('braking');
    }
};

//buat turunan Car
var Tank = function() {
    this.fire = function() {
        return 'firing';
    }
};
//1. Set objek Car sebagai prototype
Tank.prototype = new Car();
//2. Reset constructor
Tank.prototype.constructor = Car;

//TESTING

var myTank = new Tank();
myTank.brand = "Abrams"
myTank.type = "Main battle tank";
console.log(myTank.brand); //Abrams 
console.log(myTank.type);//Main battle tank //function yang diwarisi oleh Tank dari Car 
console.log(myTank.getOdo());//0 
console.log(myTank.drive());//driving 
console.log(myTank.stop());//braking,stopped 
console.log(myTank.getOdo());//1

//function yang hanya ada di Tank, tidak ada di Car 
console.log(myTank.fire());//firing