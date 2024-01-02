( function () {
    var swiper = new Swiper(".mySwiper", {
        autoplay: true,
        slidesPerView: 2,
        grid: {
            rows: 2,
        },
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            800: {
                slidesPerView: 3,
                grid: {
                    rows: 2,
                },
                spaceBetween: 20,
            },
        },
    });
}() );
