<div class="offer-archive__item">

    <h4 class="offer-archive__item--title">
        <a href="{{ $url }}">{{ $title }}</a>
    </h4>

    <a href="{{ $url }}" class="offer-archive__item--link">
        <figure class="offer-archive__item--thumb">
            <img src="{{ $thumb }}" alt="{{ $title }}">
        </figure>
        <span>{{ __('Zobacz więcej', 'aara-theme') }}</span>
    </a>
</div>
