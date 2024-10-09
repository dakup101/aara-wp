@if (!empty($posts))

    <div class="mega-menu">
        @foreach ($posts as $post)
            @php($term = $post['term'])
            <a href="{{ get_term_link($term, 'offer_cat') }}" class="mega-menu__item">
                <figure class="mega-menu__item--img">
                    <img src="{{ get_field('thumb', $term) }}" alt="{{ $term->name }}">
                </figure>
                <div class="mega-menu__item--title">
                    {{ $term->name }}
                </div>
            </a>
        @endforeach
    </div>

@endif
