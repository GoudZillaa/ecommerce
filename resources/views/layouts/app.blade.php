<!DOCTYPE html>
<html>
<head>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Frameworks -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-pro.css') }}">

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
        @yield('content')
    </main>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
    <script>
document.addEventListener('DOMContentLoaded', () => {
    // Ensure any existing swiper instance is destroyed first
    const existingSwiper = document.querySelector('.banner-active');
    if (existingSwiper && existingSwiper.swiper) {
        existingSwiper.swiper.destroy(true, true);
    }
    
    const swiper = new Swiper('.banner-active', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        pagination: {
            el: '.banner-dot',
            clickable: true,
            type: 'bullets',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        on: {
            init: function () {
                console.log('Swiper initialized successfully');
            }
        }
    });
});
</script>

</body>
</html>