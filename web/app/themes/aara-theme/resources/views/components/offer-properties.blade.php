<div class="offer-properties">
    <div class="offer-properties__top">
        <h2 class="offer-properties__title">
            {{ $title }}
        </h2>
        <div class="offer-properties__nav">
            <div class="swiper-button-prev offer-properties__nav--prev"></div>
            <div class="swiper-button-next offer-properties__nav--next"></div>
        </div>
    </div>
    <div class="swiper-wrapper">
        @foreach ($items as $item)
            <div class="swiper-slide">
                <div class="offer-properties__item">
                    <figure class="offer-properties__item--icon">
                        <img src="{{ $item['icon'] }}" alt="{{ $item['title'] }}">
                    </figure>
                    <h4 class="offer-properties__item--title">
                        {{ $item['title'] }}
                    </h4>
                    <div class="offer-properties__item--desc">
                        {{ $item['desc'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
