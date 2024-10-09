{{--
  Template Name: Kontakt
--}}

@extends('layouts.main')

@section('content')
    <section id="breadcrumbs" class="container">
        @include('partials.breadcrumbs')
    </section>

    <section id="persons" class="container mb-20 !max-w-5xl">
        <h1 class="entity-title text-center"> {{ __('Skontaktuj się', 'aara-theme') }} </h1>
        <div class="contact__persons">
            @foreach ($persons as $person)
                <x-contact-person :args="$person"></x-contact-person>
            @endforeach
        </div>
    </section>

    <section id="staticMap" class="container contact__info !max-w-5xl mb-20">
        <div class="contact__info--content">
            <h2 class="contact__info--title">
                {{ __('Dane Kontaktowe', 'aara-theme') }}
            </h2>
            <div class="contact__info--addr">
                {{ $addr }}
            </div>
            <a href="tel:{{ $tel_inline }}" class="contact-person__link contact-person__link--tel">
                {{ $tel }}
            </a>
            <a href="mailto:{{ $mail }}" class="contact-person__link contact-person__link--mail">
                {{ $mail }}
            </a>

            <div class="contact__info--nip">
                {{ $nip }}
            </div>
            <div class="contact__info--btn">
                <a href="{{ $map_url }}" class="btn btn--accent-blue-stroke btn--icon-start">
                    <img src="{{ asset('/images/maps.svg') }}" alt="Google Maps">
                    {{ __('Wyznacz trasę dojazdu', 'aara-theme') }}
                </a>
            </div>
        </div>
        <figure class="contact__info--map">
            <img src="{{ $map }}" alt="AARA">
        </figure>
    </section>

    <section id="form" class="container contact__form mb-20">
        <div class="max-w-5xl mx-auto">
            <h2 class="section-title mb-10 text-center">
                Napisz do nas wiadomość
            </h2>
            <div class="cf7">
                @php($form = do_shortcode($form))
                {!! $form !!}
            </div>
        </div>
    </section>

    <section id="faq" class="container mb-20">
        <x-faq></x-faq>
    </section>

    <section id="whyUs" class="container mb-20">
        @include('partials.why-us')
    </section>

    {{-- <section id="partners" class="container mb-20">
        @include('partials.partners')
    </section> --}}
@endsection
