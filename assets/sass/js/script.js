//s'assurer que le DOM est entièrement chargé avant manupulation
document.addEventListener("DOMContentLoaded" , () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation');
    console.log("navigation");

    if (menuToggle && navigation) {
        menuToggle.addEventListener(' click' , () => {
            navigation.classList.toggle('active');
            console.log('test');
            

            // Accessibilité : change l'état du menu pour les lecteurs d'écran
            const isExpanded = burger.getAttribute('aria-expanded') === 'true';
            burger.setAttribute('aria-expanded' , !isExpanded);
        });
    }
    
});




