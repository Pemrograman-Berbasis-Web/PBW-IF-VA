// Membuat objek Car dengan properti brand, type, dan year
var Car = {
    brand: "honda",
    type: "jazz",
    year: 2011,
    odometer: 100000, // Menambah properti odometer yang mulai dari 100000
    drive: function () {
      console.log("driving");
  
      // Object tidak memiliki scope-chain, jadi kita perlu menggunakan 'this'
      // sebagai referensi ke objek ini sendiri untuk memperbarui odometer
      this.odometer++;
    },
    stop: function () {
      console.log("stopped");
    },
  };
  
  // Menampilkan objek Car yang telah dibuat
  console.log(Car);
  
  // Memperbarui properti brand dan type objek Car
  Car.brand = "Toyota";
  Car.type = "Fortuner";
  
  // Menghapus properti year dari objek Car
  delete Car.year;
  
  // Menampilkan objek Car setelah perubahan
  console.log(Car);
  
  // Menggunakan metode drive dan stop pada objek Car
  Car.drive(); // driving
  Car.stop(); // stopped
  
  // Menampilkan nilai odometer setelah drive dijalankan
  console.log(Car.odometer); // 100001