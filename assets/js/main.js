// Slick Carousel
$(document).ready(function(){
    $('.slick-carousel').slick({
        slidesToShow: 4,  // Muestra 4 productos a la vez
        slidesToScroll: 1, // Desliza un producto a la vez
        arrows: true,      // Muestra las flechas
        dots: true,       // Opcional, muestra los puntos de navegación
        infinite: true,    // Habilita el bucle infinito
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,  // 4 productos a la vez en pantallas medianas
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,  // 2 productos en pantallas pequeñas
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,  // 1 producto en pantallas muy pequeñas
                    slidesToScroll: 1
                }
            }
        ]
    });
});

