document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");

  // Fungsi untuk mengubah warna latar belakang
  function changeBackground() {
    const gradients = [
      "radial-gradient(circle, #ff0074, #001b59)",
      "radial-gradient(circle, #ff0000, #006600)",
      "radial-gradient(circle, #66ff00, #ff8800)"
    ];

    // Pilih gradien acak
    const randomGradient = gradients[Math.floor(Math.random() * gradients.length)];
    body.style.background = randomGradient;
  }

  // Perbarui latar belakang setiap beberapa detik
  setInterval(changeBackground, 5000);
  changeBackground();
});
