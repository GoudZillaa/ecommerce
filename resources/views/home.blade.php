@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.banner') 
    @include('partials.services')
    @include('partials.furnitureOffers')
    @include('partials.featuredProducts')
    @include('partials.furnitureRating')
    @include('partials.furnitureTrendy')
    @include('partials.furnitureAd')
    @include('partials.furnitureTestimonials')
    @include('partials.bestSeller')
    @include('partials.blogSection')
    @include('partials.supportSection')
    @include('partials.brandArea')
@endsection
