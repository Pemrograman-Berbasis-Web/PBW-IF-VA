// Warna latar belakang acak
function setRandomBackgroundColor() {
    const colors = ["#FFCDD2", "#F8BBD0", "#E1BEE7", "#D1C4E9", "#C5CAE9", "#BBDEFB", "#B3E5FC", "#B2EBF2", "#B2DFDB", "#C8E6C9"];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.body.style.backgroundColor = randomColor;
}

// Notifikasi sambutan
function showWelcomeMessage() {
    alert("Selamat datang di Portofolio Pribadi! Terima kasih telah berkunjung.");
}

// Panggil fungsi saat halaman dimuat
window.onload = function() {
    setRandomBackgroundColor();
    showWelcomeMessage();
};
