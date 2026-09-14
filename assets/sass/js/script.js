//s'assurer que le DOM est entièrement chargé avant manupulation
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation');

    menuToggle.addEventListener('click' , function () {
        const isOpen =  navigation.classList.toggle('active'); 
     
        menuToggle.setAttribute(
            'aria-expanded' , isOpen
        );

    if (isOpen) {
        menuToggle.setAttribute(
            'aria-label' , 'Fermer le menu'
        );
    } else {
        menuToggle.setAttribute(
            'aria-label' , 'Ouvrir le menu'
        );   
    } // Tester dans l'inspecteur (F12)

    menuToggle.classList.toggle('active');
        
    });
});

//Lightbox
const images = document.querySelectorAll('.img-lemon img');
const lightbox = document.getElementById('lightbox');
const  lightboxImage = document.getElementById('lightbox-image');
const closeButton = document.getElementById('lightbox-close');

// écoute le clic sur chaque image
images.forEach((image) => {

    image.addEventListener('click', () => {

        lightboxImage.src = image.src;
        lightboxImage.alt = image.alt;
        lightbox.classList.add('active');

    });

});

function closeLightbox() {

    lightbox.classList.remove('active');

}


closeButton.addEventListener('click', closeLightbox);


lightbox.addEventListener('click', (event) => {

    if (event.target === lightbox) {

        closeLightbox();

    }

});


document.addEventListener('keydown', (event) => {

    if (event.key === 'Escape') {

        closeLightbox();

    }

});