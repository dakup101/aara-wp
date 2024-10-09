<div class="portfolio-item">
    <div class="portfolio-item__thumb">
        <div class="portfolio-item__thumb--img">
            <img src="{{ $thumb }}" alt="{{ $title }}">
        </div>
    </div>
    <div class="portfolio-item__content">
        <h4 class="portfolio-item__title">
            {{ $title }}
        </h4>

        <div class="portfolio-item__brand">
            <span class="protfolio-item__brand--label">
                {{ __('Marka', 'aara-theme') }}:
            </span>
            <span class="portfolio-item__brand--value">
                {{ $brand }}
            </span>
        </div>

        <div class="portfolio-item__specs">
            @foreach ($specs as $spec)
                <div class="portfolio-item__specs--item">
                    <span class="portfolio-item__specs--label">
                        {{ $spec['label'] }}:
                    </span>
                    <span class="portfolio-item__specs--value">
                        {{ $spec['value'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <x-button :args="['text' => 'Skontaktuj się w sprawie wyceny', 'url' => '/kontakt/']"></x-button>
    </div>
</div>
