<!DOCTYPE html>
<html>
<head>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- FontAwesome for icons -->
    
    
    <!-- Frameworks -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">

    <!-- Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- âœ… Your Custom CSS (last so it overrides all above) -->
    @vite('resources/css/app.css')

    <title>@yield('title', 'My Furniture Shop')</title>
</head>

<body>

    @include('partials.header')

    <main>
        @include('partials.breadCrumb')
        @include('partials.aboutArea')
        <div class="postbox__thumb postbox__video w-img p-relative">
            <a href="blog-details.html">
                <img src="assets/imgs/furniture/about/about-video-image.jpg" alt="image">
            </a>
            <a href="https://www.youtube.com/watch?v=YkfPITD2C8Y" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
        </div>
        <div class="mb-80">

            @include('partials.supportSection')
        </div>
    </main>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/beforeafter.jquery-1.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 3,
                }
            },

            // Navigation arrows
            navigation: {
                nextEl: '.testi-arrow-btn:last-child',
                prevEl: '.testi-arrow-btn:first-child',
            },
        });
    });
</script> -->

</body>
</html>