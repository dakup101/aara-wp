<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OfferCarouselItem extends Component
{

    public $term;
    public $title;
    public $thumb;
    public $url;

    public function __construct($term)
    {
        $this->term = $term["term"];

        $this->title = $this->term->name;
        
        $term_thumb = get_field("thumb", $this->term);
        $this->thumb = !empty($term_thumb) ? $term_thumb : asset("/images/no-img.jpg");

        $term_url = get_term_link( $this->term, $this->term->taxonomy );
        $this->url = !empty($term_url) ? $term_url : "#";
    }

    public function render()
    {
        return view('components.offer-carousel-item');
    }
}