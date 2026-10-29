(function ($) {
    'use strict';

    var assets = window.__LAZY_ASSETS || {};

    function loadStylesheet(href) {
        if (!href || document.querySelector('link[href="' + href + '"]')) {
            return Promise.resolve();
        }
        return new Promise(function (resolve) {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = href;
            link.onload = function () { resolve(); };
            link.onerror = function () { resolve(); };
            document.head.appendChild(link);
        });
    }

    function loadScript(src) {
        if (!src) {
            return Promise.resolve();
        }
        if (document.querySelector('script[src="' + src + '"]')) {
            return Promise.resolve();
        }
        return new Promise(function (resolve, reject) {
            var script = document.createElement('script');
            script.src = src;
            script.async = true;
            script.onload = function () { resolve(); };
            script.onerror = reject;
            document.body.appendChild(script);
        });
    }

    function initSwipers() {
        if (typeof Swiper === 'undefined') {
            return;
        }

        if (document.querySelector('.logo-swiper')) {
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

        $('.testimonial-slider').each(function () {
            var el = this;
            if (el.__swiperInitialized) {
                return;
            }
            el.__swiperInitialized = true;
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

    function lazyLoadSwiper() {
        if (!assets.needsSwiper) {
            return;
        }

        var targets = document.querySelectorAll('.testimonial-slider, .logo-swiper');
        if (!targets.length) {
            return;
        }

        var loading = false;
        var load = function () {
            if (loading) {
                return;
            }
            loading = true;
            Promise.all([
                loadStylesheet(assets.swiperCss),
                loadScript(assets.swiperJs)
            ]).then(initSwipers).catch(function () { /* ignore */ });
        };

        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function (entries) {
                if (entries.some(function (entry) { return entry.isIntersecting; })) {
                    io.disconnect();
                    load();
                }
            }, { rootMargin: '300px 0px' });
            targets.forEach(function (el) { io.observe(el); });
        } else {
            window.addEventListener('load', load);
        }
    }

    function initIntlTel() {
        var input = document.querySelector('#contact_no');
        if (!input || !window.intlTelInput || input.__intlInitialized) {
            return;
        }
        input.__intlInitialized = true;
        window.intlTelInput(input, {
            initialCountry: 'us',
            separateDialCode: true,
            preferredCountries: ['us', 'gb', 'ca', 'pk'],
            utilsScript: assets.intlUtils || 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js'
        });
    }

    function lazyLoadIntlTel() {
        var input = document.querySelector('#contact_no');
        if (!input) {
            return;
        }

        var loading = false;
        var load = function () {
            if (loading) {
                return;
            }
            loading = true;
            Promise.all([
                loadStylesheet(assets.intlCss),
                loadScript(assets.intlJs)
            ]).then(initIntlTel).catch(function () { /* ignore */ });
        };

        input.addEventListener('focus', load, { once: true });
        input.addEventListener('pointerdown', load, { once: true });

        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function (entries) {
                if (entries.some(function (entry) { return entry.isIntersecting; })) {
                    io.disconnect();
                    load();
                }
            }, { rootMargin: '200px 0px' });
            io.observe(input);
        }
    }

    $(function () {
        lazyLoadSwiper();
        lazyLoadIntlTel();
    });
})(jQuery);
