@extends('layouts.main')

@section('content')
    <section id="breadcrumbs" class="container">
        @include('partials.breadcrumbs')
    </section>

    <section id="offerDescription" class="container mb-20">
        <div class="single-offer__desc">
            <figure class="single-offer__desc--img">
                <img src="{{ $thumbnail }}" alt="{{ $title }}">
            </figure>
            <div class="single-offer__desc--content">
                <h1 class="single-offer__title">
                    {{ $title }}
                </h1>
                <div class="single-offer__desc--text">
                    {!! $desc !!}
                </div>
                <div class="single-offer__desc--btn">
                    <x-button :args="['text' => 'Sprawdź szczegóły', 'class' => 'btn--arrow', 'color' => 'accent-text']"></x-button>
                </div>
            </div>
        </div>
    </section>

    <section id="offerProperties" class="container mb-20">
        <x-offer-properties :title="__('Cechy produktu:', 'aara-theme')" :items="$properties"></x-offer-properties>
    </section>

    <section id="offerDetails" class="container mb-20">
        <div class="single-offer__details">
            <div class="single-offer__details--content">
                <h2 class="single-offer__details--title">
                    {{ $desc_long['title'] }}
                </h2>
                <div class="single-offer__details--text">
                    {!! $desc_long['desc'] !!}
                </div>
                <div class="single-offer__details--btn">
                    <x-button :args="$desc_long['btn']"></x-button>
                </div>

                <div class="single-offer__details--decoration">
                    <figure></figure>
                    <span>{{ __('Kliknij i sprawdź szczegóły', 'aara-theme') }}</span>
                </div>
            </div>
            <div class="single-offer__details--interactive">
                <div id="offerInteractive" data-img="{{ $desc_long['img'] }}"
                    data-pins="{{ json_encode($desc_long['pins'], JSON_UNESCAPED_SLASHES) }}">
                </div>
            </div>
        </div>
    </section>

    <section id="offerInfo" class="container mb-20">

        <h2 class="single-offer__info--title">
            {{ __('Szczegóły techniczne') }}:
        </h2>

        <div class="single-offer__info">
            <div class="single-offer__info--pdf">
                <img src="{{ $info['info_pdf_preview'] }}" alt="Szczegóły PDF">
                <a href="{{ $info['info_pdf'] }}" class="single-offer__info--download">
                    <img src="{{ asset('/images/pdf.svg') }}" alt="PDF">
                    {{ __('Zobacz podgląd .pdf', 'aara-theme') }}
                </a>
            </div>
            <div class="single-offer__info--steps">
                <img src="{{ $info['steps'] }}" alt="Jak sładać">
            </div>
        </div>
    </section>

    <section id="offerPortfolio" class="mb-20">
        @php($id = get_the_ID())
        <x-portfolio :product="$id"></x-portfolio>
    </section>

    <section id="whyUs" class="container mb-20">
        @include('partials.why-us')
    </section>

    {{-- <section id="partners" class="container mb-20">
        @include('partials.partners')
    </section> --}}
@endsection
