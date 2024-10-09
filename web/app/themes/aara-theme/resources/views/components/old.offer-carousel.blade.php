<div class="offer-carousel container">
    <figure class="offer-carousel__decoration">

    </figure>
    <div class="offer-carousel__inner">
        <div class="offer-carousel__title">
            {{ $title }}
        </div>
        <div class="offer-carousel__swiper">
            <div class="swiper-wrapper">
                @foreach ($terms as $term)
                    <div class="swiper-slide">
                        <x-offer-carousel-item :term="$term"></x-offer-carousel-item>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="offer-carousel__btn">
            <x-button :args="$btn"></x-button>
        </div>
    </div>
</div>
