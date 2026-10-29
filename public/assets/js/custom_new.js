jQuery(document).ready(function ($) {
    if (typeof Swiper !== 'undefined' && document.querySelector('.logo-swiper')) {
        new Swiper('.logo-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 150,
            centeredSlides: true,
            loop: true,
            speed: 6000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            allowTouchMove: false,
            simulateTouch: false,
            preventClicks: false,
            preventClicksPropagation: false,
            breakpoints: {
                320: { spaceBetween: 100 },
                992: { spaceBetween: 120 },
                1200: { spaceBetween: 180 }
            }
        });
    }

    if (typeof Swiper !== 'undefined') {
        $('.testimonial-slider').each(function () {
            var el = this;
            var paginationEl = el.querySelector('.swiper-pagination');
            var nextEl = el.querySelector('.swiper-button-next');
            var prevEl = el.querySelector('.swiper-button-prev');
            var config = {
                slidesPerView: 1,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            };
            if (paginationEl) {
                config.pagination = { el: paginationEl, clickable: true };
            }
            if (nextEl && prevEl) {
                config.navigation = { nextEl: nextEl, prevEl: prevEl };
            }
            new Swiper(el, config);
        });
    }

    var input = document.querySelector('#contact_no');
    if (input && window.intlTelInput) {
        window.intlTelInput(input, {
            initialCountry: 'us',
            separateDialCode: true,
            preferredCountries: ['us', 'gb', 'ca', 'pk'],
            utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js'
        });
    }
});
