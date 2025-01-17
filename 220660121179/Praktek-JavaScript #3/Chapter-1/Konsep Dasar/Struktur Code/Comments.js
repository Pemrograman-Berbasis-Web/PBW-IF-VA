/*
  ini adalah untuk check kondisi status usia berdasarkan umur
  dari seseorang.
    
  Outputnya hanya ada 2 yatu *kecil* atau *besar* saja
*/
if (umur < 12) {
    console.log('Kamu masih kecil');
  } else {
    console.log('Kamu sudah besar');
  }
  
  // check kondisi cuaca
  if (cuaca === 'hujan') {
    console.log('Di rumah aja ah');
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