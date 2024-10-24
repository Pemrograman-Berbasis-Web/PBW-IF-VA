// Statement
// statement untuk mendefinisakan variable
const umur = 12;
// statement untuk menampilkan alert di browser
alert("Buku Saku JavaScript");
// statement untuk menulis sesuatu ke console browser
console.log("Selamat datang");
// statement untuk pengecekan kondisi
if (umur < 12) {
  console.log("Kamu masih kecil");
} else {
  console.log("Kamu sudah besar");
}

// Comments
/*
  ini adalah untuk check kondisi status usia berdasarkan umur
  dari seseorang.
    
  Outputnya hanya ada 2 yatu *kecil* atau *besar* saja
*/
if (umur < 12) {
  console.log("Kamu masih kecil");
} else {
  console.log("Kamu sudah besar");
}

// check kondisi cuaca
if (cuaca === "hujan") {
  console.log("Dirumah sajalah");
}

// contoh comment yang lebih advance, untuk dokumentasi internal

/**
 * fungsi untuk menghitung luas persegi
 *
 * @param {number} panjang, panjang dari persegi
 * @param {number} lebar, lebar dari persegi
 * @return {number} luas persegi
 */
function luasPersegi(panjang, lebar) {
  return panjang * lebar;
}