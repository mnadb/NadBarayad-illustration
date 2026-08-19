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
