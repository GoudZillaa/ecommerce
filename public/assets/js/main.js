/**
 * Refactored version of main.js using only native JavaScript.
 * This file replaces all jQuery dependencies with vanilla JS methods.
 */

// Use a DOMContentLoaded event listener to ensure the script runs after the HTML is fully parsed.
document.addEventListener('DOMContentLoaded', () => {
    "use strict";

    // Select the window element for events
    const windowOn = window;

    /*======================================
    Preloader activation
    ========================================*/
    windowOn.addEventListener("load", () => {
        const preloader = document.getElementById("preloader");
        if (preloader) {
            setTimeout(() => {
                preloader.style.transition = 'opacity 0.5s';
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500);
            }, 500);
        }
    });

    /*======================================
    Mobile Menu Js
    ========================================*/
    const mobileMenu = document.getElementById("mobile-menu");
    if (mobileMenu) {
        // This assumes you are using the meanmenu.js library
        // Since meanmenu is jQuery-dependent, we need to find a vanilla JS equivalent or replace it.
        // For now, let's assume this part needs to be rewritten entirely.
        // A simple toggle example:
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        }
    }

    /*======================================
    Sidebar Toggle
    ========================================*/
    const offcanvasInfo = document.querySelector(".offcanvas__info");
    const offcanvasOverlay = document.querySelector(".offcanvas__overlay");
    const sidebarToggle = document.querySelector(".sidebar__toggle");
    const offcanvasClose = document.querySelector(".offcanvas__close");

    if (offcanvasClose) {
        offcanvasClose.addEventListener("click", () => {
            if (offcanvasInfo) offcanvasInfo.classList.remove("info-open");
            if (offcanvasOverlay) offcanvasOverlay.classList.remove("overlay-open");
        });
    }

    if (offcanvasOverlay) {
        offcanvasOverlay.addEventListener("click", () => {
            if (offcanvasInfo) offcanvasInfo.classList.remove("info-open");
            if (offcanvasOverlay) offcanvasOverlay.classList.remove("overlay-open");
        });
    }

    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", () => {
            if (offcanvasInfo) offcanvasInfo.classList.add("info-open");
            if (offcanvasOverlay) offcanvasOverlay.classList.add("overlay-open");
        });
    }

    /*======================================
    Body overlay Js
    ========================================*/
    const bodyOverlay = document.querySelector(".body-overlay");
    if (bodyOverlay) {
        bodyOverlay.addEventListener("click", () => {
            // Your custom logic for body overlay
        });
    }

    /*======================================
    Sticky header
    ========================================*/
    windowOn.addEventListener("scroll", () => {
        const header = document.getElementById("header-sticky");
        if (header) {
            const scroll = window.scrollY;
            if (scroll < 150) {
                header.classList.remove("sticky");
            } else {
                header.classList.add("sticky");
            }
        }
    });

    /*======================================
    Scroll up
    ========================================*/
    const scrollUpButton = document.querySelector(".scroll-up");
    if (scrollUpButton) {
        windowOn.addEventListener("scroll", () => {
            const scroll = window.scrollY;
            if (scroll < 200) {
                scrollUpButton.style.display = "none";
            } else {
                scrollUpButton.style.display = "block";
            }
        });
        scrollUpButton.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /*======================================
    Custom JS for Scroll Progress Path
    ========================================*/
    const progressPath = document.querySelector(".scroll-progress__path");
    if (progressPath) {
        const pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = "none";
        progressPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = "stroke-dashoffset 10ms linear";
        
        const updateProgress = () => {
            const scroll = window.scrollY;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            const progress = pathLength - (scroll * pathLength) / height;
            progressPath.style.strokeDashoffset = progress;
        };
        updateProgress();
        windowOn.addEventListener("scroll", updateProgress);
    }

    /*======================================
    Swiper slider activation
    ========================================*/
    const swiperContainers = document.querySelectorAll('.furuniture-active');
    swiperContainers.forEach(container => {
        if (typeof Swiper !== 'undefined') {
            new Swiper(container, {
                loop: true,
                spaceBetween: 30,
                slidesPerView: 4,
                navigation: {
                    nextEl: '.furniture__navigation .discount-slider-button-next',
                    prevEl: '.furniture__navigation .discount-slider-button-prev',
                },
                breakpoints: {
                    0: { slidesPerView: 1 },
                    576: { slidesPerView: 2 },
                    768: { slidesPerView: 2 },
                    992: { slidesPerView: 3 },
                    1200: { slidesPerView: 4 }
                }
            });
        }
    });

    console.log('Main JavaScript is running without jQuery!');
});
