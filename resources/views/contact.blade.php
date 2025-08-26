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
        <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
            <div class="breadcrumb__thumb" data-background="assets/imgs/bg/breadcrumb-bg.jpg" style="background-image: url(&quot;assets/imgs/bg/breadcrumb-bg.jpg&quot;);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__wrapper text-center">
                                <h2 class="breadcrumb__title">Contact us</h2>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.html">Home</a></span></li>
                                        <li><span>Contact Us</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.contactSection')
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


</body>
</html>