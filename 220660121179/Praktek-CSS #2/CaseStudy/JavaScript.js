// Set default mode (tema gelap)
let isDarkTheme = true;
document.body.classList.add('dark-theme'); // Set default tema gelap

// Toggle theme when clicking anywhere on the page
document.body.addEventListener('click', () => {
    if (isDarkTheme) {
        // Ubah ke tema terang
        document.body.classList.remove('dark-theme');
        document.body.classList.add('light-theme');
        isDarkTheme = false;
    } else {
        // Ubah ke tema gelap
        document.body.classList.remove('light-theme');
        document.body.classList.add('dark-theme');
        isDarkTheme = true;
    }
});
