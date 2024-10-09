<div class="icons-info">
    <div class="container">
        <h2 class="icons-info__title">
            {{ $sectionTitle }}
        </h2>
    </div>

    <div class="icons-info__row container">
        @foreach ($icons_info as $item)
            <div class="icons-info__item">
                <figure class="icons-info__item--icon">
                    <img src="{{ $item['icon'] }}" alt="{{ $item['title'] }}">
                </figure>
                <div class="icons-info__item--title">
                    {{ $item['title'] }}
                </div>
                <div class="icons-info__item--text">
                    {!! $item['text'] !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
