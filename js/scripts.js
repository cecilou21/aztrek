$(document).ready(function () {
    // Code actif

    // Menu Burger
    $('.burger').sidr({
        name: 'respNav',
        source:'.main-nav',
        displace: false,
        
    });

    $(document).on("click", function () {
        $.sidr('close', 'respNav');
    });

    // Carousel

    $('.section1').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 900,
        autoplayHoverPause: true,
    });

    $('.section3-contents').owlCarousel({
        loop: true,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:5
            }
        }
    });



}); /*toujours faire gaffe a ce que cet element soit toujours en bas*/