@extends('layouts.main')

@section('content')
    <section id="breadcrumbs" class="container">
        @include('partials.breadcrumbs')
    </section>

    <section id="start" class="container mb-10">
        <h1 class="guide-archive__title">
            {{ $title }}
        </h1>

        <div class="guide-archive__desc">
            <figure class="guide-archive__desc--decoration">
            </figure>
            <div class="guide-archive__desc--content">
                {!! $excerpt !!}
            </div>
        </div>
    </section>

    <section id="content" class="container typography mb-10">
        {!! $content !!}
    </section>

    @if (!empty($pdfs))
        <section id="pdfs" class="container mb-20">
            <div class="guide-archive__pdfs">
                @foreach ($pdfs as $pdf)
                    <a href="{{ $pdf['url'] }}" class="guide-archive__pdfs--item">
                        <img src="{{ asset('/images/pdf.svg') }}" alt="[PDF]">
                        {{ $pdf['name'] }}
                    </a>
                @endforeach
            </div>
        </section>
    @endif


    @if ($query->have_posts())
        <section id="moreGuides" class="container mb-20">
            <h2 class="section-title text-center mb-10">
                {{ __('Mogą Cię zainteresować tez', 'aara-theme') }}:
            </h2>

            <div class="grid lg:grid-cols-3 gap-5">
                @while ($query->have_posts())
                    @php($query->the_post())
                    <x-guide-archive-item></x-guide-archive-item>
                @endwhile
            </div>
        </section>
    @endif
@endsection
