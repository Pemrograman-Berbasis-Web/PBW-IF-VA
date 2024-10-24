const menu = document.querySelector(".menu i");
const navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  navbar.classList.toggle("active");
};

//Circle Skill

const circles = document.querySelectorAll(".circle");
circles.forEach((element) => {
  var dots = element.getAttribute("data-dots");
  var marked = element.getAttribute("data-percent");
  var percent = Math.floor((dots * marked) / 100);
  var points = "";
  var rotate = 360 / dots;

  for (let i = 0; i < dots; i++) {
    points += `<div class="points" style="--i:${i}; --rot:${rotate}deg;"></div>`;
  }
  element.innerHTML = points;

  const pointsMarked = element.querySelectorAll(".points");
  for (let i = 0; i < percent; i++) {
    pointsMarked[i].classList.add("marked");
  }
});

// mix it up portofolio section
var mixer = mixitup(".portofolio-gallery");
