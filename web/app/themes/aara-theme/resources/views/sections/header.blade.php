<header class="header">
    <div class="header__inner container">
        <a href="{{ get_home_url() }}" class="header__logo">
            <img src="{{ asset('/images/logo.svg') }}" alt="Drukarnia AARA">
        </a>
        <button class="header__mobile-trigger">
            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m11 16.745c0-.414.336-.75.75-.75h9.5c.414 0 .75.336.75.75s-.336.75-.75.75h-9.5c-.414 0-.75-.336-.75-.75zm-9-5c0-.414.336-.75.75-.75h18.5c.414 0 .75.336.75.75s-.336.75-.75.75h-18.5c-.414 0-.75-.336-.75-.75zm4-5c0-.414.336-.75.75-.75h14.5c.414 0 .75.336.75.75s-.336.75-.75.75h-14.5c-.414 0-.75-.336-.75-.75z"
                    fill-rule="nonzero" />
            </svg>
        </button>
        <nav class="header__nav">
            {!! $menu !!}


            @php($lang_selecor = do_shortcode('[gtranslate]'))
            <div class="header__lang">
                {!! $lang_selecor !!}
            </div>
        </nav>
        <x-mega-menu></x-mega-menu>
    </div>
</header>
