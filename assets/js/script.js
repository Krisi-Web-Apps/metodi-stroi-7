// starts navbar
const menuNavbarButton = document.querySelector("[data-menu-button]");

menuNavbarButton.addEventListener("click", () => {
  document.querySelector("[data-right-items]").style.transform = "translateX(0)";
});

// ends navbar

// starts slider
const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
let currentIndex = 0;

function goToSlide(index) {
  if (index < 0 || index >= slides.length) {
    index = 0;
  }

  const slideWidth = slides[0].clientWidth;

  currentIndex = index;
  const translateX = -currentIndex * slideWidth;
  slider.style.transform = `translateX(${translateX}px)`;
}

function nextSlide() {
  goToSlide(currentIndex + 1);
}

function prevSlide() {
  goToSlide(currentIndex - 1);
}

setInterval(nextSlide, 3000);
// ends slider

// starts accordion
const sections = document.querySelectorAll(".section");

sections.forEach((section) => {
  section.addEventListener("click", () => {
    section.classList.toggle("active");
    const content = section.querySelector(".section-content");
    const icon = section.querySelector("span");
    if (section.classList.contains("active")) {
      content.style.display = "block";
      icon.textContent = "-";
    } else {
      content.style.display = "none";
      icon.textContent = "+";
    }
  });
});
// ends accordion

// starts scroll
const primaryNavbar = document.querySelector("[data-primary-navbar]");

window.addEventListener("scroll", () => {
  if (window.scrollY > 40) {
    primaryNavbar.classList.add("fixed");
  } else {
    primaryNavbar.classList.remove("fixed");
  }
});
// ends scroll
