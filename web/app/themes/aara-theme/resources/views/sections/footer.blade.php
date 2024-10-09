<footer class="footer">
    <div class="footer__top container">
        <div class="footer__info">
            <a href="{{ get_home_url() }}" class="footer__logo">
                <img src="{{ asset('/images/logo.svg') }}" alt="AARA">
            </a>
            <div class="typography">
                {!! $footer_info !!}
            </div>
        </div>
        <div class="footer__col">
            <h4 class="footer__title">
                {{ __('Nasze produkty', 'aara-theme') }}
            </h4>

            {!! $footer_menu_1 !!}
        </div>
        <div class="footer__col">
            <h4 class="footer__title">
                {{ __('Menu', 'aara-theme') }}
            </h4>

            {!! $footer_menu_2 !!}
        </div>
    </div>

    <div class="footer__bot container">
        <div class="footer__languages">
            @php($lang = do_shortcode('[gt-link lang="pl" label="Polski" widget_look="flags_name"]'))
            {!! $lang !!}
            @php($lang = do_shortcode('[gt-link lang="uk" label="Українська" widget_look="flags_name"]'))
            {!! $lang !!}
        </div>
        <div class="footer__copyright">
            {{ __('Wszystkie prawa zastrzeżone 2023 Aara®', 'aara-theme') }}
        </div>
        <div class="footer__everywhere">
            <a href="https://everywhere.pl" rel="nofollow">
                <img src="{{ asset('/images/everywhere.svg') }}" alt="Everywhere">
            </a>
        </div>
    </div>
</footer>
