@extends('layouts.main')

@section('content')
    <section id="breadcrumbs" class="container">
        @include('partials.breadcrumbs')
    </section>

    <section id="offerStart" class="offer-archive__top container mb-10">
        <h1 class="offer-archive__title">
            {{ $title }}
        </h1>
        <div class="offer-archive__desc">
            {!! $desc !!}
        </div>
    </section>

    <section id="offerCategories" class="container mb-20">
        @if (!empty($items))
            <div class="offer-archive__posts">

                @foreach ($items as $item)
                    <x-offer-cat-link :title="$item['title']" :thumb="$item['thumb']" :url="$item['url']"></x-offer-cat-link>
                @endforeach
            </div>
        @else
        @endif
    </section>

    <section id="offerPortfolio" class="mb-20">
        <x-portfolio></x-portfolio>
    </section>

    <section id="whyUs" class="container mb-20">
        @include('partials.why-us')
    </section>

    {{-- <section id="partners" class="container mb-20">
        @include('partials.partners')
    </section> --}}
@endsection
