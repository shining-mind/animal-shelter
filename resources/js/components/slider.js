
(() => {
    $('.slider-slides').owlCarousel({
        center: true,
        loop: true,
        nav: true,
        margin: 15,
        responsive: {
            0: {
                items:1,
                nav: false,
            },
            768: {
                items:3,
            },
            992: {
                items:5,
            }
        }
    });
})();