@if (!empty($icons))
    @foreach ($icons as $icon)
        <div class="icon-card">
            <figure class="icon-card__icon">
                <img src="{{ $icon['icon'] }}" alt="{{ $icon['title'] }}">
            </figure>
            <span class="icon-card__title">
                {{ $icon['title'] }}
            </span>
        </div>
    @endforeach
@endif
