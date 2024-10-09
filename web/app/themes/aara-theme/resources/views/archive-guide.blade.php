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
                {!! $desc !!}
            </div>
        </div>
    </section>

    <section id="guidePosts" class="container mb-10">
        @if ($query->have_posts())
            <div class="guide-archive__posts">
                @while ($query->have_posts())
                    @php($query->the_post())
                    <x-guide-archive-item></x-guide-archive-item>
                @endwhile
            </div>
        @endif
    </section>

    <section id="pdfs" class="container mb-20">
        <div class="max-w-4xl mx-auto">
            <h2 class="section-title mb-10">
                {{ $pdfs_title }}
            </h2>

            <div class="guide-archive__pdfs">
                @foreach ($pdfs as $pdf)
                    <a href="{{ $pdf['url'] }}" class="guide-archive__pdfs--item">
                        <img src="{{ asset('/images/pdf.svg') }}" alt="[PDF]">
                        {{ $pdf['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section id="partners" class="container mb-20">
        @include('partials.partners')
    </section> --}}
@endsection
