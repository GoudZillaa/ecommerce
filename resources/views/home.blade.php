@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('partials.banner') 
    @include('partials.services')
    @include('partials.furnitureOffers')
    @include('partials.featuredProducts')
    <!-- @include('partials.test') -->
@endsection
