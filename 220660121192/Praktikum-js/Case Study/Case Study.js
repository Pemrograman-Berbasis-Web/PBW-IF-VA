// Fungsi untuk menghasilkan warna acak
function generateRandomColor() {
    var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
    return randomColor;
}

// Mengubah warna latar belakang halaman secara acak
function changeBackgroundColor() {
    document.body.style.backgroundColor = generateRandomColor();
}

// Memanggil fungsi changeBackgroundColor saat halaman dimuat ulang
window.onload = function() {
    changeBackgroundColor();
};

// Menampilkan pesan sambutan
function showWelcomeMessage() {
    alert("Selamat datang di portofolio saya! Saya adalah seorang pengembang web yang penuh semangat.");
}

window.onload = function() {
    changeBackgroundColor();
    showWelcomeMessage(); // Panggil fungsi pesan sambutan
    displayProjects();
    displayExperience();
};