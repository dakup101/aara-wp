<div class="map">
    <div id="contactMap" class="map__google">

    </div>


    <div class="container map__info">
        <div class="map__info--inner">
            <div class="map__info--title">
                {{ $sectionTitle }}
            </div>
            <div class="map__info--addr">
                {!! $addr !!}
            </div>
            <div class="map__info--btn">
                <a href="{{ $maps_url }}" class="btn btn--white btn--icon-start">
                    <img src="{{ asset('/images/maps.svg') }}" alt="Google Maps">
                    {{ __('Wyznacz trasę dojazdu', 'aara-theme') }}
                </a>
            </div>
        </div>
    </div>

</div>
