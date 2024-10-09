<div class="offer-carousel container">
    <figure class="offer-carousel__decoration">

    </figure>
    <div class="offer-carousel__inner">
        <div class="offer-carousel__title">
            {{ $title }}
        </div>
        <div class="offer-carousel__swiper">
            <div class="swiper-wrapper">
                @foreach ($posts as $post)
                    <div class="swiper-slide">
                        @php($item = ['title' => get_the_title($post['id']), 'thumb' => get_the_post_thumbnail_url($post['id']), 'url' => get_the_permalink($post['id'])])
                        <x-offer-carousel-item :title="$item['title']" :thumb="$item['thumb']"
                            :url="$item['url']"></x-offer-carousel-item>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="offer-carousel__btn">
            <x-button :args="$btn"></x-button>
        </div>
    </div>
</div>
