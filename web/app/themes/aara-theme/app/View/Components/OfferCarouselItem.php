<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OfferCarouselItem extends Component
{
    public $title;
    public $thumb;
    public $url;

    public function __construct($title = null, $thumb = null, $url = null)
    {
        $this->title = !empty($title) ? $title : "Carousel Item";
        
        $this->thumb = !empty($thumb) ? $thumb : asset("/images/no-img.jpg");

        $this->url = !empty($url) ? $url : "#";
    }

    public function render()
    {
        return view('components.offer-carousel-item');
    }
}