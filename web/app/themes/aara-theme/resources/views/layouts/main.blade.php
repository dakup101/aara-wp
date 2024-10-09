@include('sections.header')


<main id="main" class="main">
    @yield('content')

    <div class="sticky-arrow show">
        <div class="sticky-arrow__arrow">
        </div>
        <div class="sticky-arrow__rays">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</main>

@include('sections.pre-footer')

@include('sections.footer')
