// 1. Alert message ketika halaman dimuat
window.onload = function() {
    alert("Welcome to my personal portfolio!");
};

// 2. Smooth Scrolling untuk Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    });
});

// 3. Theme Switcher (mode terang dan gelap)
const themeToggleBtn = document.createElement('button');
themeToggleBtn.innerHTML = "🌞"; // Mulai dengan ikon matahari
themeToggleBtn.className = "theme-toggle-btn";
document.body.prepend(themeToggleBtn);

let darkTheme = false;

themeToggleBtn.addEventListener("click", () => {
    darkTheme = !darkTheme;
    document.body.classList.toggle("dark-theme", darkTheme);
    themeToggleBtn.innerHTML = darkTheme ? "🌙" : "🌞"; // Ganti ikon sesuai mode
});

// 4. Hover Effect untuk Profile Image
const profileImg = document.querySelector(".profile-img");

if (profileImg) {
    profileImg.addEventListener("mouseover", () => {
        profileImg.style.transform = "scale(1.1)";
        profileImg.style.transition = "transform 0.3s ease-in-out";
    });

    profileImg.addEventListener("mouseleave", () => {
        profileImg.style.transform = "scale(1)";
    });
}

// 5. Animasi Klik untuk Audio
const audioElement = document.querySelector('.audio-section audio');
if (audioElement) {
    audioElement.addEventListener('click', function() {
        this.classList.add('playing'); // Menambah class saat audio diputar
        setTimeout(() => {
            this.classList.remove('playing'); // Menghapus class setelah durasi animasi selesai
        }, 300); // Durasi animasi
    });
}

// 6. Animasi Klik untuk Video
const videoElement = document.querySelector('.video-section iframe');
if (videoElement) {
    videoElement.addEventListener('click', function() {
        this.classList.add('playing'); // Menambah class saat video diputar
        setTimeout(() => {
            this.classList.remove('playing'); // Menghapus class setelah durasi animasi selesai
        }, 300); // Durasi animasi
    });
}
