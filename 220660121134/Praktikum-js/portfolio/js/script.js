// 1. Dynamic Welcome Message
function displayWelcomeMessage() {
  const currentHour = new Date().getHours();
  let message;
  if (currentHour < 12) {
      message = "Selamat Pagi!";
  } else if (currentHour < 18) {
      message = "Selamat Siang!";
  } else {
      message = "Selamat Malam!";
  }
  document.getElementById("welcomeMessage").innerText = message;
}

// 2. Hobby Counter
function countHobbies() {
  const hobbyList = document.querySelectorAll(".hobbies ul li");
  document.getElementById("hobbyCount").innerText = hobbyList.length;
}

// 3. Theme Toggle Button
function toggleTheme() {
  document.body.classList.toggle("dark-theme");
}

// Run the functions when the page loads
window.onload = function() {
  displayWelcomeMessage();
  countHobbies();
};
