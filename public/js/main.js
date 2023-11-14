
/* ===================SCROLL UP==============*/
const scrollUp= () =>{
    const scrollUp = document.getElementById('scroll-up')
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
                        : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=========sombreado en la sections========*/
const sections = document.querySelectorAll('section[id]');

const scrollActive = () => {
    const scrollDown = window.scrollY;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight,
            sectionTop = current.offsetTop - 58,
            sectionId = current.getAttribute('id'),
            sectionClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']');

        if (sectionClass) {
            if (scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight) {
                sectionClass.classList.add('active-link');
            } else {
                sectionClass.classList.remove('active-link');
            }
        }
    });
};

window.addEventListener('scroll', scrollActive);


/*===============Ventana emergente============= */
function toggleVentanaEmergente() {
    var ventanaEmergente = document.getElementById('ventanaEmergente');
    ventanaEmergente.style.display = (ventanaEmergente.style.display === 'block') ? 'none' : 'block';
}

function ajustarInterfaz() {
    var iconoFlecha = document.getElementById('iconoFlecha');
    var ventanaEmergente = document.getElementById('ventanaEmergente');

    if (window.innerWidth >= 1150) { // Si es un escritorio
        iconoFlecha.style.display = 'inline';
        ventanaEmergente.style.display = 'none';
    } else { // Si es un dispositivo móvil
        iconoFlecha.style.display = 'none';
        ventanaEmergente.style.display = 'block';
    }
}

// Llamamos a la función cuando se carga la página y cuando se redimensiona la ventana
window.addEventListener('load', ajustarInterfaz);
window.addEventListener('resize', ajustarInterfaz);


/*===============EFECTO DE MOVIMIENTO EN LA SECCIONES============= */
const sr = ScrollReveal({
    origin:'top',
    distance:'60px',
    duration: 2500,
    delay: 400,
    // reset: true,
})

sr.reveal('.home__data, .join__container, .footer')
sr.reveal('.home__img', {origin: 'bottom'})
sr.reveal('.enjoy__card, .popular__card',  {interval: 100})
sr.reveal('.about__data', {origin: 'right'})
sr.reveal('.about__img', {origin: 'left'})
sr.reveal('.loginn', {origin: 'left'})
sr.reveal('.contenedor', {origin: 'right'})