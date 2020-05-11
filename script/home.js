var slideIndex = 0;
var auto;

function autoSlide() {
  showSlides(++slideIndex);
  auto = setTimeout(autoSlide, 5000);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
  clearTimeout(auto);
}

function showSlides(n) {
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  slideIndex = (n % slides.length != 0) ? (n % slides.length) : slides.length;
  console.log(n + " " + slideIndex);
  for (var i=0; i < slides.length; ++i)
    slides[i].style.display = "none";
  for (var i=0; i < dots.length; ++i)
    dots[i].className = dots[i].className.replace(" active", "");
  slides[slideIndex - 1].style.display = "flex";
  dots[slideIndex - 1].className += " active";
}
