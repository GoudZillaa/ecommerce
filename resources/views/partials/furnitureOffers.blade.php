@php
    $offers = [
        [
            'link' => 'product-details.html',
            'image' => 'assets/imgs/furniture/product/off-01.png',
            'discount' => 'GET 30% OFF',
            'title' => 'wicker hanging <br> chairs',
        ],
        [
            'link' => 'product-details.html',
            'image' => 'assets/imgs/furniture/product/off-02.png',
            'discount' => 'GET 15% OFF',
            'title' => 'Brasslegged <br> Armchair',
        ],
    ];
@endphp

<section class="furniture-off pb-100">
    <div class="container">
        <div class="row g-4">
            @foreach ($offers as $offer)
                <div class="col-lg-6">
                    <a href="{{ $offer['link'] }}"
                       class="furniture-off__item bg-image d-block"
                       style="background-image: url('{{ asset($offer['image']) }}');">
                        <span class="fo-discount">{{ $offer['discount'] }}</span>
                        <h3 class="text-capitalize">{!! $offer['title'] !!}</h3>
                        <div class="solid-btn mt-30">
                            Buy Now <span><i class="fa-regular fa-angle-right"></i></span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
