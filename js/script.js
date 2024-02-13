let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].classList.remove("active");
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");

    setTimeout(showSlides, 3000); // Интервал в 3 секунды
}

// Обработчик события для открытия поп-апа
function openPopup() {
    document.getElementById("videoOverlay").style.display = "block";
}

// Обработчик события для закрытия поп-апа
function closePopup() {
    document.getElementById("videoOverlay").style.display = "none";
}

// start accordion
const acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active__accordion");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.boxShadow = null; // Исправленная строка
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      panel.style.boxShadow = "none"; // Новая строка
    } 
  });
}


// end accordion