const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const slideWidth = slides[0].clientWidth;
let currentIndex = 0;

function goToSlide(index) {
  if (index < 0 || index >= slides.length) {
    return;
  }

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