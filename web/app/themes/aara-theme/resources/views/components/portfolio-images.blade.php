<div class="portfolio">

    <div class="container">
        <h2 class="portfolio__title">
            {{ $title }}
        </h2>

    </div>

    <div class="portfolio__inner container">



        @if ($query->have_posts())
            <div class="portfolio__slider images">

                <div class="portfolio__nav">
                    <div class="portfolio__nav--next swiper-button-next">

                    </div>

                    <div class="portfolio__nav--prev swiper-button-prev">

                    </div>
                </div>

                <div class="swiper-wrapper">
                    @while ($query->have_posts())
                        @php($query->the_post())
                        <div class="swiper-slide">
                            <x-portfolio-images-item></x-portfolio-images-item>
                        </div>
                    @endwhile
                    @php(wp_reset_query())
                </div>
            </div>
        @endif
    </div>
</div>
