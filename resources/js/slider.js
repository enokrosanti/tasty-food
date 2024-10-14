const slider = document.getElementById('slider');
const slides = document.querySelectorAll('#slider > div');
let currentSlide = 0;

document.getElementById('next').addEventListener('click', () => {
  currentSlide = (currentSlide + 1) % slides.length;
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
});

document.getElementById('prev').addEventListener('click', () => {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
});
