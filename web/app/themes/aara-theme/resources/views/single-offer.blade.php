@extends('layouts.main')

@section('content')
    <section id="breadcrumbs" class="container">
        @include('partials.breadcrumbs')
    </section>

    <section id="offerDescription" class="container mb-20 single-offer__start">
        <div class="single-offer__desc">
            <div class="single-offer__desc--content">
                <h1 class="single-offer__title">
                    {{ $title }}
                </h1>
                <div class="single-offer__desc--text">
                    {!! $desc !!}
                </div>
            </div>
            <div class="single-offer__form">
                <div class="contact__form">
                    <h2 class="section-title mb-10 text-center">
                        Zostaw kontakt do siebie
                    </h2>
                    <div class="cf7">
                        @php($form = do_shortcode($form))
                        {!! $form !!}
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="offerGallery" class="container mb-20">
        <div class="single-offer__gallery">
            @foreach ($images as $item)
                <a href="{{ $item['img'] }}" class="single-offer__gallery--item glightbox">
                    <img src="{{ $item['img'] }}" alt="{{ get_the_title() }}">
                    <span>Zobacz</span>
                </a>
            @endforeach
        </div>
    </section>

    <section id="whyUs" class="container mb-20">
        @include('partials.why-us')
    </section>

    {{-- <section id="partners" class="container mb-20">
        @include('partials.partners')
    </section> --}}
@endsection
