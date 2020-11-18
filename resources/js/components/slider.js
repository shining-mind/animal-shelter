
(() => {
    $('.slider-slides').owlCarousel({
        center: true,
        loop: true,
        responsive: {
            0: {
                items:1,
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