@extends('frontend.layouts.app')

@section('content')



{{--NEW CODE START HERE!! --}}

    <section class="error-sec container">
        <img src="{{ asset('frontend/Lingosphere/img/error.png') }}" alt="" class="error-img">
        <p class="text-center">500 Technical Error, <br> Please try again later.</p>
        <a href="{{ route('home') }}" class="e-btn btn">return home</a>
    </section>


{{--NEW CODE END HERE!! --}}

@endsection
@section('script')

<script src="{{ asset('frontend/Lingosphere/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/Lingosphere/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/Lingosphere/js/owl.carousel.js') }}"></script>
@endsection