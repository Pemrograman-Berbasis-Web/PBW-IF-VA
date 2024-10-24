var car = {
    brand: 'honda',
    type: 'jazz',
    year: 2011,
    drive: function() {
        console.log('driving');

        //object tidak memiliki scope-chain //jadi kita perlu menggunakan 'this' //sebagai referensi ke objek ini sendiri 
        this.odometer++;
    },
    stop: function() {
        console.log('stopped');
    }
};

car.drive(); //driving
car.stop(); //stopped
console.log(car.odometer); //100001