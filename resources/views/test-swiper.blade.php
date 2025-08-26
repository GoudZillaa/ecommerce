<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swiper Test</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .swiper-container {
            width: 600px;
            height: 300px;
            margin: 50px auto;
            border: 2px solid #ddd;
            border-radius: 10px;
        }
        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            background: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Swiper via Vite + NPM</h1>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</body>
</html>
