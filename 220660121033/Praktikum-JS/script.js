// Ambil tombol dan body
const toggleButton = document.getElementById('toggle-dark-mode');
const body = document.body;

// Cek jika pengguna sudah mengaktifkan mode malam sebelumnya
if (localStorage.getItem('dark-mode') === 'enabled') {
    body.classList.add('dark-mode');
    toggleButton.textContent = 'Mode Siang';
}

// Tambahkan event listener untuk klik tombol
toggleButton.addEventListener('click', function() {
    // Tambah/hapus class 'dark-mode' pada body
    body.classList.toggle('dark-mode');

    // Simpan status mode malam ke localStorage
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('dark-mode', 'enabled');
        toggleButton.textContent = 'Mode Siang';
    } else {
        localStorage.setItem('dark-mode', 'disabled');
        toggleButton.textContent = 'Mode Malam';
    }
});
// Menambahkan random color
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