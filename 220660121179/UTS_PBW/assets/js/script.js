// Toggle Dark Mode
document.getElementById('dark-mode-toggle').addEventListener('click', function () {
  document.body.classList.toggle('dark');
  const isDarkMode = document.body.classList.contains('dark');
  localStorage.setItem('dark_mode', isDarkMode ? 'true' : 'false');

  // Jika dark mode aktif, tema tidak bisa diganti
  if (isDarkMode) {
      document.getElementById('theme-container').style.display = 'none'; // Sembunyikan tema
  } else {
      document.getElementById('theme-container').style.display = 'block'; // Tampilkan tema
  }
});

// Terapkan mode gelap saat halaman dimuat
if (localStorage.getItem('dark_mode') === 'true') {
  document.body.classList.add('dark');
  document.getElementById('theme-container').style.display = 'none'; // Sembunyikan tema saat dark mode aktif
} else {
  document.getElementById('theme-container').style.display = 'block'; // Tampilkan tema jika dark mode tidak aktif
}

// Pilihan tema warna
const themeSelector = document.getElementById('theme-color');
themeSelector.addEventListener('change', function () {
  const theme = this.value;
  document.body.classList.remove('red-theme', 'blue-theme', 'green-theme', 'purple-theme'); // Hapus kelas tema sebelumnya
  if (theme !== 'default') {
      document.body.classList.add(`${theme}-theme`);
  }
  localStorage.setItem('theme', theme);
});

// Terapkan tema yang tersimpan saat halaman dimuat
const savedTheme = localStorage.getItem('theme');
if (savedTheme && savedTheme !== 'default') {
  document.body.classList.add(`${savedTheme}-theme`);
}
