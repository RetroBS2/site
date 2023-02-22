const slides = document.querySelectorAll(".slide");
const controls = document.querySelectorAll(".carousel-control");

let index = 0;

setInterval(() => {
  index++;

  if (index > slides.length - 1) {
    index = 0;
  }

  slides.forEach((slide) => {
    slide.classList.remove("active");
  });

  controls.forEach((control) => {
    control.classList.remove("active");
  });

  slides[index].classList.add("active");
  controls[index].classList.add("active");
}, 5000);

controls.forEach((control, controlIndex) => {
  control.addEventListener("click", () => {
    index = controlIndex;

    slides.forEach((slide) => {
      slide.classList.remove("active");
    });

    controls.forEach((control) => {
      control.classList.remove("active");
    });

    slides[index].classList.add("active");
    controls[index].classList.add("active");
  });
});
