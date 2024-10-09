<div class="offer-cta">
    <figure class="offer-cta__img">
        <img src="{{ $args['img'] }}" alt="{{ $args['title'] }}">
    </figure>
    <h2 class="offer-cta__title">
        {!! $args['title'] !!}
    </h2>
    <div class="offer-cta__desc">
        {!! $args['desc'] !!}
    </div>

    <div class="offer-cta__button">
        <x-button :args="$args['btn']"></x-button>
    </div>
</div>
