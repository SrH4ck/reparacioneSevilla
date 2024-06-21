$(document).ready(function(){
    $('.slider').slick({
        slidesToShow: 2, // Mostrar 3 slides a la vez
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2 // En pantallas más pequeñas, mostrar 2 slides a la vez
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1 // En pantallas aún más pequeñas, mostrar 1 slide a la vez
                }
            }
        ],
        // Añadir margen entre los slides
        centerMode: false, // Desactivar el modo centro si está activado
        centerPadding: '0px', // Eliminar cualquier relleno central
        infinite: true, // Habilitar el desplazamiento infinito
        dots: true, // Mostrar los puntos de navegación
        arrows: true, // Mostrar las flechas de navegación
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>'
    });
});
