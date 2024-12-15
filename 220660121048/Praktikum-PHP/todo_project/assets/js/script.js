document.addEventListener("DOMContentLoaded", () => {
    const body = document.querySelector("body");
    const gradientElement = document.querySelector(".gradient-custom");
  
    // Fungsi untuk mengubah warna latar belakang
    function changeBackground() {
      const gradients = [
        "radial-gradient(50% 123.47% at 50% 50%, #ff0074 0%, #001b59 100%), linear-gradient(121.28deg, #66ff00 0%, #ff8800 100%), linear-gradient(360deg, #9900ff 0%, #ff0e00 100%), radial-gradient(100% 164.72% at 100% 100%, #2100ff 0%, #ff0080 100%), radial-gradient(100% 148.07% at 0% 0%, #00fff5 0%, #ff1500 100%)",
        "radial-gradient(50% 123.47% at 50% 50%, #ff0000 0%, #006600 100%), linear-gradient(121.28deg, #3300ff 0%, #ff0066 100%), linear-gradient(360deg, #6600ff 0%, #ccff00 100%), radial-gradient(100% 164.72% at 100% 100%, #ff6600 0%, #00ffee 100%), radial-gradient(100% 148.07% at 0% 0%, #00ffcc 0%, #6600ff 100%)"
      ];
  
      // Memilih gradien secara acak
      const randomGradient = gradients[Math.floor(Math.random() * gradients.length)];
      gradientElement.style.background = randomGradient;
      gradientElement.style.backgroundBlendMode = "screen, color-dodge, overlay, difference, normal";
    }
  
    // Tambahkan event listener, misalnya saat elemen diklik
    gradientElement.addEventListener("click", changeBackground);
  
    // Inisialisasi gradien saat halaman dimuat
    changeBackground();
  });
  