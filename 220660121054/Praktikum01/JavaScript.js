// 1. Alert message when the page loads
window.onload = function() {
    alert("Welcome to my personal portfolio!");
};

// 2. Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth"
        });
    });
});

// 3. Theme Switcher
const themeToggleBtn = document.createElement('button');
themeToggleBtn.innerHTML = "🌞"; // Start with sun icon
themeToggleBtn.className = "theme-toggle-btn";
document.body.prepend(themeToggleBtn);

let darkTheme = false;

themeToggleBtn.addEventListener("click", () => {
    darkTheme = !darkTheme;
    document.body.classList.toggle("dark-theme", darkTheme);
    themeToggleBtn.innerHTML = darkTheme ? "🌙" : "🌞"; // Toggle icon
});

// 4. Hover Effect for Profile Image
const profileImg = document.querySelector(".profile-img");

if (profileImg) {
    profileImg.addEventListener("mouseover", () => {
        profileImg.style.transform = "scale(1.1)";
        profileImg.style.transition = "transform 0.3s ease-in-out";
    });

    profileImg.addEventListener("mouseleave", () => {
        profileImg.style.transform = "scale(1)";
    });
    document.querySelector('.audio-section audio').addEventListener('click', function() {
        this.classList.add('playing'); // Add a class on click
        setTimeout(() => {
            this.classList.remove('playing'); // Remove the class after the animation duration
        }, 300); // Match this duration with the CSS transition duration
    });
    document.querySelector('.video-section iframe').addEventListener('click', function() {
        this.classList.add('playing'); // Add a class on click
        setTimeout(() => {
            this.classList.remove('playing'); // Remove the class after the animation duration
        }, 300); // Match this duration with the CSS transition duration
    });
        
}


