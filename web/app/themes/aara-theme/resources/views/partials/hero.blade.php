<div class="hero">
    <div class="hero__inner container">
        <div class="hero__left">
            <h1 class="hero__title">
                {!! $sectionTitle !!}
            </h1>

            <div class="hero__content">
                {!! $desc !!}
            </div>

            <div class="hero__action">
                <x-button :args="$btn"></x-button>
            </div>
        </div>
    </div>
    <div class="hero__slider--wrapper">
        <div class="hero__right">
            <div class="hero__slider">
                <div class="swiper-wrapper">
                    @foreach ($slider as $slide)
                        <div class="swiper-slide hero__slider--slide">
                            <figure class="hero__slider--img">
                                <img src="{{ $slide['img'] }}" alt="Drukarnia Aara">
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
            <img class="hero__right--decoration" src="{{ asset('/images/parrot.svg') }}" alt="Drukarnia Aara">
        </div>
    </div>
</div>
