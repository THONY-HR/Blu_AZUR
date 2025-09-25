// <!--
//     Par:
//         HERINANTENAINA
//         Rantonrinina Anthony
//         +261 34 85 178 51
// -->

document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('.slider-track');
    const sliderNextBtn = document.querySelector('.slider-next');
    const sliderImages = document.querySelectorAll('.slider-img');
    let sliderIndex = 0;

    if (!sliderTrack || !sliderNextBtn || sliderImages.length === 0) {
        console.warn("Carousel Apropos non trouvé dans le DOM");
        return;
    }

    sliderNextBtn.addEventListener('click', () => {
        sliderImages[sliderIndex].classList.remove('is-active');
        sliderIndex = (sliderIndex + 1) % sliderImages.length;
        sliderImages[sliderIndex].classList.add('is-active');

        const offset = sliderIndex * (200 + 32);
        sliderTrack.style.transform = `translateX(-${offset}px)`;
    });

    // HEADER

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
});
