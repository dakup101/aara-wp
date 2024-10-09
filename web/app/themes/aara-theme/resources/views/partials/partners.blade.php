<div class="partners">
    <h2 class="partners__title">
        {{ $partners_title }}
    </h2>

    <div class="partners__text">
        {!! $partners_text !!}
    </div>

    <div class="partners__logos">
        @foreach ($partners_logos as $item)
            <div class="partners__logos--item">
                <img src="{{ $item['logo'] }}" alt="">
            </div>
        @endforeach
    </div>
</div>
