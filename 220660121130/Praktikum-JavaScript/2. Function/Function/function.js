function sum(a, b) {
  //signature, nama = sum, parameter = a & b
  return a + b;
  //body
}

//eksekusi function, tampilkan hasilnya di console
console.log(sum(1, 2)); //3

//Sebuah function bisa menjadi bagian (child) dari function lain.

function getCircleArea(r) {
  function pi_r() {
    return Math.PI * r;
  }

  return 2 * pi_r();
}
