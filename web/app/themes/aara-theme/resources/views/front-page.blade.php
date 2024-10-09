@extends('layouts.main')

@section('content')
    <section id="hero" class="mb-5">
        @include('partials.hero');
    </section>

    <section id="offer" class="mb-20">
        @include('partials.offer')
    </section>

    <section id="offerPortfolio" class="mb-20">
        <x-portfolio-images title="{{ __('Zobacz nasze realizacje', 'aara-theme') }}"></x-portfolio-images>
    </section>

    <section id="whyUs" class="container mb-20">
        @include('partials.why-us')
    </section>

    <section id="cta" class="container mb-20">
        <x-faq></x-faq>
    </section>

    {{-- <section id="partners" class="container mb-20">
        @include('partials.partners')
    </section> --}}
@endsection
