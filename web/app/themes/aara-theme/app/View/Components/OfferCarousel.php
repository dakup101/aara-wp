<?php

namespace App\View\Components;

use Illuminate\View\Component;
use WP_Term;

class OfferCarousel extends Component
{
    public $title;
    public $posts;
    public $btn;

    public function __construct($data = [])
    {
        $this->title = !empty($data["title"]) ? $data["title"] : "Offer Carousel's title";
        $this->btn = !empty($data["btn"]) ? $data["btn"] : [];
        $this->posts = !empty($data["terms"]) ? $data["terms"] : [];
    }

    public function render()
    {
        return view('components.offer-carousel');
    }
}