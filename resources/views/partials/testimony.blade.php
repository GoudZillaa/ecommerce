<?php
/**
 * Blade partial for the testimonial carousel.
 * This file contains the HTML and a small amount of JavaScript to initialize
 * the Swiper.js carousel for the testimonial section.
 *
 * It should be included in a parent layout file, e.g., using `@include('partials.testimonial-carousel')`.
 *
 * IMPORTANT: The necessary CSS and JavaScript libraries (Tailwind, Font Awesome, Swiper)
 * must be loaded in your main layout file (e.g., `app.blade.php`).
 */
?>

<!-- Main Testimonial Section Container -->
<div class="testi-container relative w-screen mx-auto rounded-none overflow-hidden shadow-none -ml-[calc(50vw-50%)] -mr-[calc(50vw-50%)]">
    <!-- Background Image with Overlay -->
    <div class="testi-bg absolute inset-0 bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080/0F172A/E2E8F0?text=Background+Image');">
        <!-- Semi-transparent overlay to make text pop -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>

    <!-- Content Layer -->
    <div class="testi-content relative z-10 p-8 sm:p-12 md:p-16">
        <!-- Section Header -->
        <div class="testi-header text-center mb-12">
            <span class="testi-subtitle text-yellow-300 uppercase tracking-widest text-sm font-semibold block mb-2">
                Testimonials
            </span>
            <h2 class="testi-title text-white text-4xl sm:text-5xl font-bold">
                Client Feedback
            </h2>
        </div>

        <!-- Swiper Container -->
        <div class="swiper mySwiper">
            <!-- Wrapper for the slides -->
            <div class="swiper-wrapper">
                <!-- Testimonial Card 1 -->
                <div class="swiper-slide p-2">
                    <div class="testi-card bg-white rounded-xl shadow-xl p-6 sm:p-8 hover:shadow-2xl transition-all duration-300">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="testi-stars text-sm text-yellow-400 mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h3 class="testi-name text-lg font-bold text-gray-900">Ralph Edwards</h3>
                                <p class="testi-designation text-sm text-gray-500">UI/UX Designer</p>
                            </div>
                            <div class="testi-quote-icon text-gray-300 text-4xl">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <p class="testi-text text-sm text-gray-700 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.
                        </p>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="swiper-slide p-2">
                    <div class="testi-card bg-white rounded-xl shadow-xl p-6 sm:p-8 hover:shadow-2xl transition-all duration-300">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="testi-stars text-sm text-yellow-400 mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h3 class="testi-name text-lg font-bold text-gray-900">Jerome Bell</h3>
                                <p class="testi-designation text-sm text-gray-500">Web Designer</p>
                            </div>
                            <div class="testi-quote-icon text-gray-300 text-4xl">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <p class="testi-text text-sm text-gray-700 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.
                        </p>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="swiper-slide p-2">
                    <div class="testi-card bg-white rounded-xl shadow-xl p-6 sm:p-8 hover:shadow-2xl transition-all duration-300">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <div class="testi-stars text-sm text-yellow-400 mb-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h3 class="testi-name text-lg font-bold text-gray-900">Annette Black</h3>
                                <p class="testi-designation text-sm text-gray-500">Dog Trainer</p>
                            </div>
                            <div class="testi-quote-icon text-gray-300 text-4xl">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <p class="testi-text text-sm text-gray-700 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit vestibulum viverra eget felis interdum fusce odio lacus.
                        </p>
                    </div>
                </div>

                <!-- Add more slides here if needed -->
            </div>

            <!-- Navigation Arrows -->
            <div class="testi-nav-arrows flex justify-center mt-12 space-x-4">
                <button class="swiper-button-prev testi-arrow-btn w-12 h-12 flex items-center justify-center rounded-full border-2 border-white text-white hover:bg-white hover:text-black transition-colors duration-200">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="swiper-button-next testi-arrow-btn w-12 h-12 flex items-center justify-center rounded-full border-2 border-white text-white hover:bg-white hover:text-black transition-colors duration-200">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Swiper Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper(".mySwiper", {
            // Number of slides visible at a time
            slidesPerView: 1,
            // Spacing between slides in px
            spaceBetween: 30,
            // Enables continuous loop mode
            loop: true,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 3,
                },
            },
            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
</script>
