<div class="why-us">
    <div class="why-us__content">
        <h2 class="why-us__title">
            {{ $sectionTitle }}
        </h2>
        <div class="why-us__text">
            {!! $text !!}
        </div>
        <div class="why-us__btn">
            <x-button :args="$btn"></x-button>
        </div>
    </div>
    <div class="why-us__icons">
        <x-icon-card :icons="$icons"></x-icon-card>
    </div>
</div>
