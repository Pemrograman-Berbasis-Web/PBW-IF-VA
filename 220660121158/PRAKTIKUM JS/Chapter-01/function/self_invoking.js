// Self-invoking function adalah function yang mengeksekusi dirinya sendiri segera pada saat kode function tersebut selesai dibaca oleh JavaScript engine.
(function () {
    console.log("self-invoking function");
  })();
  
  //self-invoking function dengan parameter
  (function (name) {
    console.log("halo," + name);
  })("Teman-teman Semester V - Fakultas Teknologi Informasi");