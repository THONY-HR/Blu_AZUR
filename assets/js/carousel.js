const carousel = document.querySelector('.carousel');
const nextBtn = document.querySelector('.carousel-next');
const images = document.querySelectorAll('.carousel img');
let currentIndex = 0;

nextBtn.addEventListener('click', () => {
    // Retirer active de l'image actuelle
    images[currentIndex].classList.remove('active');

    // Passer à l'image suivante
    currentIndex = (currentIndex + 1) % images.length;

    // Ajouter active à la nouvelle image
    images[currentIndex].classList.add('active');

    // Décaler le carousel pour montrer l'image active
    const offset = currentIndex * (200 + 15); // largeur petite + margin
    carousel.style.transform = `translateX(-${offset}px)`;
});
