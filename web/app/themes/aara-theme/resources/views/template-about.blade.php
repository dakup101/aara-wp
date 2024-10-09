{{--
  Template Name: About
--}}

@extends('layouts.main')

@section('content')
    <section id="breadcrumbs" class="container">
        @include('partials.breadcrumbs')
    </section>

    <section id="part1" class="container mb-20">
        <h1 class="about__title"> {{ $title_1 }} </h1>
        <div class="about__part text-center">
            {!! $part_1 !!}
        </div>
    </section>

    <section id="banner1" class="container mb-20">
        <figure class="about__banner">
            <img src="{{ $banner_1 }}" alt="{{ $title_1 }}">
        </figure>
    </section>

    <section id="part2" class="container mb-20">
        @include('partials.why-us')
    </section>

    {{-- <section id="banner2" class="container mb-20">
        <figure class="about__banner">
            <img src="{{ $banner_2 }}" alt="{{ $title_1 }}">
        </figure>
    </section> --}}

    <section id="part3" class="container mb-20">
        <div class="about__text-img">
            <figure class="about__text-img--img">
                <img src="{{ $img }}" alt="{{ $title_2 }}">
            </figure>
            <div class="about__text-img--text">
                {{-- <h2 class="about__subtitle">
                    {{ $title_2 }}
                </h2> --}}
                <div class="about__part">
                    {!! $part_2 !!}
                </div>
                {{-- <div class="about__text-img--btn">
                    <x-button></x-button>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <section id="partners" class="container mb-20">
        @include('partials.partners')
    </section> --}}
@endsection
