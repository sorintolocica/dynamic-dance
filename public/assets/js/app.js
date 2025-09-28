new Swiper('.home_slider', {
    effect: "slide",
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: ".home-pagination",
        clickable: true,
    }
});

new Swiper('.team_content', {
    effect: "slide",
    loop: true,
    grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
        el: ".team-pagination",
        clickable: true,
    },
    breakpoints: {
        1440: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 3,
        },

        768: {
            slidesPerView: 2,
        },

        0: {
            slidesPerView: 1,
        }
    }
});

new Swiper('.location_slider', {
    effect: "slide",
    loop: true,
    grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
        el: ".location-pagination",
        clickable: true,
    },
    breakpoints: {
        1440: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 2,
        },

        768: {
            slidesPerView: 2,
        },

        0: {
            slidesPerView: 1,
        }
    }
});
