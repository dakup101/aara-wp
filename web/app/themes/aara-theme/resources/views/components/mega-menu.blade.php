@if (!empty($posts))

    <div class="mega-menu">
        @foreach ($posts as $post)
            @php($item = $post['id'])
            <a href="{{ get_the_permalink($item) }}" class="mega-menu__item">
                <figure class="mega-menu__item--img">
                    <img src="{{ get_the_post_thumbnail_url($item) }}" alt="{{ get_the_title($item) }}">
                </figure>
                <div class="mega-menu__item--title">
                    {{ get_the_title($item) }}
                </div>
            </a>
        @endforeach
    </div>

@endif
