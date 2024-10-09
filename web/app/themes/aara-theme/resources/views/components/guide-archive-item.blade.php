<a href="{{ $url }}" class="guide-archive-item">
    <figure class="guide-archive-item__icon">
        <img src="{{ $icon }}" alt="{{ $title }}">
    </figure>
    <div class="guide-archive-item__content">
        <h4 class="guide-archive-item__title">
            {{ $title }}
        </h4>
        <div class="guide-archive-item__excerpt">
            {!! $excerpt !!}
        </div>
    </div>
</a>
